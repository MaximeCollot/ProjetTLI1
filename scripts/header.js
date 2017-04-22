function showConnect () {
	console.log("showConnect");
	var connectBar = document.getElementById("connectBar");
	if (connectBar.hidden) {
		connectBar.hidden = false;
	} else {
		connectBar.hidden = true;
	}
}