

function change_image(id){

    if(document.getElementById(id).src == "https://haykbaghdasarian.github.io/" + id + ".png"){
   document.getElementById(id).src = "https://haykbaghdasarian.github.io/" + id + "_clicked.png";
}else {
    document.getElementById(id).src = "https://haykbaghdasarian.github.io/" + id + ".png";
}
}

// var layerList = document.getElementById('menu');
// var inputs = layerList.getElementsByTagName('input');
 
// function switchLayer(layer) {
// var layerId = layer.target.id;
// map.setStyle('mapbox://styles/mapbox/' + layerId);
// }
 
// for (var i = 0; i < inputs.length; i++) {
// inputs[i].onclick = switchLayer;
// }

