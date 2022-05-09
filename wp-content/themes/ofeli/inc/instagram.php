<?php

require 'library/InstagramAPI/InstagramBasicDisplay.php';

use EspressoDev\InstagramBasicDisplay\InstagramBasicDisplay;

class InstagramAPI {
    private $appId;
    private $appSecret;
    private $redirectUri;
    private $service;
    private $token;

    public function __construct()
    {
        $this->appId = getOption('instagram')['app_id'];
        $this->appSecret = getOption('instagram')['app_secret'];
        $this->redirectUri = getOption('instagram')['redirect_uri'];

        if(!empty($this->appId) && !empty($this->appSecret) && !empty($this->redirectUri)) {
            $this->registerService();
        } else {
            return [];
        }

        $token = get_option('instagram_long_token') ?? '';

        if(!empty($token)) {
            $this->token = $token;
        }
    }

    private function registerService() {
        $this->service = new InstagramBasicDisplay([
            'appId' => $this->appId,
            'appSecret' => $this->appSecret,
            'redirectUri' => $this->redirectUri
        ]);
    }

    public function login() {
        return $this->service->getLoginUrl();
    }

    public function setAccess($code) {
        $token = $this->service->getOAuthToken($code, true);
        $this->token = $this->service->getLongLivedToken($token, true);
        add_option('instagram_long_token', $this->token);
    }

    public function getAccess() {
        //Refresh token
        $this->service->refreshToken($this->token);
        //Set access
        $this->service->setAccessToken($this->token);
    }

    private function getPosts() {
        global $wpdb;
        $wpdb_prefix = $wpdb->prefix;
        $wpdb_tablename = $wpdb_prefix . 'instagram_posts';
        return $wpdb->get_results("SELECT * FROM `{$wpdb_tablename}`");
    }

    private function insertPosts($posts) {
        global $wpdb;
        $table_name = $wpdb->prefix . 'instagram_posts';

        foreach ($posts as $post) {
            $wpdb->insert(
                $table_name,
                array(
                    'image' => $post->media_url,
                    'link' => $post->permalink,
                )
            );
        }
    }

    public function getUserMedia() {
        $this->deploy();
        if(!empty($this->token)) {
            $rows = $this->getPosts();

            if(empty($rows)) {
                $this->getAccess();
                $this->insertPosts($this->service->getUserMedia('me', 4)->data);
            }

            return $this->getPosts();
        } else {
            return [];
        }
    }

    private function deploy() {
        global $wpdb;
        $table_name = $wpdb->prefix . "instagram_posts";

        global $wpdb;

        $charset_collate = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE IF NOT EXISTS $table_name (
          id mediumint(9) NOT NULL AUTO_INCREMENT,
          image varchar(1000) NOT NULL,
          link varchar(1000) NOT NULL,
          PRIMARY KEY  (id)
        ) $charset_collate;";

        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        dbDelta( $sql );
    }
}


if(isset($_GET['instagramLogin'])) {
    $api = new InstagramAPI();
    echo '<a href="' . $api->login() . '">Авторизоваться</a>';
    exit;
}

if(isset($_GET['code'])) {
    $code = $_GET['code'];
    $api = new InstagramAPI();
    $api->setAccess($code);
    header('Location: ' . site_url());
}
