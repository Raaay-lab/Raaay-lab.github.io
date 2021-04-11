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
	<link rel="stylesheet" type="text/css" href="css/stylesVip.css">
	<title>Выпускники</title>
</head>
<body>

<div class = "listmain">
	<div class = "MenuMiddle">
		<div class = "okno"><a type="button" class="buttonNew" href="tournaments.php">Турниры</a></div>
		<div class = "okno"><a type="button" class="buttonNew" href="rdu.php">RDU</a></div>
		<div class = "okno"><a type="button" class="buttonNew" href="directions.php">Направления</a></div>
		<div class = "okno"><a type="button" class="buttonNew" href="teachers.php">Преподаватели</a></div>
		<div class = "okno"><a type="button" class="buttonNew active kek" href="graduates.php">Выпускники</a></div>
	</div>
	<div class = "list">
		<div class = "istr">
			<h1>Истории выпускников</h1>
			<p>Рассказываем о жизни наших выпускников после окончания обучения, и о том,
			как сложился их путь в новой профессии. Если хотите рассказать свою
			историю — напишите нам.</p>
		</div>
		<div class = "block1">
			<img src = "images/запись1.jpg" alt = "" class = "lol">
			<p>
				<div class = "alt" style = "margin-left:5px;">
					<p>Даниил Тесленко</p>В 2002 году он начинает играть в сообществе Arsenal. В 2004 году со своим другом и тиммейтом Edward'om,
					они вступают в сообщество Pro100. Pro100 участвовала во многих турнирах в том числе и в турнире от ASUS.После распада команды pro100 Edward и Zeus уходят в команду Virtus.pro - 2008 год.
					Уже ровно через год играя в команде Virtus.pro, zeus создаёт свою команду natus vincere - 2009 год.
					Причиной этому послужили неудачные турниры.
					С октября 2016 года Даниил Тесленко: Zues вступает в команду Gambit в роли капитана команды.Летом этого года они выиграют чемпионат мира.
				</div>
			</p>
		</div>
		<div class = "block1">
			<p><img src = "images/запись2.jpg" alt = "" class = "lol"></p>
			<p>
				<div class = "alt" style = "margin-left:5px;">
					<p>Егор Маркелов</p>"Старички", помнят времена, когда лидером мировых рейтингов был украинец — Егор «markeloff» Маркелов,
					лучшие годы киберспортивной карьеры которого прошли в Natus Vincere.Маркелов выступает до сих пор за состав FlipSideTaktics.Впервые о себе на весь киберспортивный мир markeloff заявил в 2008–2009 годах, когда его команды
					HellRaisers и DTS начали потихоньку навязывать серьезную борьбу ведущим командам Европы.В 2010 году Na`Vi стали первой командой в истории Counter-Strike,
					которая смогла выиграть три турнира «большого шлема» в один год — IEM World Championship, ESWC и World Cyber Games.
				</div>
			</p>
		</div>
		<div class = "block1">
			<p><img src = "images/запись3.jpg" alt = "" class = "lol"></p>
			<p>
				<div class = "alt" style = "margin-left:5px;">
					<p>Ладислав Ковач</p>Профессиональная игровая карьера Ладислава началась в 2007 году. GuardiaN один из немногих Counter-Strike игроков поигравших в Counter-Strike: Source,
					а позже и в Counter-Strike 1.6. На национальном уровне словак добился больших успехов. В середине 2012 года перешел на Counter-Strike: Global Offensive. Весьма быстро 
					проявил любовь к СНГ-командам. Сначала он выступал за Virtus.pro, а затем закрепился в составе Natus Vincere. В этом коллективе он играл почти четыре года и покинул его,
					когда команда оказалась в глубоком кризисе и приступила к поиску новых игроков. В августе 2017 года GuardiaN подписал контракт с FaZe Clan. 
				</div>
			</p>
		</div>
		<div class = "block1">
			<p><img src = "images/запись4.jpg" alt = "" class = "lol"></p>
			<p>
				<div class = "alt" style = "margin-left:5px;">
				<p>Иоан Сухарев</p>Иван по праву считается одним из сильнейших индивидуальных игроков мира. Проводя детство в компьютерных клубах, Edward всё больше понимал, что хочет связать 
				свою жизнь именно с киберспортом. Свою профессиональную карьеру он начал еще в Counter-Strike 1.6 играя за такие команды, как Virtus.pro и Natus Vincere.
				Украинская команда Na'Vi, которая была сформирована в декабре 2009 года оказалась наиболее стабильной. Её состав не менялся до 2013 года Edward дважды становился 
				чемпионом мира по версиям ESWC и WCG. В ноябре 2012 года команда перешла на CS:GO. 
				</div>
			</p>
		</div>
	</div>
	<div class = "copy">
		©Made by Raaay<br>
		all rights reserved
	</div>
</div>
</body>
</html>