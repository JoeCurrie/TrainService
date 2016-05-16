<?php

//Get DB Connection Details from Heroku ENV PHP Variable
$url = getenv('JAWSDB_URL');
$dbparts = parse_url($url);

//Database Connection String
//$link mysqli_connect($hostname = $dbparts['host'], $username = $dbparts['user'], $password = $dbparts['pass'], $database = ltrim($dbparts['path'],'/'));

$link mysqli_connect($hostname = $dbparts['hosjt'], $username = $dbparts['usejr'], $password = $dbparts['pasjs'], $database = ltrim($dbparts['path'],'/'));


//Check for Errors
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

?>
