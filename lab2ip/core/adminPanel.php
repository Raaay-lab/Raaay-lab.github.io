<?php
	session_start();
	if (!$_SESSION['admin2']) {
		header('Location: /lab2ip/authorization/index.php');
	}
	require_once 'connect.php';
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf8">
	<script src="/lab2ip/js/jquery-3.5.0.min.js"></script>
	<script src="/lab2ip/js/popper.min.js"></script>
	<link rel="stylesheet" href="/lab2ip/css/bootstrap.min.css">
	<script src="/lab2ip/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/lab2ip/css/profile.css">
	<title>Админ панель</title>
</head>
<body>
<div class = "list">
	<div class = "MenuMiddle">
		<div class = "okno"><a type="button" class="buttonNew" href="/lab2ip/tournaments.php">Турниры</a></div>
		<div class = "okno"><a type="button" class="buttonNew" href="/lab2ip/rdu.php">RDU</a></div>
		<div class = "okno"><a type="button" class="buttonNew" href="/lab2ip/directions.php">Направления</a></div>
		<div class = "okno"><a type="button" class="buttonNew active kek" href="/lab2ip/teachers.php">Преподаватели</a></div>
		<div class = "okno"><a type="button" class="buttonNew" href="/lab2ip/graduates.php">Выпускники</a></div>
	</div>

	<div class = "welcome">
    <p> Добро пожаловать в административную панель!</p>
	</div>

	<div class = "adminPanel">
	<?php
		$sql = mysqli_query($connect, 'SELECT `id`, `name` , `surname` , `dateBirthDay`,`dateBirthMonth`,`dateBirthYear`, `Male`, `email`, `login`, `password` FROM `rduusers`'); 
		echo "<table width='auto' class = 'admintable'>";
		echo "<th>Имя</th><th>Фамилия</th><th>День рождения</th><th>Месяц рождения</th><th>Год рождения</th><th>Пол</th><th>почта</th><th>логин</th><th>Действие</th>";
		while ($result = mysqli_fetch_array($sql)) {
			if($result['login'] != 'admin'){ 
				echo "<tr></th><th> {$result['name']} </th><th> {$result['surname']} </th><th> {$result['dateBirthDay']} </th><th> {$result['dateBirthMonth']} </th><th> {$result['dateBirthYear']} </th><th> {$result['Male']} </th><th> {$result['email']} </th><th> {$result['login']} </th><th> <a href='delete.php?id=".$result['id']. "'>удалить запись</a> </th></tr>";
				}
		}
		echo "</table>";
	?> 
	</div>

	<div class = "copy">
		©Made by Raaay<br>
		all rights reserved
	</div>
</div>
</body>
</html>