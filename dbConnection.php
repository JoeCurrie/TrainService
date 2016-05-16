<?php

//Get DB Connection Details from Heroku ENV PHP Variable
$url = getenv('JAWSDB_URL');
$dbparts = parse_url($url);

//Database Connection String
$link mysqli_connect("uf63wl4z2daq9dbb.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "b0cdvdlfknn2f7i1", "t7e2dai8jpa59ak6", "dpejnuizb16bde6h");

//Check for Errors
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

?>
