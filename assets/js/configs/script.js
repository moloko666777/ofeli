

//google map
let map;

function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: 43.637646, lng: -79.5311564 },
        zoom: 15,
    });
}
//



$(document).ready(function(){
    $('.phone').mask('000-000-000');
});