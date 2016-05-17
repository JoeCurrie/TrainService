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
                    <li><a href="Registration.php">Log In</a></li>
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
                    <form id="frmSearch" autocomplete="off" class="form-inline">
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
                <div id="aboutText" class="col-sm-8 col-sm-offset-2">
                    <div class="page-header">
                        <h1>About <small>Whats it all about?</small></h1>
                    </div>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras auctor, ex vel mollis pharetra, mi orci auctor lectus, et luctus mi ipsum mollis felis. Pellentesque tristique semper rutrum. Sed bibendum feugiat sapien nec tempor. Ut vitae venenatis tortor. Cras augue magna, varius eu feugiat id, interdum ut lacus. Fusce eget arcu condimentum, viverra justo vel, dignissim diam. Pellentesque a lacus tellus. Nam eget enim cursus, iaculis augue vitae, maximus ipsum. Donec tristique nulla tortor, sit amet suscipit ipsum dapibus in. Nulla consequat nec arcu eget molestie.</p>

                    <p>Proin eu ante in magna viverra iaculis non at libero. Cras porttitor quam ac turpis fringilla varius in et sem. Proin vestibulum mi purus, quis cursus nulla ornare eu. Donec pretium ante at rhoncus venenatis. Proin interdum facilisis lacus ac condimentum. Suspendisse turpis erat, condimentum in egestas ut, convallis ut ante. In tincidunt metus sed augue aliquet, id rutrum nibh efficitur. Vivamus id lorem aliquam, consequat sapien in, ultrices urna. Vivamus aliquam felis eget porta vestibulum.</p>

                    <p>Nam blandit at sem eu interdum. Aliquam augue lectus, fermentum congue dui vitae, pulvinar tincidunt nulla. Etiam semper hendrerit libero, in venenatis metus condimentum id. Duis in erat venenatis, porta diam vitae, dignissim velit. Curabitur arcu felis, blandit quis elit eu, ultrices molestie metus. Cras ut interdum eros, sed sagittis elit. Nulla facilisi. Curabitur gravida est nec dictum tempor.</p>

                    <p>Pellentesque et ullamcorper ipsum. Fusce tincidunt condimentum risus nec dignissim. Mauris vitae eros placerat, pharetra magna quis, porttitor nisi. Quisque tristique diam at mi mollis, sed gravida nibh consectetur. Etiam congue velit at vestibulum egestas. Fusce vitae enim justo. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque quis nunc non sapien porta ultrices sollicitudin quis nisl. Etiam porttitor viverra orci non vehicula. Fusce vestibulum velit sit amet odio tempor, volutpat suscipit ipsum porttitor. Integer et dui eu enim pharetra ullamcorper nec vel elit. Aenean tincidunt quam sagittis sapien fringilla, sed iaculis ex sagittis. Nunc eleifend nisi id lacus laoreet ultrices at a quam.</p>

                    <p>Etiam accumsan nulla eget mi gravida pretium. Sed consequat mi ut sagittis mollis. Sed vel cursus dolor. Vivamus molestie leo urna, sit amet commodo orci placerat vitae. In vel sodales ante. In vehicula, est eget consectetur dignissim, tellus nibh tempor elit, vitae scelerisque nulla augue vitae eros. In malesuada tortor id mi dictum mollis. In vel dui mauris. Morbi suscipit sollicitudin metus. Pellentesque in pharetra est, at lacinia tellus. Aenean interdum ligula mi. Nam et metus massa. Nullam ut elementum mauris. Vestibulum tellus enim, suscipit vel dolor a, congue scelerisque tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
            </div>
            <!-- API -->
            <div id="APIDiv" class="row">
                <div class="col-sm-4">
                    One of three columns
                </div>
                <div class="col-sm-4">
                    Two of three columns
                </div>
                <div class="col-sm-4">
                    Three of three columns
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
