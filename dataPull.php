<?php
	// Start timer...
	//$time_start = microtime(true);

	include("httpful.phar");
	include("dbConnection.php");

	function checkNull($item) {
		if(is_null($item)) {
			return 0;
		} else {
			return $item;
		}
	}

	$sql = "SELECT * FROM Stations LIMIT 0, 5";

	$result = mysqli_query($link, $sql);

	while ($row = mysqli_fetch_assoc($result)) {

		echo "Station Name: " . $row['Station'] . "</br>"; 
		
		// Delete rows from TrainTimes table of current station
		$sqlDel = "DELETE FROM `TrainTimes` WHERE `TLC` = " . $row['TLC'];
		
		mysqli_query($link, $sql) or die("Delete query failed");
		
		// Add times to the TrainTime table
		$url = "http://transportapi.com/v3/uk/train/station/" . $row['TLC'] . "/live.json?app_id=03bf8009&app_key=d9307fd91b0247c607e098d5effedc97&train_status=passenger";

		$response = \Httpful\Request::get($url)->send();

		echo "Count of items to add: " . count($response->body->departures->all) . "</br>";

		print("<pre>");
		print_r($response);
		print("</pre>");

		for($i = 0 ; $i < count($response->body->departures->all); $i++) {

			

			foreach($response->body->departures as $departure) {
				foreach($departure as $train) {

					print("<pre>");
					print_r($train);
					print("</pre>");

					$sqlInsert = "INSERT INTO `TrainTimes`(`TLC`, `Service`, `TrainUID`, `Platform`, `Operator`, `Aimed_Dep_Date`, `Aimed_Arr_Date`, `Aimed_Pass_Time`, `Origin_Name`, `Source`, `Destination_Name`) VALUES (";
					$sqlInsert .= "'" . $row['TLC'] . "', ";
					$sqlInsert .= $train->service . ", ";
					$sqlInsert .= "'" . $train->train_uid . "', ";
					$sqlInsert .= checkNull($train->platform) . ", ";
					$sqlInsert .= "'" . $train->operator . "', ";
					$sqlInsert .= "'" . $train->aimed_departure_time . "', ";
					$sqlInsert .= "'" . $train->aimed_arrival_time . "', ";
					$sqlInsert .= "'" . $train->aimed_pass_time . "', ";
					$sqlInsert .= "'" . $train->origin_name . "', ";
					$sqlInsert .= "'" . $train->source . "', ";
					$sqlInsert .= "'" . $train->destination_name . "')";
				}
			}

			

			echo $sqlInsert . "</br>";

			mysqli_query($link, $sqlInsert) or die("INSERT query failed");
		}
		

		//print("<pre>");
		//print_r($response->body);
		//print("</pre>");
		//echo("-------------");
	}


	mysqli_close($link);
	//echo "Total execution time: " . (microtime(true) - $time_start) . "s";

?>
