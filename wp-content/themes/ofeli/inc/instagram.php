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

    public function getUserMedia() {
        if(!empty($this->token)) {
            $this->getAccess();
            return $this->service->getUserMedia('me', 4)->data;
        } else {
            return [];
        }
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

$api = new InstagramAPI();
