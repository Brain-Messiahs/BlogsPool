
function getLocation(){
 if (navigator.geolocation){
   navigator.geolocation.getCurrentPosition(showPosition);
 }
 else{
   x.innerHTML="Geolocation is not supported by this browser.";}
 }

function showPosition(position){
var lt1= position.coords.latitude;
 var lng1 = position.coords.longitude; 
  initialize(lt1,lng1);

 }

function  initialize(lt1,lng1) {
    $('form').on('keyup keypress', function(e) {
        var keyCode = e.keyCode || e.which;
        if (keyCode === 13) {
            e.preventDefault();
            return false;
        }
    });
    const locationInputs = document.getElementsByClassName("map-input");

    const autocompletes = [];
    const geocoder = new google.maps.Geocoder;
     var infowindow = new google.maps.InfoWindow;
    for (let i = 0; i < locationInputs.length; i++) {

        const input = locationInputs[i];
        const fieldKey = input.id.replace("-input", "");
        const isEdit = document.getElementById(fieldKey + "-latitude").value != '' && document.getElementById(fieldKey + "-longitude").value != '';

        const latitude = parseFloat(document.getElementById(fieldKey + "-latitude").value) || lt1;
        const longitude = parseFloat(document.getElementById(fieldKey + "-longitude").value) || lng1;

        const map = new google.maps.Map(document.getElementById(fieldKey + '-map'), {
            center: {lat: latitude, lng: longitude},
            zoom: 18.5,
             disableDefaultUI: true
        });
 const  marker = new google.maps.Marker({
    map: map,
    draggable: true,
    animation: google.maps.Animation.DROP,
    position:{lat: latitude, lng: longitude},
  });
 geocodeLatLngs(marker,geocoder, map, infowindow,latitude,longitude);
  marker.addListener('click', toggleBounce);
  
    marker.addListener('dragend', dragdrop);
 google.maps.event.addListener(map, 'click', function(me) {
        var result = [me.latLng.lat(), me.latLng.lng()];
        transition(result);
        var newlt=me.latLng.lat();
        var newlng=me.latLng.lng();
        newposition(newlt,newlng);
        geocodeLatLng(marker,geocoder, map, infowindow,newlt,newlng);
    });

 var numDeltas = 100;
var delay = 5; //milliseconds
var delays = 1; //milliseconds
var m = 0;
var deltaLat;
var deltaLng;
function dragdrop(event) {
    var result = [event.latLng.lat(), event.latLng.lng()];
    var latlng = new google.maps.LatLng(event.latLng.lat(), event.latLng.lng());
   transitions(result);
        var newlt=event.latLng.lat();
        var newlng=event.latLng.lng();
        newposition(newlt,newlng);
        geocodeLatLng(marker,geocoder, map, infowindow,newlt,newlng);
}

function transition(result){
    m = 0;
    deltaLat = (result[0] - lt1)/numDeltas;
    deltaLng = (result[1] - lng1)/numDeltas;
    moveMarker();

}

function moveMarker(){
    lt1 += deltaLat;
    lng1 += deltaLng;
    var latlng = new google.maps.LatLng(lt1, lng1);
    marker.setPosition(latlng);
    if(m!=numDeltas){
        m++;
        setTimeout(moveMarker, delay);
    }

}
function transitions(result){
    m = 0;
    deltaLat = (result[0] - lt1)/numDeltas;
    deltaLng = (result[1] - lng1)/numDeltas;
    moveMarkers();

}
function moveMarkers(){
    lt1 += deltaLat;
    lng1 += deltaLng;
    var latlng = new google.maps.LatLng(lt1, lng1);
    marker.setPosition(latlng);
    if(m!=numDeltas){
        m++;
        setTimeout(moveMarkers, delays);
    }

}

function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}
        marker.setVisible(isEdit);

        const autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.key = fieldKey;
        autocompletes.push({input: input, map: map, marker: marker, autocomplete: autocomplete});
    }

    for (let i = 0; i < autocompletes.length; i++) {
        const input = autocompletes[i].input;
        const autocomplete = autocompletes[i].autocomplete;
        const map = autocompletes[i].map;
        const marker = autocompletes[i].marker;

        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            marker.setVisible(false);
            const place = autocomplete.getPlace();

            geocoder.geocode({'placeId': place.place_id}, function (results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    const lat = results[0].geometry.location.lat();
                    const lng = results[0].geometry.location.lng();
                    setLocationCoordinates(autocomplete.key, lat, lng);
                    map.setZoom(18.5);
                    geocodeLatLngs(marker,geocoder, map, infowindow,lat,lng)
                }
            });

            if (!place.geometry) {
                window.alert("No details available for input: '" + place.name + "'");
                input.value = "";
                return;
            }

            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(18.5);
            }
            marker.setPosition(place.geometry.location);
            marker.setVisible(true);

        });
    }

}
function newposition(newlt,newlng){
    console.log(newlt)
}

function geocodeLatLng(marker,geocoder, map, infowindow,newlt,newlng) {
        var latlng = {lat: newlt, lng: newlng};
        geocoder.geocode({'location': latlng}, function(results, status) {
          if (status === 'OK') {
            if (results[0]) {
             var latlng = new google.maps.LatLng(newlt, newlng);
                    marker.setPosition(latlng);
                    var pincode = results[0].formatted_address;
                    var n = pincode.length;
                    var pincode = pincode.slice(n-14, n-7);
              infowindow.setContent(results[0].formatted_address);
              infowindow.open(map, marker);
               document.getElementById('address-input1').value = results[0].formatted_address;
               document.getElementById('address_a').innerHTML = '<i class="fa fa-check-circle-o" style="font-size:18px;color:#ff5e00"></i> '+results[0].formatted_address;
                document.getElementById('address_b').innerHTML = '<i class="fa fa-check-circle-o" style="font-size:18px;color:#ff5e00"></i> '+results[0].formatted_address;
               document.getElementById('address-latitude1').value = newlt;
               document.getElementById('address-longitude1').value = newlng;
               document.getElementById('address-pincode').value = pincode;
            } else {
              window.alert('No results found');
            }
          } else {
            geocodeLatLng(marker,geocoder, map, infowindow,newlt,newlng)
          }
        });
      }
      function geocodeLatLngs(marker,geocoder, map, infowindow,lat,lng) {
        var latlng = {lat: lat, lng: lng};
        geocoder.geocode({'location': latlng}, function(results, status) {
          if (status === 'OK') {
            if (results[0]) {
             var latlng = new google.maps.LatLng(lat, lng);
                    var pincode = results[0].formatted_address;
                    var n = pincode.length;
                    var pincode = pincode.slice(n-14, n-7);
              infowindow.setContent(results[0].formatted_address);
              infowindow.open(map, marker);
               document.getElementById('address-input1').value = results[0].formatted_address;
               document.getElementById('address_a').innerHTML = '<i class="fa fa-check-circle-o" style="font-size:18px;color:#ff5e00"></i> '+results[0].formatted_address;
                document.getElementById('address_b').innerHTML = '<i class="fa fa-check-circle-o" style="font-size:18px;color:#ff5e00"></i> '+results[0].formatted_address;
               document.getElementById('address-latitude1').value = lat;
               document.getElementById('address-longitude1').value = lng;
               document.getElementById('address-pincode').value = pincode;
            } else {
              window.alert('No results found');
            }
          } else {
            geocodeLatLngs(marker,geocoder, map, infowindow,lat,lng)    
          }
        });
    $('#btm').slideDown(500);
    $('#search_div').attr('style','display:none;');
 $('#address-map-container').attr('style','width:100%;height:70%;');
      }
function setLocationCoordinates(key, lat, lng) {
    const latitudeField = document.getElementById(key + "-" + "latitude");
    const longitudeField = document.getElementById(key + "-" + "longitude");
    latitudeField.value = lat;
    longitudeField.value = lng;

}





