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
	
	var element = document.getElementById(id);
	if(element.style.width == "") {
		element.style.width = "100%";
	}
	if(element.style.height == "") {
		element.style.height = "500px";
	}
	
	var map = new google.maps.Map(element, options);
	var marker = new google.maps.Marker({position: latlon, map: map, title: latlon.lat + " " + latlon.lng});
}
