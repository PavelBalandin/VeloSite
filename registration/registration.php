<!-- Регистрация пользователя -->
	<?php 
		session_start();
		require "../db.php"; 
		$data = $_POST;
		if( isset($data['do_login'])) 
		{	
			//Проверка на правильность заполнения формы
			$errors = array();
			if(trim($data['login']) == '' )
			{
				$errors[] = 'Enter Login ';
			}

			if(trim($data['email']) == '' )
			{
				$errors[] = 'Enter email ';
			}

			if($data['password'] == '' )
			{
				$errors[] = 'Enter password ';
			}

			if($data['password'] != $data['password2'] )
			{
				$errors[] = 'First password not  equel second password ';
			}

			if(R::count('users', "login = ?", array($data['login'])) > 0 ) 
			{
				$errors[] = 'This login is used already ';
			}

			if(R::count('users', "email = ?", array($data['email'])) > 0 ) 
			{
				$errors[] = 'This email is used already ';
			}
			

			if( empty($errors)){
				//Ошибок нет, продолжаем регистрацию, записываем данные в базу данных
				$user = R::dispense('users');
				$user->login = $data['login']; 
				$user->email = $data['email']; 
				$user->password = password_hash($data['password'], PASSWORD_DEFAULT);
				R::store($user);
				header('Location: ../login/log_in.php');		

			}else
			{	
				$ErrorString = "";
				for ($i=0; $i <count($errors); $i++) { 
					$ErrorString .= array_shift($errors);
				}	
				$_SESSION['message'] = $ErrorString;
				header('Location: sign_up.php');		
			}	
			
		}
		
	 ?>