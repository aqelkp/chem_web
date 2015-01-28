<?php 
	session_start();
	$error = 0;
	$name = null;
	$phone_number = null; 
	$college = null; 
	$city= null;
	$email = null;

	
	if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
		
	}
	if (isset($_SESSION['user_error'])){
		echo "error is there";

		switch ($_SESSION['user_error']) {
			case 1:
				$error  = 1;	
				$name = $_SESSION['temp_name'] ;
				$college = $_SESSION['college'] ;
				$city = $_SESSION['$city'] ;
				$phone_number = $_SESSION['$phone_number'] ;
				$_SESSION['signup_error'] = null;
				break;
			case 2:
				$error = 2;
				$email = $_SESSION['temp_name'];
				break;
			}

	}
?>

<div class="register-container">
	<div class="register">
		<form method="POST" action="api/sign_up.php">
			<h1>Register</h1>
			<input type="text" name="name" placeholder="Name" value="<?php echo $name;?>" required /><br>
			<input type="email" name="email" placeholder="Email" required />
			<?php 
				if ($error == 1){ echo "<font color=\"white\"><p>Email already exist.</p></font>";}
			?>
			<br>
			<input type="text" name="college" placeholder="College" value="<?php echo $college;?>" required /><br>
			<input type="text" name="city" placeholder="City" value="<?php echo $city;?>" required /><br>
			<input type="text" name="phone_number" placeholder="Phone Number" value="<?php echo $phone_number;?>" required /><br>
			<input type="password" name="password1" placeholder="Enter Password" required /><br>
			<input type="password" name="password2" placeholder="Retype Password" required /><br>
			<span>Accomodation: </span>
			<input type="radio" name="accomodation" /> Yes
			<input type="radio" name="accomodation" checked /> No<br>
			<button type="submit" name="submit" class="btn btn-primary btn-block btn-large">submit</button>
		</form>
	</div>
	<div class="login">
		<form method="POST" action="api/login.php">
			<h1>Login</h1>
			<input type="text" name="email" placeholder="Email" required value="<?php echo $email;?>" /><br>
			<input type="password" name="password" placeholder="Enter Password" required /><br>
			<button type="submit" name="submit"  class="btn btn-primary btn-block btn-large">submit</button>
			<h1>Login via</h1>
			<a href="#" class="social_links google">Login with Google</a>
			<a href="#" class="social_links facebook">Login with Facebook</a>
			<a href="#" class="social_links twitter">Login with Twitter</a>
		</form>
	</div>
</div>
