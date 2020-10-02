

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


// setTimeout(function (){
//     document.querySelector('.success__wrapper').style.display = 'none';
// }, 10000)

let successModal = document.querySelector('.success__wrapper');
let successBackdrop = document.querySelector('.success__backdrop')

successBackdrop.addEventListener( 'click', function (){
    successModal.style.display = 'none';
})
setTimeout(function (){
    successModal.style.display = 'none';
},5000);
