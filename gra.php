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
			<div id ="zloto">Zloto  <?=$_SESSION['zloto']?></div>
			<div id ="drewno">Drewno  <?=$_SESSION['drewno']?></div>
			<div id ="kamien">Kamien  <?=$_SESSION['kamien']?></div>
			<div id ="zboze">Zboze <?=$_SESSION['zboze']?></div>
	</div>
	<div class="gierka">
		Tutaj bedzie twoj zamek
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
	


</body>
</html>