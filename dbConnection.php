<?php

//Get DB Connection Details from Heroku ENV PHP Variable
$url = getenv('JAWSDB_URL');
$dbparts = parse_url($url);

//Database Connection String
$link mysqli_connect($dbparts['host'], $dbparts['user'], $dbparts['pass'], ltrim($dbparts['path'],'/'));

//Check for Errors
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

?>
