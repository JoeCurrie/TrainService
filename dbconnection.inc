<?php
$connection = mysql_connect('uf63wl4z2daq9dbb.chr7pe7iynqr.eu-west-1.rds.amazonaws.com', 'b0cdvdlfknn2f7i1', 't7e2dai8jpa59ak6');
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('dpejnuizb16bde6h');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}
?>