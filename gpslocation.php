<button onclick="getLocation()">Try It</button>

<p id="demo"></p>
<div id="mapholder"></div>
<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
  var latlon = position.coords.latitude + "," + position.coords.longitude;
  var img_url = "https://maps.googleapis.com/maps/api/staticmap?center="+latlon+"&zoom=14&size=400x300&sensor=false&key=AIzaSyDjQQSOJ6ktuljwW5CU7gfbdAWdKSMtKMI";
  document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
}
</script>