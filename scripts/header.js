var serverUrl = "http://localhost/tli/";
function showConnect () {
	console.log("showConnect");
	var connectBar = document.getElementById("connectBar");
	if (connectBar.hidden) {
		connectBar.hidden = false;
	} else {
		connectBar.hidden = true;
	}
}

function goToWelcome () {
	console.log("goToWelcome");
	getContent("welcome");
}

function getContent (page) {
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	  	if (this.readyState == 4 && this.status == 200) {
			document.getElementById("content").innerHTML = this.responseText;
		}
	};
	xhttp.open("GET", serverUrl+"controller.php?page="+page, true);
	xhttp.send();
}