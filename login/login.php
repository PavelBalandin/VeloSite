<!-- Авторизация пользователя -->
	<?php
		session_start();	
		require "../db.php"; 

		$data = $_POST;
		if( isset($data['do_login']))
		{	
			// Начало авторизации 

			$errors = array();
			$user = R::findOne('users', 'login = ?', array(trim($data['login'])));
			if($user){
				if(password_verify(trim($data["password"]), $user->password))
				{
					
				} else
				{
					$errors[] = 'Wrong password';
				}

			}else
			{
				$errors[] = 'User is not found';
			}

			if( ! empty($errors))
			{
				$ErrorString = "";
				for ($i=0; $i <count($errors); $i++) { 
					$ErrorString .= array_shift($errors);
				}	
				$_SESSION['message'] = $ErrorString;
				header('Location: log_in.php');
			}else
			{
				//echo '<div> Authorization successful </div> <hr>';
				header('Location: ../index.php');
				$_SESSION['user']  = [
					"login" => $data['login']
				];

			}

		}
	?>	