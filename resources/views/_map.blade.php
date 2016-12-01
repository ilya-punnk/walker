<div id="map"></div>
<script src="https://maps.googleapis.com/maps/api/js?key={{Config::get('constants.MAPS_KEY')}}"></script>
<script src="/js/ResizeSensor.js"></script>
<script>
    var	BASE_STATE = {
                center: {lat:{{$latitude or 55.7522}}, lng:{{$longitude or 37.6155}}},
                zoom: 12
            };

    var map;

    map = new google.maps.Map(document.getElementById('map'), BASE_STATE);

    var mapResizer = function () {
        //setTimeout(function () {
            var center = map.getCenter();
            google.maps.event.trigger(map, "resize");
            map.setCenter(center);
        //},300);
    };

    new ResizeSensor(document.getElementById('map'),mapResizer);

</script>
<style>
    #map{
        width: 100%;
        height: 100%;
        padding: 5px;
    }
</style>