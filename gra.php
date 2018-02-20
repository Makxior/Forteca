<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Forteca - gra przeglądarkowa</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="gra.css">
</head>

<body>
	<div id="login">
	
		<center>Witaj <?=$_SESSION['user'];?><a href="logout.php">	</a></center>
	
	</div>
	<div class="wrapper">
		<div class="nav">
			<ol>
				<li><a href="gra.php">Strona główna</a></li>
				<li><a href="#">Twoje konto</a>
					<ul>
						<li><a href="#">Zmiana hasła</a></li>
						<li><a href="#">Zmiana e-mail</a></li>
						<li><a href="#">Usun konto</a></li>
					</ul>
				</li>
				<li><a href="#">Strefa premium</a>
					<ul>
						<li><a href="#">Twoje premium</a></li>
						<li><a href="#">Doladuj konto</a></li>
					</ul>
				</li>
				<li><a href="#">Kontakt</a>
				</li>
				<li><a href="logout.php">Wyloguj</a></li>
			</ol>
		
		</div>
	

<br/>

</body>
</html>