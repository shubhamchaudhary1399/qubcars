
var booking_btn = document.querySelectorAll('.tab');

for( var i = 0; i< booking_btn.length; i++){
	booking_btn[i].addEventListener("click",function(){
		booking_btn[0].classList.remove("tab-active");
		booking_btn[1].classList.remove("tab-active");
		booking_btn[2].classList.remove("tab-active");
		this.classList.add("tab-active");
	});
}

function bookMood(num){
  var mood = $('.card-when');
  if(num == 1)
    mood.addClass("hide");
  else
    mood.removeClass("hide");
}

$("#when").mouseup(function() {
    if($(this).val() == 10) {
        $("#depart-card").addClass("hide");
    }
    else
    {
    	$("#depart-card").removeClass("hide");
    }  
});

function cabList(){
  if(document.getElementsByName('From')[0].value == ''){
    alert("Source name is required.");
  }
  else if(document.getElementsByName('To')[0].value == ''){
    alert("Destination name is required.")
  }
  else{
    var cabs = $(".cab-list");
    cabs.removeClass('hide');
    distanceMatrix();
  }
}

function bookingDetails(num){
  num = num-1;
  var cab_data = $(".cab-list");
  cab_data.addClass('hide');
  var search_btn = $(".search");
  search_btn.addClass('hide');

  document.getElementsByName('Cab')[0].value = $.trim($(".cab-name")[num].textContent);
  document.getElementsByName('Fare')[0].value = $.trim($(".cab-price")[num].textContent);

  var data = $(".card-info");
  data.removeClass("hide");
  var submit_btn = $(".submit");
  submit_btn.removeClass("hide");
}

function getLocation(){

	if(navigator.geolocation){
		navigator.geolocation.getCurrentPosition(initMap);
	}
	else{
		x.innerHTML = "Geolocation is not supported by browser.";
	}
}

var map;

function initMap(position){
	console.log(position);
	let lati = position.coords.latitude;
	let lngi = position.coords.longitude;
	var myLatLng = {lat: lati, lng: lngi};
    let url_str = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='+lati+','+lngi+'&key=AIzaSyAI4Yuvt6lhMRcRJhb1I70ebGq101jNuJ4'
    $.getJSON(url_str, function(data) {
        console.log(data);
        console.log(data.results[0].formatted_address);
        document.getElementsByName('From')[0].value=data.results[0].formatted_address;
    });

	map = new google.maps.Map(document.getElementById('map'),{
		center: myLatLng,
		zoom: 18
	});

	var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        draggable:true,
        title: 'Source'
    });

    google.maps.event.addListener(marker, 'dragend', function(evt){
    	// document.getElementById('current').innerHTML = '<p>Marker dropped: Current Lat: ' + evt.latLng.lat().toFixed(3) + ' Current Lng: ' + evt.latLng.lng().toFixed(3) + '</p>';
    	let url_str = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='+evt.latLng.lat().toFixed(3)+','+evt.latLng.lng().toFixed(3)+'&key=AIzaSyAI4Yuvt6lhMRcRJhb1I70ebGq101jNuJ4'
    	$.getJSON(url_str, function(data) {
        	console.log(data);
          console.log('New Source lat and lng:- ');      //lat and lng info
          console.log(data.results[0].geometry.location.lat);
          console.log(data.results[0].geometry.location.lng);
        	console.log(data.results[0].formatted_address);
        	document.getElementsByName('From')[0].value=data.results[0].formatted_address;
    	});
    });

    google.maps.event.addListener(marker, 'dragstart', function(evt){
    	// document.getElementById('current').innerHTML = '<p>Currently dragging marker...</p>';
    });
}


function destination(){

	var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: {lat: 31.1471305, lng: 75.34121789999999}
        });

	var dest = new google.maps.places.Autocomplete(
		(document.getElementById('to')), {
    	types: ['geocode']
  	});

  	var geocoder = new google.maps.Geocoder();
  	

  	dest.addListener('place_changed',function(){
  		geocodeAddress(geocoder, map);
  	});

}

function geocodeAddress(geocoder, resultsMap) {
        var address = document.getElementById('to').value;
        geocoder.geocode({'address': address}, function(results, status) {
        	console.log(results);
          console.log('New Destination lat and lng:  -')
        	console.log(results[0].geometry.location.lat());
        	console.log(results[0].geometry.location.lng());

          	if (status === 'OK') {
            	resultsMap.setCenter(results[0].geometry.location);
            	var marker = new google.maps.Marker({
              	map: resultsMap,
              	position: results[0].geometry.location,
                draggable:true,
                title: 'Destination'
            	});
          	} 
          	else {
            	alert('Geocode was not successful for the following reason: ' + status);
            }

            google.maps.event.addListener(marker, 'dragend', function(evt){
            // document.getElementById('current').innerHTML = '<p>Marker dropped: Current Lat: ' + evt.latLng.lat().toFixed(3) + ' Current Lng: ' + evt.latLng.lng().toFixed(3) + '</p>';
            let url_str = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='+evt.latLng.lat().toFixed(3)+','+evt.latLng.lng().toFixed(3)+'&key=AIzaSyAI4Yuvt6lhMRcRJhb1I70ebGq101jNuJ4'
            $.getJSON(url_str, function(data) {
            console.log(data);
            console.log('New Destination lat and lng:- ');      //lat and lng info
            console.log(data.results[0].geometry.location.lat);
            console.log(data.results[0].geometry.location.lng);
            console.log(data.results[0].formatted_address);
            document.getElementsByName('To')[0].value=data.results[0].formatted_address;
                });
            });
        });
}

// Distance Matrix:---

function distanceMatrix(){
  var directionsService = new google.maps.DirectionsService();
  var directionsRenderer = new google.maps.DirectionsRenderer();
  var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 7,
        center: {lat: 31.1471305, lng: 75.34121789999999}
    });
  directionsRenderer.setMap(map);

  calculateAndDisplayRoute(directionsService, directionsRenderer);

  function calculateAndDisplayRoute(directionsService, directionsRenderer){
    directionsService.route({
      origin: {query: document.getElementsByName('From')[0].value},
      destination: {query: document.getElementsByName('To')[0].value},
      travelMode: 'DRIVING'
    },
    function(response,status){
      if (status === 'OK') {
        directionsRenderer.setDirections(response);
        } 
      else {
        window.alert('Directions request failed due to ' + status);
        }
    });
  }
}




