<?php

if(!(isset($_GET['tlc'])))
{
  header("Location: index.php");
}
else
{
  include("dbConnection.php");
  $TLC = $_GET['tlc'];
  
  echo "before";
  
  $getTimesSQL = ("SELECT * FROM TrainTimes WHERE TLC='".$TLC."'");
  $getTimes = mysqli_query($link, $getTimesSQL);
  
  echo "after";
  
  while ($row = mysqli_fetch_assoc($getTimes)) {
     echo "yes";
  }
  
}

?>
