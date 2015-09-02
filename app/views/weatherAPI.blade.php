<!DOCTYPE html>
<html>
<head>
	<title>Weather API Example</title>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<style type="text/css">

	body {	
		background-color: #87CEFA;
	}
	#map-canvas {
		height: 600px;
		width: 100%;
	}
	.button {
		background-color: #191970;
		border: 3px solid darkgrey;
		border-style: groove;
	}
	.column {
		background-color: white;
		border: 3px groove darkgrey;
		text-align: center;
	}
	.row {
		text-align: center;
		padding: 2px;
		box-shadow: inset;
	}
	.topHeading {
		text-indent: 1em;
		font-size: 5em;
	}
	.subHeading {
		text-indent: 1.5em;
		font-size: 4em;
	}
	#lat, #lng {
		height: 2em;
		background-color: #FFF;
		color: #000;
	}
	.weather {
		font-size: 2em;
		margin: 2em 0 2em 0;		
	}
	.latLng {
		margin: 1em;
	}
	#address {
		height: 2em;
		width: 15em;
	}
	#updateLocation {
		margin: 1em;
	}
	</style>
</head>
<body>

		<h1 class = "topHeading">Weather Report</h1>
		<h2 class = "subHeading">San Antonio, Texas</h2>
		<p></p>

    <div row class = "weather col-sm-12">
    	<p></p>
        <div class="col-sm-4 column One" id="day0Forecast"><strong>Today</strong></div>
        <p></p>
		<div class="col-sm-4 column Two" id="day1Forecast"><strong>Tomorrow</strong></div>
		<p></p>
		<div class="col-sm-4 column Three" id="day2Forecast"><strong>Day After Tomorrow</strong></div>
		<p></p>
	</div>

 {{-- <div row class = "weather col-sm-12">
		<h4 class = "latLng">Enter Latitude and Longitude or a Location or Drag Pin to View Weather in Another Location</h4>
		<p></p>
	<div class = "col-sm-6 latLng">
	    	<div class = "col-sm-3">
	    		<input id="lat" type="text" placeholder="Enter Latitude"></input>
	    	</div>
	    	<div class = "col-sm-3">
	    		<input id="lng" type="text" placeholder="Enter Longitude"></input>
	    	<button id="update" class = "btn btn-lrg">Update Location</button>
			</div>
	    
	<div class = "col-sm-6" id="updateLocation">
		<div class = "col-sm-3">
		</div>
		<div class = "col-sm-3">
  		<input id="address" type="text" placeholder="Drag pin or type location"></input>
  			<button id="update" class = "btn btn-lrg">Update Location</button>
  		</div>
  	</div>
	</div>
  </div> --}}

	<div class = "map">
	<div class = "container-fluid">
		<div class = "col-sm-12">
		<!-- div to hold map -->
	 	<div id="map-canvas"></div>
 	</div>

	</div>
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	 <!--  Load the Google Maps API [DON'T FORGET TO USE A KEY] -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAML-qplFIUEXcCfoXVO9loifXOawvIJgU"></script> 

	<script>
	(function() {
        "use strict";

	var forecastData = [];
		var ajaxRequest = $.get("http://api.openweathermap.org/data/2.5/forecast/daily", {
	    	APPID: "1b69a7c48f1e737e89042017b912c9f1",
	    	q:     "San Antonio, TX",
	    	cnt:   3,
	    	units: "imperial"
		});
		ajaxRequest.always(function() {
			console.log('request sent');
		});
		ajaxRequest.fail(function(data, error) {
			console.log(error);
			console.log(ajaxRequest.status);
		})
		ajaxRequest.done(function(data) {
			console.log(data);
			var htmlString = '';
			for(var i = 0; i < 3; i++) { 
				htmlString += '<p>' + data.list[i].temp.max + "°/ " + data.list[i].temp.min + "° " + '</p>';
				htmlString += "<img src = 'http://openweathermap.org/img/w/" + data.list[i].weather[0].icon + ".png' >";
				htmlString += '<p class = "clouds">' + '<strong>Conditions: </strong>' + data.list[i].weather[0].description + '</p>';
				htmlString += '<p class = "humidity">' + '<strong>Humidity: </strong>' + data.list[i].humidity + '</p>';
				htmlString += '<p class = "pressure">' + '<strong>Pressure: </strong>' + data.list[i].pressure + '</p>';
				
				$('#day' + i + 'Forecast').append(htmlString);
				htmlString = ''
            };
        });

         // Set our address to geocode
    var address = 'Alamo, San Antonio, TX, 7825';
    // Init geocoder object
    var geocoder = new google.maps.Geocoder();
    // Geocode our address
    geocoder.geocode( { 'address': address}, function(results, status) {
      // Check for a successful result
      if (status == google.maps.GeocoderStatus.OK) {
        // Set our map options
        var mapOptions = {
          // Set the zoom level
          zoom: 10,
          // This sets the center of the map at our location
          center: results[0].geometry.location,
          // Show this map in satellite view
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }

        // Render the map
        var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
	// Add a new pushpin marker to our existing map
		    var image = 'img/pushpin.jpg';
		    var marker = new google.maps.Marker({
			    position: mapOptions.center,
			    map: map,
			    icon: image,
			    draggable: true,
				animation: google.maps.Animation.DROP
		    });
		    //Re-center the map around the marker when window is resized
			google.maps.event.addDomListener(window, 'resize', function() {
			  map.setCenter(marker.getPosition());
			});
			//Get longitude and latitude of marker when it's dragged
			/*google.maps.event.addListener(marker, 'dragend', function(event){
			  	console.log(this.getPosition());
			  	weather = $.ajax('http://api.openweathermap.org/data/2.5/forecast/daily?lat=' + this.getPosition().lat() + '&lon=' + this.getPosition().lng() + '&cnt=5&mode=json');
			  	map.panTo(marker.getPosition());
			  	console.log(this.getPosition().lat());
			  	console.log(this.getPosition().lng());
			  	weather.done(getWeatherReport);
			});*/

	        } else {
	          // Show an error message with the status if our request fails
	          alert("Geocoding was not successful - STATUS: " + status);
	        }
	        // Create lat and long for our marker position
	        var alamo = {lat: 29.425967, lng: -98.486142};
	    
	        // Add the marker to our existing map
	        var marker = new google.maps.Marker({
	          position: alamo,
	          map: map
	        });
	        // Create a new infoWindow object with content
	        var infowindow = new google.maps.InfoWindow({
	            content: 'The Alamo, Downtown San Antonio'
	        });
	        // Open the window using our map and marker
	        infowindow.open(map,marker);
	      });

	})()
</script>

</body>
</html>