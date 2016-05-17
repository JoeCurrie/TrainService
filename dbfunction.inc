<?php 

session_start();



// Validate a student id and password 
function validatelogin($email,$password){
	// Build an SQL statment that will return a record with a
	// matching id and password.
	$sql = "SELECT * FROM `user` WHERE `email` = '" . $email . "' AND `password` = '" . $password . "'";
	echo $sql . "</br>";
	$loginresult = mysqli_query($link, $sql) or die("Query failed");
	//$userdetails = mysqli_fetch_assoc($loginresult);
	// If the SQL query contains a record
	if(mysqli_num_rows($loginresult) == 0) {
		echo "Login Failed";
	} else {
		echo "Login Successful";
		$userdetails = mysqli_fetch_assoc($loginresult);
		$_SESSION['id'] = $userdetails['id'];
	}
}

?>