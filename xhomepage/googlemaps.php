

<!--<div class="col-sm-12">-->
    <div id="map" style="width:100%;height:250px;background:yellow"></div>
	<script>
		function initMap() {
			var location = {lat: 21.4972385, lng: 83.9034703};
			var map = new google.maps.Map(document.getElementById("map"),{
				zoom:15,
				center: location
			});
			var marker = new google.maps.Marker({
				position: location,
				map: map
			});
		}
		
	</script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWQkwMzdg0AlOGrila381ZWnCtyGTngfs&callback=initMap">
		
	</script>
    <!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->
<!--</div>-->
