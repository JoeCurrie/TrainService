<?php

if(!(isset($_GET['tlc'])))
{
  header("Location: index.php");
}
else
{
  include("dbConnection.php");
  $TLC = $_GET['tlc'];
  
  $getTimesSQL = ("SELECT * FROM TrainTimes WHERE TLC='".$TLC."'");
  $getTimes = mysqli_query($link, $getTimesSQL);
  
  while ($row = mysqli_fetch_assoc($getTimes)) {
     echo "yes";
  }
  
}

?>
