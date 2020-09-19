

fetch("http://localhost/design/Data.json")
.then(response => response.json())
.then(data => {

    data.forEach(data => {

        var el = document.createElement('div');
        el.className = data.type + '_marker';
        el.id = data.id;
        el.onclick = function () {
            // alert(data.id + " , " + data.name + " , " +  data.type);

            map.flyTo({
                center: [data.longitude , data.latitude],
                zoom: 18,
                speed: 0.5,
                curve: 3
                });

            
            
        };
        
                
        new mapboxgl.Marker(el)
        .setLngLat([ data.longitude , data.latitude])
        .addTo(map);

    });
});





function change_image(id){

    

  if(document.getElementById(id).src == "https://haykbaghdasarian.github.io/" + id + ".png"){

   document.getElementById(id).src = "https://haykbaghdasarian.github.io/" + id + "_clicked.png";


    
   var x = document.getElementsByClassName(id + "_marker");
   for(i = 0; i < x.length; i++){
   x[i].style.display = "block";
   }








}else {
    document.getElementById(id).src = "https://haykbaghdasarian.github.io/" + id + ".png";

    var x = document.getElementsByClassName(id + "_marker");
    for(i = 0; i < x.length; i++){
    x[i].style.display = "none";
    }



    
}
}

