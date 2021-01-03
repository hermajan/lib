/**
 * Does an AJAX request.
 * @param {function} callback Callback function.
 * @param {string} url URL for the AJAX request.
 * @param {boolean} responseType Type of the response ("xml" or "text").
 */
function doAjax(callback, url, responseType) {
	let xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if(xhr.readyState === 4 && xhr.status === 200) {
			if(responseType === "xml") {
				callback(xhr.responseXML);
			} else {
				callback(xhr.responseText);
			}
		}
	};
	xhr.open("GET", url, true);
	xhr.send();
}
