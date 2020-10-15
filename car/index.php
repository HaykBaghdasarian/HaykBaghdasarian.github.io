<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link href='css/style.css' rel='stylesheet' />
	<script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<style>
		.pos-f-t{
		    position: absolute;
		    bottom: 0;
		    width: 100%;
			height: 100%;
		}
	</style>
</head>
<body>
    <div id='map'>
    	<div id="compass"><i class="fas fa-location-arrow"></i></div>
    	<div class="hid">
			<div class="header1">
			  	<div class='arrowleft'>
			  		<i class="fas fa-arrow-left"></i>
			  	</div>
			</div>
			<div class="body1">
				
			</div>
			<div class="footer1">
				
			</div>
		</div>
    	<div class="under">
    		<nav class="navbar navbar-dark bg-dark undermenu" >
    			<button class="navbar-toggler" id='1'>
			      	<i class="fas fa-bars"></i>
			    </button>
				<button class="navbar-toggler" id='2'>
					<i class="fas fa-drafting-compass"></i>
			    </button>
				<button class="navbar-toggler" id='3'>
			       <i class="fas fa-map-marked-alt"></i>
			    </button>
				<button class="navbar-toggler" id='4'>
			       <i class="fas fa-car"></i>
			    </button>
    		</nav>
    	</div>
    </div>

		<!-- <div class="pos-f-t">
			<div class="under">
				<div class="hid">
					<div class="header1">
			  		<div class='arrowleft'><i class="fas fa-arrow-left"></i></div>
			  	
				</div>
				<div class="body1">

				</div>
				<div class="footer1">

				</div>
			</div>
			<div class="cont">
			  <nav class="navbar navbar-dark bg-dark undermenu">
			    <button class="navbar-toggler" id='1'>
			      	<i class="fas fa-bars"></i>
			    </button>
				<button class="navbar-toggler" id='2'>
					<i class="fas fa-drafting-compass"></i>
			    </button>
				<button class="navbar-toggler" id='3'>
			       <i class="fas fa-map-marked-alt"></i>
			    </button>
				<button class="navbar-toggler" id='4'>
			       <i class="fas fa-car"></i>
			    </button>
			  </nav>
		</div>
	</div> -->
	<script>
		$('.navbar-toggler').click(function(){
			var id = $(this).attr('id')
			$('.hid').addClass('info')
			$('.hid').css('display','block')
			$.post(
				"mod.php",
				{id: id},
				function(ard){
					$('.body1').html(ard)
				}
			)
			$(".hid").animate({
				height: '100%',
				width: '100%',
				background: 'red',
			});
		})
		$('.arrowleft').click(function(){
			$('.hid').removeClass('info')
			$(".hid").animate({
				height: '0%',
				width: '0%',
			});
			setTimeout(function(){ $('.hid').css('display','none') }, 600);
			
		})
            mapboxgl.accessToken = 'pk.eyJ1IjoiaGF5a2JhZ2hkYXNhcnlhbiIsImEiOiJja2N4aWl4encwMGR2MnZsYWhqZmZwbmFqIn0.TqqvzhGk3yJQlWzFeH2rqA';
            var map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/light-v10', // stylesheet location
                center: [44.5134383,40.1838161], // starting position [lng, lat]
                zoom: 13 // starting zoom
            });
        </script>
        <script src='js/function.js'></script>
</body>
</html>