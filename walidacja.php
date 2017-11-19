<?php

session_start();

if(!isset($_POST['imie'])){

	header("location: formularz.php");
	exit();

}
else{

//imie, nazwisko, adres, miasto, kodpocztowy, nrtel, email  /*** SPRAWDZANIE CZY UŻYTKOWNIK PODAŁ DANE ***/

$blad = false;

if(empty($_POST['imie'])){
	$_SESSION['emptyimie'] = '<span class="error">Musisz podać imię!</span>';
	$blad = true;
}

if(empty($_POST['nazwisko'])){
	$_SESSION['emptynazwisko'] = '<span class="error">Musisz podać nazwisko!</span>';
	$blad = true;
}
if(empty($_POST['adres'])){
	$_SESSION['emptyadres'] = '<span class="error">Musisz podać adres!</span>';
	$blad = true;
}
if(empty($_POST['miasto'])){
	$_SESSION['emptymiasto'] = '<span class="error">Musisz podać miasto!</span>';
	$blad = true;
}
if(empty($_POST['kodpocztowy']) || empty($_POST['kodpocztowy2'])){
	$_SESSION['emptykodpocztowy'] = '<span class="error">Musisz podać kodpocztowy!</span>';
	$blad = true;
}
if(empty($_POST['nrtel'])){
	$_SESSION['emptynrtel'] = '<span class="error">Musisz podać nr tel!</span>';
	$blad = true;
}
if(empty($_POST['email'])){
	$_SESSION['emptyemail'] = '<span class="error">Musisz podać email!</span>';
	$blad = true;
}
//JESLI NIE PODAL KTOREJKOLWIEK SKRYPT PRZENOSI GO DO FORMULARZA GDZIE WYSWIETLA STOSOWNE KOMUNIKATY

if($blad){
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