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
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
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
        echo "<h1><b>TLC: ".$TLC." | Station: ".$row['Station']."</b></h1>";
        ?>
        
        <table class="table table-striped">
        <thead>
          <tr>
            <th>Origin Station</th>
            <th>Destination Station</th>
            <th>Train Departure Time</th>
            <th>Platform</th>
            <th>Train Operator</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $getTimes = mysqli_query($link, "SELECT * FROM TrainTimes WHERE TLC='".$TLC."'");
        while ($row = mysqli_fetch_assoc($getTimes)) {
           echo "<tr>";
           echo "<td>".$row['Platform']."</td>";
           echo "<td>".$row['Operator']."</td>";
           echo "<td>".$row['Aimed_Dep_Date']."</td>";
           echo "<td>".$row['Origin_Name']."</td>";
           echo "<td>".$row['Destination_Name']."</td>";
           echo "</tr>";
        }
      }
      ?>
      </tbody>
      </table>
      
      <!-- jQuery first, then Bootstrap JS. -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </body>
</html>
