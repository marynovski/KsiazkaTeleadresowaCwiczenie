<?php

session_start();

$documentRoot = $_SERVER['DOCUMENT_ROOT'];

$plik = @fopen("$documentRoot/teleksiazka/teleksiazka.txt", 'ab');

if(!$plik){
	$_SESSION['error'] = '<span class="error">Nie udało się zapisać danych - spróbuj ponownie</span>';
	header("location: formularz.php");
	exit();
}
else{

	$dane = $_SESSION['dane'];
	unset($_SESSION['dane']);
	
	flock($plik, LOCK_EX);
	fwrite($plik, $dane, strlen($dane));
	flock($plik, LOCK_UN);
	fclose($plik);
	
	$_SESSION['good'] = '<span class="good">Dane zostały zapisane w pliku!</span>';
	header("location: formularz.php");
	exit();
}


?>