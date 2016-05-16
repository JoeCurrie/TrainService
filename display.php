<?php

if(!(isset($_GET['tlc'])))
{
  header("Location: index.php");
}
else
{
  include("dbConnection.php");
  $TLC = $_GET['tlc'];

  $getTimes = mysqli_query($link, "SELECT * FROM TrainTimes WHERE TLC='".$TLC."'");
  $getStationName= mysqli_fetch_assoc($getTimes);
  
  echo "<h1>Your TLC Code is: ".$TLC."</h1>";
  echo "<h2>".$getStationName['Origin_Name']."</h2>";
  
  while ($row = mysqli_fetch_assoc($getTimes)) {
     echo $row['TrainUID'];
     echo $row['Platform'];
     echo $row['Operator'];
     echo $row['Aimed_Dep_Date'];
     echo $row['Destination_Name'];
  }
}

?>
