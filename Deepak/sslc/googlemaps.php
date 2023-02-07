

<!--<div class="col-sm-12">-->
    <div id="map" style="width:100%;height:250px;background:yellow"></div>

    <script>
        function myMap() {
            var mapCanvas = document.getElementById("map");
            var mapOptions = {
                center: new google.maps.LatLng(21.48,83.98), zoom: 16,
            };
            var map = new google.maps.Map(mapCanvas, mapOptions);
        }
    </script>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
    <!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->
<!--</div>-->
