<?php 
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="../css/sign.css">
</head>
<body>
	<!-- Форма авторизации -->
	<form action="login.php" method="POST">
		<label>Login</label>
		<input type="text" name="login" placeholder="Enter login">
		<label>Password</label>
		<input type="password" name="password" placeholder="Enter password">
		<button type="submit" name="do_login">Sign in</button>
		<?php
		if (isset($_SESSION['message'])) {
			
			echo '<p class="errormsg">'. $_SESSION['message'] .'</p>';
		}
		unset($_SESSION['message']); 
		?>	
		<p>Don't have an account? <a href="../registration/sign_up.php">Sign Up</a></p>
	</form>
</body>
</html>