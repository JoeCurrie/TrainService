$(function() {

	//Functions//
	function resize(){
		var windowheight = window.innerHeight;
		document.getElementById("searchDiv").style.height = (windowheight - 50) + "px";
		document.getElementById("aboutDiv").style.height = (windowheight - 50) + "px";
		document.getElementById("APIDiv").style.height = (windowheight - 50) + "px";
	}

	function getPos(position) {
		$.ajax({
			url: 'findStation.php',
			type: 'post',
			data: {
				'long' : position.coords.longitude,
				'lat' : position.coords.latitude
			},
			dataType: 'json',
			encode: true,
			success: function(data) {
				//console.log(data);
				if(data.error === false) {
					alert("Station found!");
					$("#searchBar").val(data.station);
				} else {
					alert("There is no station within reasonable range of your current position.");
				}
			},
			error: function() {
				alert("Position service failed.");
			}
		});
	};


	//On load//
	resize();

	smoothScroll.init();

	$('[data-toggle="tooltip"]').tooltip();


	//Whilst Running//
	window.onresize = function() {
		resize();
	};

	$("#getLocButton").click( function () {
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(getPos);
		} else {
			alert("Your browser does not support geolocation. Please use the search box below.");
		}
	});

	$('#searchBar').on('input', function() {
		$.ajax({
			url: 'displayStation.php',
			type: 'post',
			data: {
				'string' : $(this).val()
			},
			dataType: 'json',
			encode: true,
			success: function(data) {
				//console.log(data);
				if(data.error === false) {
					alert("Station found!");
					$("#searchBar").val(data.station);
				} else {
					alert("There is no station within reasonable range of your current position.");
				}
			},
			error: function() {
				alert("Position service failed.");
			}
		});
	});

	



    

});