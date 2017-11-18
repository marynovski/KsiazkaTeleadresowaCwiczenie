<?php

require_once "rfile.php";

session_start();

?>

<!Doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <style>
        
        .form-label{
            display: block;
        }
        
        .error{
            color: red;
        }
		
		.good{
			color: green;
		}
    </style>
</head>
<body>

<a href="formularz.php" title="Wpisz dane do książki">Dodaj nowe dane</a>

<?php
	createTable();
?>

</body>
</html>