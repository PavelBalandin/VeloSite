<?php
	if (isset($_SESSION['user'])){		
			$name1 =   $_SESSION['user']['login'];
			$v = 1;
			$loghref = "#";
		}else{
			$name1 = " Log in";
			$v = 0;
			$loghref = "login/log_in.php";
		}
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
			 		<li value="<?php echo($v)?>" id="mainLi"><a href="<?php echo($loghref)?>" ><img src="img/user.png" alt=""> <?php echo $name1 ?></a>
			 		<ul class="submenu">
						<li><a href="#">Accountn</a></li>
						<li><a href="../phpsessionexit.php">Exit</a></li>
					</ul>
					</li>
				</ul>
			</nav>
		</div>
	</header>