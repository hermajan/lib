/**
 * Returns GET parameters.
 * @returns {Array|getParameters.parameters} Parameters in the array in the format "'key'='value'".
 */
function getParameters() {
	let parameters = [];
	
	let array = window.location.search.replace("?", "").split("&");
	if(array.length > 0 && array[0] !== "") {
		for(let i = 0; i < array.length; i++) {
			parameters.push(array[i]);
		}
	}
	return parameters;
}
