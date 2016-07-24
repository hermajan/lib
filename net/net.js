/**
 * Returns GET parameters.
 * @returns {Array|getParameters.parameters} Parameters in the array in the format "'key'='value'".
 */
function getParameters() {
	var parameters = [];

	var array = window.location.search.replace("?", "").split("&");
	if(array.length > 0 && array[0] !== "") {
		for(var i=0; i<array.length; i++) {
			parameters.push(array[i]);
		}
	}
	return parameters;
}
