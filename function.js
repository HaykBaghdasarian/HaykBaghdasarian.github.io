console.log("asdasddsa");



// var layerList = document.getElementById('menu');
// var inputs = layerList.getElementsByTagName('input');
 
// function switchLayer(layer) {
// var layerId = layer.target.id;
// map.setStyle('mapbox://styles/mapbox/' + layerId);
// }
 
// for (var i = 0; i < inputs.length; i++) {
// inputs[i].onclick = switchLayer;
// }
function showfood() {
    var color1 = 'rgb(87, 82, 255)';
    var color2 = 'white';
    
    var imgElement = document.getElementById('toggleImage');
    
    if(imgElement.style.backgroundColor == color1){
        imgElement.style.backgroundColor = color2;
        
    }else{
        imgElement.style.backgroundColor = color1;
        var marker = new mapboxgl.Marker()
        .setLngLat([ 46.7656, 39.8265])
        .addTo(map);
        var marker = new mapboxgl.Marker()
        .setLngLat([ 46.7636, 39.8275])
        .addTo(map);
        var marker = new mapboxgl.Marker()
        .setLngLat([ 46.7436, 39.8175])
        .addTo(map);
    }

    

 }
