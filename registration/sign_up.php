<?php 
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign up</title>
	<link rel="stylesheet" href="../css/sign.css">
</head>
<body>
	<!-- Форма регистрации -->
	<form action="registration.php" method="POST">
		<label>Login</label>
		<input type="text" name="login" placeholder="Enter login">
		<label>Email</label>
		<input type="Email" name="email" placeholder="Enter email" value="<?php echo @$data['email']; ?>">
		<label>Password</label>
		<input type="password" name="password" placeholder="Enter password">
		<label>Password</label>
		<input type="password" name="password2" placeholder="Confirm password">
		<button type="submit" name="do_login">Sign in</button>
		
		<?php
		if (isset($_SESSION['message'])) {
			
			echo '<p class="errormsg">'. $_SESSION['message'] .'</p>';
		}
		unset($_SESSION['message']); 
		?>

		<p>Have an account?<a href="../login/log_in.php"> Log in</a></p>	
	</form>
</body>
</html>