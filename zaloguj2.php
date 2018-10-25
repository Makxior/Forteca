<?php

	session_start();

	if (isset($_POST['czek'])) {
		header('Location: index.php');
	  } else {
		header('Location: rejestracja.php');
	  }
	
?>