/**
 * Shows geographical position of a user in HTML element on Google Maps.
 * @param position User position.
 * @param id ID of element where position is showed.
 */
function showGMap(position, id) {
    latlon = {lat: position.coords.latitude, lng: position.coords.longitude };

    var options = {
		center: latlon, zoom: 15
    };
    
    var map = new google.maps.Map(document.getElementById(id), options);
    var marker = new google.maps.Marker({position: latlon, map: map, title: latlon.lat + " " + latlon.lng});
}
