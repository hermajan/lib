/**
 * Handling with Geolocation API from HTML5.
 */

/**
 * Locate user.
 * @param method Function which handles obtained position.
 */
function locate(method) {
	if(navigator.geolocation) { navigator.geolocation.watchPosition(method, noLocate); }
	else { noLocate(false); }
}

/**
 * Handling with geolocation errors.
 * @param error Type of geolocation error.
 */
function noLocate(error) {
	switch(error.code) {
    	case error.PERMISSION_DENIED:
	      var content = "User denied the request for Geolocation.";
    	  break;
	    case error.POSITION_UNAVAILABLE:
    	  var content = "Location information is unavailable.";
	      break;
	    case error.TIMEOUT:
	      var content = "The request to get user location timed out.";
    	  break;
	    case error.UNKNOWN_ERROR:
    	  var content = "An unknown error occurred.";
	      break;
    }

	document.write(content);
}

/**
 * Writes geographical position of a user.
 * @param position User position.
 */
function writePosition(position) {
	document.write(position.coords.latitude+" "+position.coords.longitude+" "+position.coords.accuracy+" "+position.coords.altitude+" "+position.coords.altitudeAccuracy+" "+position.coords.heading+" "+position.coords.speed+" "+position.timestamp);
}

/**
 * Shows geographical position of a user in HTML element.
 * @param position User position.
 * @param id ID of element where position is showed.
 */
function showPosition(position, id) {
	document.getElementById(id).innerHTML = position.coords.latitude+" "+position.coords.longitude+" "+position.coords.accuracy+" "+position.coords.altitude+" "+position.coords.altitudeAccuracy+" "+position.coords.heading+" "+position.coords.speed+" "+position.timestamp;
}

/**
 * Returns user position in array.
 * @param position User position.
 * @returns Array with user position.
 */
function returnPosition(position) {
	return [position.coords.latitude, position.coords.longitude, position.coords.accuracy, position.coords.altitude, position.coords.altitudeAccuracy, position.coords.heading, position.coords.speed, position.timestamp];
}
