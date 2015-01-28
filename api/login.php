<?php 
include_once 'includes/connection.php';
include_once 'includes/function.php';
session_start();

	if (isset($_POST['submit'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$query = "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}' ";
		$user_set = mysql_query($query);
		if (mysql_fetch_array($user_set)) {
			echo "Correct";
			$_SESSION['logged_in'] = true;
			header("Location: http://localhost/chem/");
		}else {
			echo "Invalid Credentials";
			$_SESSION['user_error'] = 2;
			$_SESSION['temp_name'] = $_POST['email'];
			header("Location: http://localhost/chem/?page=register");
		}


		 
	}else{
		echo "Invalid Url";
	}
?>