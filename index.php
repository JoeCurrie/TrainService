<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Train Finder | Home</title>

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
                    <li><a data-scroll href="#aboutDiv">About</a></li>
                    <li><a data-scroll href="#APIDiv">API</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a data-scroll href="index.php">Home</a></li>
                    <li><a data-scroll href="#">Log In</a></li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid">
            <!-- Search Bar -->
            <div id="searchDiv" class="row">
                <div class="inner">
                    <div id="searchDesc">
                        <h1>Search</h1>
                        <small>Look for a station by it's name of associating TLC code</small>
                    </div>
                    <form id="frmSearch" class="form-inline">
                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                <input type="text" id="searchBar" name="searchString" class="form-control" placeholder="Search by Station or TLC...">
                                <div class="input-group-btn">
                                    <button type="button" id="getLocButton" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Get Current Location">
                                        <span class="glyphicon glyphicon-globe"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div id="resultDiv" class="row">
                    
                    </div>
                </div>
            </div>
            <!-- About -->
            <div id="aboutDiv" class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    Information goes here.
                </div>
            </div>
            <!-- API -->
            <div id="APIDiv" class="row">
                <div class="col-sm-4">
                    One of three columns
                </div>
                <div class="col-sm-4">
                    One of three columns
                </div>
                <div class="col-sm-4">
                    One of three columns
                </div>
            </div>
        </div>














        <!-- jQuery first, then Bootstrap JS. -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/indexjs.js"></script>

    </body>
</html>