<?php
function createTable(){
	$documentRoot = $_SERVER['DOCUMENT_ROOT'];

	$plik = fopen("$documentRoot/teleksiazka/teleksiazka.txt", 'rb');

	if(!$plik){

		$_SESSION['readFileError'] = '<span class="error">Nie udało się otworzyć pliku!</span>';
		header("location: tabela.php");
		exit();
	}
	else{

		$_SESSION['tabela'] = '<table border="1" cellpadding="10">';
		$_SESSION['tabela'] .= '<tr><th>Imię</th><th>Nazwisko</th><th>Adres</th><th>Miasto</th><th>Kod Pocztowy</th><th>Nr tel</th><th>E-mail</th></tr>';

		while(!feof($plik)){
			$_SESSION['tabela'] .= "<tr>";
			
			for($i=0; $i<7; $i++){
			
				$_SESSION['tabela'] .= "<td>";
				$_SESSION['tabela'] .= fgets($plik, 999);
				$_SESSION['tabela'] .= "</td>";
			
			}
			
			
			$_SESSION['tabela'] .= "</tr>";
		}
		
		$_SESSION['tabela'] .= "</table>";
		echo $_SESSION['tabela'];
	}
}

?>