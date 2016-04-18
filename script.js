function hiding(id) {
	element = document.getElementById(id).style;
	element.display = (element.display == "block") ? "none" : "block";
}
