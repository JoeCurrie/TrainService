<?php 
	
   	session_start();
	
	

	// Validate a student id and password 
	function validatelogin($email,$password){
	   // Connect to the database
           include("dbConnection.php");
	   // Build an SQL statment that will return a record with a
           // matching id and password.
	   $sql = "select * from user where email='$email' and password='$password';";
	   $loginresult = mysqli_query($link, $sql);
           $userdetails = mysql_fetch_array($loginresult);
	   // If the SQL query contains a record
	   if ($userdetails[email]){
              $_SESSION['id'] = $id;
   	      return true;
           }
           else {
	      $_SESSION['id'] ='';
   	      return false;	
           }
	}

?>