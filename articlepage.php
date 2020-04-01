<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Article</title>
	<link rel="stylesheet" href="css/main.css">
</head>
	<?php
		$id = $_POST["id"];
		$mysqli = new mysqli ("localhost", "root", "", "velosportua");
		
		$mysqli->query ("SET NAMES 'utf8'");
		$result_set = $mysqli->query ("SELECT * FROM `articles` where id  = $id");
		$result_img = $mysqli->query ("SELECT * FROM `photos` where id  = $id");
		$mysqli->close ();
		$name = $result_set->fetch_assoc();
		$img = $result_img->fetch_assoc();
		$imna = $img["img_path"];
	?>


<body>
	<?php require "blocks/header.php" ?>
	<div class="mainarticle">
		<div class="containert2">
			<img src="<?php echo($imna)?>" alt="">
			<div>
				<h5 class="card-title"><?php echo ($name["title"]) ?></h5>
			</div>
			<div class="card-text">
				<p><?php echo ($name["content"])?></p>
			</div>
				
		</div>
	</div>
	<?php require "blocks/footer.php" ?>
</body>
</html>