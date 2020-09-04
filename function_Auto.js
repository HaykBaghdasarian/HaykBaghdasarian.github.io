console.log("asdasddsa");

var options = {
  enableHighAccuracy: true,
  timeout: 5000,
  maximumAge: 0
};

function success(pos) {
  var crd = pos.coords;

  console.log('Your current position is:');
  console.log(`Latitude : ${crd.latitude}`);
  console.log(`Longitude: ${crd.longitude}`);
  console.log(`More or less ${crd.accuracy} meters.`);
}

function error(err) {
  console.warn(`ERROR(${err.code}): ${err.message}`);
}

navigator.geolocation.getCurrentPosition(success, error, options);

map.addControl(
new mapboxgl.GeolocateControl({
positionOptions: {
enableHighAccuracy: true
},
trackUserLocation: true
})
);

var marker = new mapboxgl.Marker()
.setLngLat([44.5152, 40.1872])
.addTo(map);

var marker = new mapboxgl.Marker()
.setLngLat([44.5102, 40.1802])
.addTo(map);

var marker = new mapboxgl.Marker()
.setLngLat([44.5252, 40.1832])
.addTo(map);

var marker = new mapboxgl.Marker()
.setLngLat([44.5652, 40.1932])
.addTo(map);


var marker = new mapboxgl.Marker()
.setLngLat([44.5452, 40.2132])
.addTo(map);

var marker = new mapboxgl.Marker()
.setLngLat([44.5052, 40.1932])
.addTo(map);

var marker = new mapboxgl.Marker()
.setLngLat([44.5252, 40.2032])
.addTo(map);

var marker = new mapboxgl.Marker()
.setLngLat([44.4952, 40.1672])
.addTo(map);

var marker = new mapboxgl.Marker()
.setLngLat([44.5402, 40.1702])
.addTo(map);
