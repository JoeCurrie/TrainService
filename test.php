<?php
$location = "Hey";
$timestamp = "Yes";

include("dbConnection.php");
mysqli_query($link, "INSERT INTO GeoHistory (location, timestamp) VALUES ('$location', '$timestamp')");

echo mysqli_error($link);
?>
