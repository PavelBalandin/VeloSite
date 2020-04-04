<?php 
	$mysqli = new mysqli ("localhost", "root", "", "velosportua");
	$mysqli->query ("SET NAMES 'utf8'");
	$result_set = $mysqli->query ("SELECT * FROM `articles`");
	$result_img = $mysqli->query ("SELECT * FROM `photos`");
	$mysqli->close ();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>All News</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<?php require "blocks/header.php" ?>
	<div class="main_all_news">
		<div class="containert4">
			<?php
						for($i = 0; $i < $result_set->num_rows;$i++):
					?>
					<?php 
						$name = $result_set->fetch_assoc();
						$img = $result_img->fetch_assoc();
						$imna = $img["img_path"];
						$id = $name["id"];
					 ?>
						<div class="card">
							  <img src="<?php echo($imna)?>" class="card-img-top" alt="...">
							  <div class="card-body">
							   <h5 class="card-title"><?php echo ($name["title"]) ?></h5>
							   <p class="card-text"><?php echo substr(($name["content"]),0,300). "..." ?></p>
							   <p class="card-text-time"><?php echo ($name["date_created"]) ?></p>
							  </div>
							  <form action="articlepage.php" method="POST">
							  		<input class="btn-primary" type="submit" value="Подробнее" name="--">
							  		<input type="hidden" value="<?php echo($id)?>" name="id">
							  </form>
						</div>
					<?php endfor; ?>
		</div>
	</div>	
	<?php require "blocks/footer.php" ?>	
</body>
</html>