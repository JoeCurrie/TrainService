<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Train Finder | Display Times</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">

        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
    </head>
    <body>
      <?php
      if(!(isset($_GET['tlc'])))
      {
        header("Location: index.php");
      }
      else
      {
        include("dbConnection.php");
        $TLC = $_GET['tlc'];
        
        $getStationName = mysqli_query($link, "SELECT * FROM Stations WHERE TLC='".$TLC."'");
        $row = mysqli_fetch_assoc($getStationName);
        echo "<h1>Station: ".$row['Station']."</h1>";
      
        $getTimes = mysqli_query($link, "SELECT * FROM TrainTimes WHERE TLC='".$TLC."'");
        while ($row = mysqli_fetch_assoc($getTimes)) {
           echo $row['TrainUID'];
           echo $row['Platform'];
           echo $row['Operator'];
           echo $row['Aimed_Dep_Date'];
           echo $row['Origin_Name'];
           echo $row['Destination_Name'];
        }
      }
      ?>
    </body>
</html>
