<html>
    <head>
        
<script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>

<link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />
<link href='style.css' rel='stylesheet' />

    </head>
    <body>


<div id='map'></div>

<div class="container">
    <img class="Icons" src="Burger.png">
    <img class="Icons" src="Joystick.png" >
    <img class="Icons" src="Benzin.png" >
    <img class="Icons" src="Cafe.png" >
    <img class="Icons" src="Bank.png" >
    <img class="Icons" src="Gym.png" >
    <img class="Icons" src="Pharmacy.png" >
    <img class="Icons" src="Shop.png" >
</div>




<script>

mapboxgl.accessToken = 'pk.eyJ1IjoiaGF5a2JhZ2hkYXNhcnlhbiIsImEiOiJja2N4aWl4encwMGR2MnZsYWhqZmZwbmFqIn0.TqqvzhGk3yJQlWzFeH2rqA';
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/light-v10', // stylesheet location
    center: [ 46.7656, 39.8265], // starting position [lng, lat]
    zoom: 13 // starting zoom
});


</script>


        
    </body>
    <script src='function.js'></script>
</html>