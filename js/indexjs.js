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
					$("#searchBar").val(data.station);
					displayStations();
				} else {
					alert("There is no station within reasonable range of your current position.");
				}
			},
			error: function() {
				alert("Position service failed.");
			}
		});
	};

	function displayStations() {
		$.ajax({
			url: 'displayStation.php',
			type: 'post',
			data: {
				'string' : $('#searchBar').val()
			},
			dataType: 'json',
			encode: true,
			success: function(data) {
				console.log(data);
				if(!data.error) {
					var sheet = document.styleSheets[1];
					displayDiv = document.getElementById('resultDiv');
					displayDiv.innerHTML = '';
					for (i = 0; i < data.count; i++) {
						var newDiv = document.createElement('div');
						newDiv.className = 'col-sm-6 searchResult';
						newDiv.innerHTML = '<div class="panel panel-default"><div class="panel-body"><div class="panel-image hide-panel-body"><a href="display.php?tlc=' + data.results[i].tlc + '"><img src="https://maps.googleapis.com/maps/api/staticmap?center=' + data.results[i].station + '&zoom=14&size=300x200&key=AIzaSyCV9MKvUbelTJkzcmzte3aM_rhZkGPns3U" class="panel-image-preview" /></a></div><div class="panel-footer text-center"><a href="display.php?tlc=' + data.results[i].tlc + '">' + data.results[i].station + '</a></div></div>';
						displayDiv.appendChild(newDiv);
					}
					if(data.count > 3) {
						sheet.addRule("#resultDiv", "padding-top: 550px;");
					} else {
						sheet.addRule("#resultDiv", "padding-top: 0px;");
					}
				} else {
					alert("Database error: " + data.error);
				}
			},
			error: function() {
				alert("Search failed.");
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
		if ($(this).val().length >= 2) {
			displayStations();
		}
	});

	



    

});