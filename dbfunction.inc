<?php 

session_start();



// Validate a student id and password 
function validatelogin($email,$password){
	// Build an SQL statment that will return a record with a
	// matching id and password.
	$sql = "SELECT * FROM `user` WHERE `email` = '" . $email . "' AND `password` = '" . $password . "'";
	echo $sql . "</br>";
	$loginresult = mysqli_query($link, $sql);
	$userdetails = mysqli_fetch_assoc($loginresult);
	// If the SQL query contains a record
	if ($userdetails){
		//$_SESSION['id'] = $loginresult['id'];
		echo "user exists.</br>";
		$_SESSION['id'] = "21";
	} else {
		echo "user is a ghost.</br>";
		$_SESSION['id'] ='';
	}
}

?>