/**
 * Handling with Geolocation API from HTML5.
 */

var output = false;

/**
 * Locate user.
 * @param method Function which handles obtained position.
 * @param id ID of element where position is written.
 */
function locate(method, id) {
	if(id !== false) {
		output = document.getElementById(id);
	}
	
	if(navigator.geolocation) {
		navigator.geolocation.watchPosition(method, noLocate);
	} else {
		noLocate(false);
	}
}

/**
 * Handling with geolocation errors.
 * @param error Type of geolocation error.
 */
function noLocate(error) {
	let message = "";
	
	if(error === false) {
		message = "Your browser doesn't support Geolocation.";
	} else {
		switch(error.code) {
			case error.PERMISSION_DENIED:
				message = "User denied the request for Geolocation.";
				break;
			case error.POSITION_UNAVAILABLE:
				message = "Location information is unavailable.";
				break;
			case error.TIMEOUT:
				message = "The request to get user location timed out.";
				break;
			case error.UNKNOWN_ERROR:
				message = "An unknown error occurred.";
				break;
		}
	}
	
	if(output === false) {
		console.error(message);
	} else {
		output.innerHTML = message;
	}
}

/**
 * Returns user position in array.
 * @param position User position.
 * @returns Object with user position.
 */
function returnPosition(position) {
	let pos = [position.coords.latitude, position.coords.longitude, position.coords.accuracy, position.coords.altitude, position.coords.altitudeAccuracy, position.coords.heading, position.coords.speed, position.timestamp];
	let text = ["latitude", "longitude", "accuracy", "altitude", "altitude accuracy", "heading", "speed", "timestamp"];
	let title = ["The latitude as decimal degrees.", "The longitude as decimal degrees.", "The accuracy of position in meters.", "The altitude in meters above the mean sea level.", "The altitude accuracy of position in meters.", "The heading as degrees clockwise from North.", "The speed in meters per second.", "The timestamp of the response."];
	
	return {position: pos, text: text, title: title};
}

/**
 * Shows geographical position of a user in a HTML element.
 * @param position User position.
 */
function showPosition(position) {
	let posi = returnPosition(position);
	
	while(output.hasChildNodes()) {
		output.removeChild(output.firstChild);
	}
	
	for(let i = 0; i < posi.position.length; i++) {
		let span = document.createElement("span");
		span.title = posi.title[i];
		span.appendChild(document.createTextNode(posi.text[i] + ": " + posi.position[i]));
		output.appendChild(span);
		output.appendChild(document.createElement("br"));
	}
}
