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
  
  while ($row = mysqli_fetch_assoc($getTimes)) {
     echo $row['TLC'];
     echo $row['TrainUID'];
     echo $row['Platform'];
     echo $row['Operator'];
     echo $row['Aimed_Dep_Date'];
     echo $row['Origin_Name'];
     echo $row['Destination_Name'];
     
  }
}

?>
