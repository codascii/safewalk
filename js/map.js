$(document).ready(function () {
    const windowHeight = $(window).height();
    $('div#map').height(windowHeight + 'px');

    var map = L.map('map', {zoomControl: false}).setView([51.505, -0.09], 13);


    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoiY29kYXNjaWkiLCJhIjoiY2p2cWNzMHowMDh6bzQ4cjB1eTV0bWVmNyJ9.53N0KqHxjK9Y5K7AgrC8Ig', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox.streets',
        accessToken: 'your.mapbox.access.token'
    }).addTo(map);



    map.locate({setView: true, maxZoom: 60});
    function onLocationFound(e) {
        var radius = e.accuracy / 2;

        L.marker(e.latlng).addTo(map);
            //.bindPopup("You are within " + radius + " meters from this point").openPopup();

        L.circle(e.latlng, radius).addTo(map);
    }

    map.on('locationfound', onLocationFound);

    function onLocationError(e) {
        //alert(e.message);
        alert("Activez la localisation.");
    }

    map.on('locationerror', onLocationError);



});