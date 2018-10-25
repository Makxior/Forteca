<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: gra.php');
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
	<link rel="stylesheet" href="main.css">
</head>

<body>
	<div class="container">
		<div id="logo">
			<a href="index.php">
				<img src="https://images.cooltext.com/5052474.png" width="472" height="126" alt="FORTECA" />
			</a>
		</div>
			<div class="link">	
				<a href="rejestracja.php" style="display:block">Rejestracja - załóż darmowe konto!</a>
			</div>
		<div id="main">
			<div id="pion" class ="jumbotron">
			Tutaj beda linki do roznych ciekawych rzeczy, ale to pozniej xd
			</div>
			<div id="newsy" >
			Obecnie trwaja prace nad gra
			<a href="Waz.html" style="display:block; color:black">Zagraj w super gierke</a>
			<a href="2strona.html" style="display:block">Wejdz na nasza druga strone</a>

			</div>
			<div id="logowanie" class ="jumbotron" >
				<h4>LOGOWANIE</h4> 
				<form action="zaloguj.php" method="post">
					Login: <br /> <input type="text" name="login" style="width:200px; background-color:khaki" /> <br />
					Hasło: <br /> <input type="password" name="haslo" style="width:200px; background-color:khaki"/> <br /><br />
					<button class="btn btn-info btn-lg" type="submit">Zaloguj się</button>
				</form>
				<?php
					if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
				?>
			</div>
			
		</div>
		<div id="stopka">
		TWORCA: GRZEGORZ DZIKOWSKI WSZYSTKIE PRAWA ZASTRZEZONE 2017
		</div>
	</div>
	

</body>
</html>