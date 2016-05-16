<?php
	// Start timer...
	//$time_start = microtime(true);

	include("httpful.phar");

	$data = array();
	$data['error'] = false;

	$url = "http://transportapi.com/v3/uk/train/stations/near.json?app_id=03bf8009&app_key=d9307fd91b0247c607e098d5effedc97&lat=" . $_POST['lat'] . "&lon=" . $_POST['long'];

	$response = \Httpful\Request::get($url)->send();

	if(count($response->body->stations) > 0) {
		$data['station'] = $response->body->stations[0]->name;
	} else {
		$data['error'] = true;
	}

	echo json_encode($data);


	//echo "Total execution time: " . (microtime(true) - $time_start) . "s";

?>