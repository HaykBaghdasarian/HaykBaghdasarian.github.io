

fetch("http://localhost/design/Data.json")
.then(response => response.json())
.then(data => {

    data.forEach(data => {

        var el = document.createElement('div');
        el.className = data.type + '_marker';
        el.id = data.id;
        el.onclick = function () {
            alert(data.id);
        };
        
                
        new mapboxgl.Marker(el)
        .setLngLat([ data.longitude , data.latitude])
        .addTo(map);

    });
});





function change_image(id){

    

  if(document.getElementById(id).src == "https://haykbaghdasarian.github.io/" + id + ".png"){

   document.getElementById(id).src = "https://haykbaghdasarian.github.io/" + id + "_clicked.png";






}else {
    document.getElementById(id).src = "https://haykbaghdasarian.github.io/" + id + ".png";



    
}
}

