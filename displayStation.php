<?php
	// Start timer...
	//$time_start = microtime(true);

	include("dbconnect.php");

	$data = array();

	$sql = "SELECT `station`, `TLC` FROM `Stations` WHERE `station` LIKE '%" . $_POST['string'] . "%' OR `TLC` LIKE '%" . $_POST['string'] . "%' ORDER BY `station` ASC LIMIT 0, 5";

	$data['sql'] = $sql;

	$result = mysqli_query($link, $sql) or die($data['error'] = $mysqli_error());

	if(mysqli_num_rows($result) > 0) {
		$data['count'] = mysqli_num_rows($result);
		while($row = mysqli_fetch_assoc($result)) {
			$rowArr = array();
			$rowArr['station'] = $row['station'];
			$rowArr['tlc'] = $row['TLC'];
			$data['results'][] = $rowArr;
		}
	} else {
		$data['count'] = 0;
	}

	echo json_encode($data);


	//echo "Total execution time: " . (microtime(true) - $time_start) . "s";

?>