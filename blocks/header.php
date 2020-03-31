<?php
	if (isset($_SESSION['user'])){		
			$name1 =   $_SESSION['user']['login'];
		}else{
			$name1 = " Log in";
		}
		unset($_SESSION['user']);
?>
<header>
		<div class="containert1">
			<div class="logo">
				<div>
					<img src="img/logo.png" alt="">
				</div>
				<div id = "logotext">
					VeloSport UA
				</div> 	
			</div>
			<nav>
				<ul class="meny">
					<li><a href="index.php">Home</a></li>
					<li><a href="all_news.php">All News</a></li>
			 		<li><a href="about_us.php">About US</a></li>
					<li><a href="login/log_in.php"><img src="img/user.png" alt=""> <?php echo $name1 ?></a></li>
				</ul>
			</nav>
		</div>
	</header>