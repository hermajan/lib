/**
 * Handling with Geolocation API from HTML5.
 * 
 * @author DJohnny
 * @version 28.10.2012
 */

/**
 * Locate user
 */
function locate() {
	if(navigator.geolocation) { navigator.geolocation.watchPosition(writePosition, noLocate); }
	else { noLocate(false); }
}

/**
 * Handling with geolocation errors.
 * 
 * @param error Type of geolocation error
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
 * 
 * @param position User position
 */
function writePosition(position) {
	document.write(position.coords.latitude+" "+position.coords.longitude);
}