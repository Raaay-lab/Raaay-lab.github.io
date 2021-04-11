<?php
	session_start();
	if (isset($_SESSION['user'])): 
	require("headerReg.php");
	else :
	require("header.php");
	endif;

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf8">
	<link rel="stylesheet" type="text/css" href="css/stylesMain.css">
	<script src="js/jquery-3.4.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<title>Real Dream University</title>
</head>
<body>
<div class = "list">
	<div class = "MenuMiddle">
		<div class = "okno">
			<a type="button" class="buttonNew" href="tournaments.php">Турниры</a>
		</div>
		<div class = "okno">
			<a type="button" class="buttonNew" href="rdu.php">RDU</a>
		</div>
		<div class = "okno">
			<a type="button" class="buttonNew" href="directions.php">Направления</a>
		</div>
		<div class = "okno">
			<a type="button" class="buttonNew" href="teachers.php">Преподаватели</a>
		</div>
		<div class = "okno">
			<a type="button" class="buttonNew" href="graduates.php">Выпускники</a>
		</div>
	</div>
	<div class = "fon">
		<ul class="body_slides">
			<li><img src = "images/slider7.jpg" alt = "" width = "100%" height = "900px"></li>
			<li><img src = "images/slider2.jpg" alt = "" width = "100%" height = "900px"></li>
			<li><img src = "images/slider3.jpeg" alt = "" width = "100%" height = "900px"></li>
			<li><img src = "images/slider4.jpg" alt = "" width = "100%" height = "900px"></li>
		</ul>
	</div>
	<div class = "text1">
		<p>Наш ВУЗ сотрудничает с</p><p> несколькими крупными киберспортивными</p><p> организациями, поэтому</p><p>
		именно ты можешь тренироваться там,</p><p>где вершилась история.</p>
	</div>
	<div class = "copy">
		© Made by Raaay<br>
		all rights reserved
	</div>
</div>
</body>
</html>