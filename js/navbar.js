

function burger(){
	var body = document.querySelector("body");
	var nav_hidden = document.querySelector(".sidebar-navbar");
	var overlay = document.querySelector("#clear");

	body.classList.toggle("body-overlay");
	overlay.classList.toggle("overlay");
	nav_hidden.classList.toggle("nav-hidden");
	
}
