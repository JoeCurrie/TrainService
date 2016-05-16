<?php 
	
   	session_start();
	
	

	// Validate a student id and password 
	function validatelogin($email,$password){
	   // Build an SQL statment that will return a record with a
           // matching id and password.
	   $sql = "select * from user where email='$email' and password='$password'";
	   $loginresult = mysqli_query($link, $sql);
           $userdetails = mysqli_fetch_assoc($loginresult);
	   // If the SQL query contains a record
	   if ($userdetails['email']){
              //$_SESSION['id'] = $loginresult['id'];
	   		$_SESSION['id'] = "21";
   	      return true;
           }
           else {
	      $_SESSION['id'] ='';
   	      return false;	
           }
	}

?>