<?php 
include_once 'includes/connection.php';
include_once 'includes/function.php';
session_start();

	if (isset($_POST['submit'])){
		$name = $_POST['name'];
		$password = $_POST['password1'];
		$college = $_POST['college'];
		$city = $_POST['city'];
		$phone_number = $_POST['phone_number'];
		$email = $_POST['email'];
		$query = "SELECT * FROM users WHERE email = '{$email}' ";
		$user_set = mysql_query($query);
			if ($user = mysql_fetch_array($user_set)) {
				$error = 1;
				echo "User Already Exists";
				$_SESSION['user_error'] = 1;
				$_SESSION['temp_name'] = $_POST['name'];
				$_SESSION['password'] = $_POST['password1'];
				$_SESSION['college'] = $_POST['college'];
				$_SESSION['$city'] = $_POST['city'];
				$_SESSION['$phone_number'] = $_POST['phone_number'];
				$_SESSION['email'] = $_POST['email'];
				header("Location: http://localhost/chem/?page=register");
				
		
			} else {
				
				
				$error = 0;
				$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
			    $verification_code = substr(str_shuffle($chars),0, 10);
			    $message = "Hi {$name} \r\nClick on the folllowing link to complete you registration \r\nhttp://localhost/Chemclave_web/confirm.php?key={$verification_code}   \r\nRegards \r\nTeam Chemclave
			    ";
			    $af = "Hi";
				$message = wordwrap($message, 70, "\r\n");
				mail($email, 'Verify email address', $message);
				$query = "INSERT INTO users_temp (name, password, college, email, phone_number, city, user_key)
		 		VALUES ('{$name}', '{$password}','{$college}','{$email}', '{$phone_number}', '{$city}', '{$verification_code}'  ) ";
				
				$addition = mysql_query($query);
				confirm_query($addition, "Insertion");
				echo "A verification message has been sent to your email. Please confirm your mail by clicking on the 
				link sent.";	
			}
	}
?>