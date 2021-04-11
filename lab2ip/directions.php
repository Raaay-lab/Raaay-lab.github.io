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
	<script src="js/jquery-3.4.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/stylesWays.css">
	<title>Направления</title>
</head>
<body>

<div class = "list">
	<div class = "MenuMiddle">
		<div class = "okno"><a type="button" class="buttonNew" href="tournaments.php">Турниры</a></div>
		<div class = "okno"><a type="button" class="buttonNew" href="rdu.php">RDU</a></div>
		<div class = "okno"><a type="button" class="buttonNew active kek" href="directions.php">Направления</a></div>
		<div class = "okno"><a type="button" class="buttonNew" href="teachers.php">Преподаватели</a></div>
		<div class = "okno"><a type="button" class="buttonNew" href="graduates.php">Выпускники</a></div>
	</div>
	<div class = "title1">Сделай свой выбор!!!</div>
	<p class "open">
		<a href = "" alt = ""><img src = "images/выбор1.jpg" alt = ""></a>
		<a href = "" alt = ""><img src = "images/выбор2.jpg" alt = ""></a>
	</p>
	<div class = "copy">
		©Made by Raaay<br>
		all rights reserved
	</div>
</div>
</body>
</html>