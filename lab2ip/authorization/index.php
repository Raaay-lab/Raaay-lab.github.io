<?php
	 session_start();
	require "header.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf8">
	<script src="/lab2ip/js/jquery-3.4.1.slim.min.js"></script>
	<script src="/lab2ip/js/popper.min.js"></script>
	<link rel="stylesheet" href="/lab2ip/css/bootstrap.min.css">
	<script src="/lab2ip/js/bootstrap.min.js"></script>
	<link rel = "stylesheet" type = "text/css" href = "/lab2ip/css/stylesAu.css">
	<title>Авторизация</title>
</head>
<body>

<div class = "fon">	
	<form action="/lab2ip/core/signin.php" method = "post">
		<div class = "ramka">
			<h1>Авторизация</h1>
			<div class = "Login">
				<div class = "alogin">
					<p><strong>Ваш логин</strong>:
					<input type = "text" name = "login">
					</p>
				</div>
			</div>
			<div class = "Parol1">
				<div class = "apass">
					<p><strong>Ваш пароль</strong>:
					<input type = "password" name = "password1">
					</p>
				</div>	
			</div>
			<button type = "submit" class = "accept">Авторизироваться</button>
			<?php
				if($_SESSION['message']){
					echo '<p class = "msg">'.$_SESSION['message'].'</p>';
				} 
				unset($_SESSION['message']);
			?>
		</div>
	</form>
</div>
<div class = "copy">
	©Made by Raaay<br>
	all rights reserved
</div>
</body>
</html>