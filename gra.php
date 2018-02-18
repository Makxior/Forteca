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
	<div class="login">
		<?php
			;
		?>
	</div>
	
<?php

	echo "<p>Witaj ".$_SESSION['user'].'! [ <a href="logout.php">Wyloguj się!</a> ]</p>';
	echo "<p><b>Drewno</b>: ".$_SESSION['drewno'];
	echo " | <b>Kamień</b>: ".$_SESSION['kamien'];
	echo " | <b>Zboże</b>: ".$_SESSION['zboze']."</p>";
	
	echo "<p><b>E-mail</b>: ".$_SESSION['email'];
	echo "<br /><b>Data wygaśnięcia premium</b>: ".$_SESSION['dnipremium']."</p>";
	
		
	$dataczas = new DateTime();
	
	echo "Data i czas serwera: ".$dataczas->format('Y-m-d H:i:s')."<br>";
	
	$koniec = DateTime::createFromFormat('Y-m-d H:i:s', $_SESSION['dnipremium']);
	
	$roznica = $dataczas->diff($koniec);
	
	if($dataczas<$koniec)
	echo "Pozostało premium: ".$roznica->format('%d dni, %h godz, %i min, %s sek');
	else
	echo "Premium nieaktywne od: ".$roznica->format('%d dni, %h godz, %i min, %s sek');	
	
?>

</body>
</html>