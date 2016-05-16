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
        <link rel="stylesheet" type="text/css" href="css/index.css">
    </head>
    <body>
        <!-- Nav Bar -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img alt="Brand" class="img-rounded" src="img/icon3.png" width="25" height="25">
                    </a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a data-scroll href="#searchDiv">Search</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a data-scroll href="index.php">Home</a></li>
                    <li><a data-scroll href="#">Log In</a></li>
                </ul>
            </div>
        </nav>
        
        <div style="color:#000;">
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
                   echo "<td><b>".$row['Destination_Name']."</b></td>";
                   echo "<td>Today @ ".substr($row['Aimed_Dep_Date'], 0, 5)."</td>";
                   
                   if($row['Platform'] != "0")
                   {
                       echo "<td>".$row['Platform']."</td>";
                   }
                   else
                   {
                       echo "<td>1</td>";
                   }
                   
                   echo "<td>".$row['Operator']."</td>";
                   echo "</tr>";
                }
              }
              ?>
          </tbody>
      </table>
      </div>
      
      <!-- jQuery first, then Bootstrap JS. -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </body>
</html>
