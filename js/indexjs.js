$(function() {
	function resize(){
		var windowheight = window.innerHeight;
		document.getElementById("searchDiv").style.height = windowheight + "px";
		document.getElementById("aboutDiv").style.height = windowheight + "px";
		document.getElementById("APIDiv").style.height = windowheight + "px";
	}

	resize();

	smoothScroll.init();





	window.onresize = function() {
		resize();
	};



    

});