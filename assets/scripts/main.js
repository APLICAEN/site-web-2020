document.addEventListener("DOMContentLoaded", function() {
	//The first argument are the elements to which the plugin shall be initialized
	//The second argument has to be at least a empty object or a object with your desired options
	OverlayScrollbars(document.querySelectorAll("body"), {className : "os-theme-dark" });

	var siteHeader = document.querySelector(".site-header");
	var siteContent = document.querySelector(".site-content");
	// var siteMeta = document.querySelector(".site-metadata");
	// siteMeta.style.minHeight = `${window.innerHeight - siteHeader.clientHeight}px`;
	siteContent.style.marginTop = `${siteHeader.clientHeight}px`;
});
