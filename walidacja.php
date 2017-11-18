<?php

session_start();

if(!isset($_POST['imie'])){

	header("location: formularz.php");
	exit();

}
else{

//imie, nazwisko, adres, miasto, kodpocztowy, nrtel, email  /*** SPRAWDZANIE CZY UŻYTKOWNIK PODAŁ DANE ***/

if(empty($_POST['imie']))
	$_SESSION['emptyimie'] = '<span class="error">Musisz podać imię!</span>';

if(empty($_POST['nazwisko']))
	$_SESSION['emptynazwisko'] = '<span class="error">Musisz podać nazwisko!</span>';

if(empty($_POST['adres']))
	$_SESSION['emptyadres'] = '<span class="error">Musisz podać adres!</span>';

if(empty($_POST['miasto']))
	$_SESSION['emptymiasto'] = '<span class="error">Musisz podać miasto!</span>';

if(empty($_POST['kodpocztowy']) || empty($_POST['kodpocztowy2']))
	$_SESSION['emptykodpocztowy'] = '<span class="error">Musisz podać kodpocztowy!</span>';

if(empty($_POST['nrtel']))
	$_SESSION['emptynrtel'] = '<span class="error">Musisz podać nr tel!</span>';

if(empty($_POST['email']))
	$_SESSION['emptyemail'] = '<span class="error">Musisz podać email!</span>';

//JESLI NIE PODAL KTOREJKOLWIEK SKRYPT PRZENOSI GO DO FORMULARZA GDZIE WYSWIETLA STOSOWNE KOMUNIKATY

if(empty($_POST['imie']) || empty($_POST['nazwisko']) || empty($_POST['adres']) || empty($_POST['miasto']) || empty($_POST['kodpocztowy']) || empty($_POST['nrtel']) || empty($_POST['email'])){

	header("location: formularz.php");
	exit();
}

//formatowanie do zapisania w pliku

$kodpocztowy = $_POST['kodpocztowy'].'-'.$_POST['kodpocztowy2'];

$_SESSION['dane'] = $_POST['imie']."\r\n";
$_SESSION['dane'] .= $_POST['nazwisko']."\r\n";
$_SESSION['dane'] .= $_POST['adres']."\r\n";
$_SESSION['dane'] .= $_POST['miasto']."\r\n";
$_SESSION['dane'] .= $kodpocztowy."\r\n";
$_SESSION['dane'] .= $_POST['nrtel']."\r\n";
$_SESSION['dane'] .= $_POST['email']."\r\n";


//zapis do pliku

header("location: wfile.php");




}

?>