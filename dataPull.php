<?php
	include("httpful.phar");
	include("dbConnection.php");

	function checkNull($item) {
		if(is_null($item)) {
			return 0;
		} else {
			return $item;
		}
	}

	//$sql = "SELECT * FROM Stations LIMIT 0, 5";
	$sql = "SELECT * FROM Stations WHERE TLC = 'WAT' OR TLC = 'HWY'";

	$result = mysqli_query($link, $sql);

	while ($row = mysqli_fetch_assoc($result)) {

		echo "Station Name: " . $row['Station'] . "</br>"; 
		
		// Delete rows from TrainTimes table of current station
		$sqlDel = "DELETE FROM `TrainTimes` WHERE `TLC` = '" . $row['TLC'] . "'";
		
		echo "delete SQL: " . $sqlDel . "</br>";

		mysqli_query($link, $sqlDel) or die("Delete query failed");
		
		// Add times to the TrainTime table
		$url = "http://transportapi.com/v3/uk/train/station/" . $row['TLC'] . "/live.json?app_id=03bf8009&app_key=d9307fd91b0247c607e098d5effedc97&train_status=passenger";
		//$url = "http://transportapi.com/v3/uk/train/station/WAT/live.json?app_id=03bf8009&app_key=d9307fd91b0247c607e098d5effedc97&train_status=passenger";

		$response = \Httpful\Request::get($url)->send();

		echo "Count of items to add: " . count($response->body->departures->all) . "</br>";

		echo "Complete JSON object response</br>";
		//print("<pre>");
		//print_r($response);
		//print("</pre>");

		foreach($response->body->departures as $departure) {
			$data = array();
			//echo "For every Departure</br>";
			foreach($departure as $train) {

				//echo "For every train</br>";
				//print("<pre>");
				//print_r($train);
				//print("</pre>");

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

				echo "SQL: " . $sqlInsert . "</br>";
				mysqli_query($link, $sqlInsert) or die("INSERT query failed");

				$data[] = $train->operator;
			}

			print("<pre>");
			print_r($data);
			print("</pre>");

			$tmp = array_count_values($data);
			foreach ($tmp as $value) {
				echo "#" . $value . " : " . "</br>";
			}
		}
		
		//print("<pre>");
		//print_r($response->body);
		//print("</pre>");
		//echo("-------------");
	}
	mysqli_close($link);
?>
