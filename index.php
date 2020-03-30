<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Velosport UA</title>
	<link rel="stylesheet" href="css/main.css">
</head>

<?php
	$mysqli = new mysqli ("localhost", "root", "", "velosportua");
	$mysqli->query ("SET NAMES 'utf8'");
	$result_set = $mysqli->query ("SELECT * FROM `articles`");
	$result_img = $mysqli->query ("SELECT * FROM `photos`");
	$mysqli->close ();
?>

<body>
	
	<?php require "blocks/header.php" ?>

	<div class="news_blocK">
		<div class="containert2">
			<div class="news_blocK_tile">
				<div>
					<h3>Актуальные новости и статьи из вело мира</h3>
				</div>
			</div>
			<hr>
			<div class="news">
				<div class="cards">
					<?php
						for($i = 0; $i < $result_set->num_rows;$i++):
					?>
					<?php 
						$name = $result_set->fetch_assoc();
						$img = $result_img->fetch_assoc();
						$imna = $img["img_path"]
					 ?>
						<div class="card">
							  <img src="<?php echo($imna)?>" class="card-img-top" alt="...">
							  <div class="card-body">
							   <h5 class="card-title"><?php echo ($name["title"]) ?></h5>
							   <p class="card-text"><?php echo substr(($name["content"]),0,450). "..." ?></p>
							   <p class="card-text-time"><?php echo ($name["date_created"]) ?></p>
							  </div>
							  <a href="articlepage.php" class="btn-primary"> Подробние</a>
						</div>
					<?php endfor; ?>		
				</div>
				
			</div>
		</div>
	</div>

	<?php require "blocks/footer.php" ?>
</body>
</html>