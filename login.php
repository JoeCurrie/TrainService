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
    <body id="grad">
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
                    <li><a data-scroll href="index.php">Home</a></li>
                    <li class="active"><a data-scroll href="#">Log In</a></li>
                </ul>
            </div>
        </nav>
	<br/>
<div class="container">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="row">
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"></div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
												<div id="title"><h2>Please Login!<h2></div>
						<hr class="style-two">
						<form name="frmLogin" action="Home.php" method="post">
								<input id="email" type="text" name="email" class="form-control" placeholder="Email">	
						<br/>
											<input id="password" type="password" name="password" class="form-control" placeholder="Password">	
						<br/>
						<div class="row">
						<div class="col-lg-4 center-block"></div>
						<div class="col-lg-4 center-block">
						<input id="singlebutton" type="submit" class="btn btn-inverse btn-block" value="Login"></input>
						</div>
						<div class="col-lg-4 center-block"></div>
						</form>
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"></div>
</div>
</div>
</div>
</body>
    </body>
</html>