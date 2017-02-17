function showConnect () {
	console.log("showConnect");
	var connectBar = document.getElementById("connectBar");
	console.log(connectBar);
	console.log(connectBar.hidden);
	if (connectBar.hidden) {
		connectBar.hidden = false;
	} else {
		connectBar.hidden = true;
	}
}