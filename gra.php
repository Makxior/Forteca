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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="gra.css">
</head>

<body>	
	<div id="navbar">
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
	<div class="zasoby">
			<div id ="zloto">Zloto <strong><?=$_SESSION['zloto']?></strong></div>
			<div id ="drewno">Drewno <strong><?=$_SESSION['drewno']?></strong></div>
			<div id ="kamien">Kamien <strong><?=$_SESSION['kamien']?></strong></div>
			<div id ="zboze">Zboze <strong><?=$_SESSION['zboze']?></strong></div>
	</div>
	<div class="gierka">
		Tutaj bedzie twoj zamek
		<button type="button" class="btn btn-primary">PLAY</button>
    <button type="button" class="btn btn-secondary">THIS</button>
    <button type="button" class="btn btn-success">FCKING</button>
    <button type="button" class="btn btn-danger">DESPACITO</button>
    <button type="button" class="btn btn-warning">ALEXIA</button>
	</div>
	
	<div class="budynki">
		<div id="obramowanie"><div id="domek"></div><div id="domekOpis">Drewno[50]</div> </div>
	</div>
	<div class="jednostki">
		Tutaj beda mozliwe wojsko
	</div>
	
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
	

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>