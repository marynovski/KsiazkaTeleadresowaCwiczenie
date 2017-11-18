<?php

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
	<?php
	
	if(isset($_SESSION['good'])){
		
		echo $_SESSION['good'];
		unset($_SESSION['good']);
	}
	elseif(isset($_SESSION['error'])){
		
		echo $_SESSION['error'];
		unset($_SESSION['error']);
	}
	
	?>
	<a href="tabela.php" title="Tabela z danymi">Tabela z danymi</a>
    <h1>Wpisz dane do zapisania:</h1>
    <form action="walidacja.php" method="post">
        <label class="form-label" for="imie">Imię:</label>
        <input type="text" name="imie" id="imie">
        
        <br>
        <?php
			if(isset($_SESSION['emptyimie'])){
			
				echo $_SESSION['emptyimie'];
				unset($_SESSION['emptyimie']);
			}
		?>
        <br><br>
        
        <label class="form-label"  for="nazwisko">Nazwisko:</label>
        <input type="text" name="nazwisko" id="nazwisko">
        
        <br>
        <?php
			if(isset($_SESSION['emptynazwisko'])){
			
				echo $_SESSION['emptynazwisko'];
				unset($_SESSION['emptynazwisko']);
			}
		?>
        <br><br>
        
        <label class="form-label"  for="adres">Adres:</label>
        <input type="text" name="adres" id="adres">
        
        <br>
         <?php
			if(isset($_SESSION['emptyadres'])){
			
				echo $_SESSION['emptyadres'];
				unset($_SESSION['emptyadres']);
			}
		?>
        <br><br>
        
        <label class="form-label"  for="miasto">Miasto:</label>
        <input type="text" name="miasto" id="miasto">
        
        <br>
         <?php
			if(isset($_SESSION['emptymiasto'])){
			
				echo $_SESSION['emptymiasto'];
				unset($_SESSION['emptymiasto']);
			}
		?>
        <br><br>
        
        <label class="form-label"  for="kodpocztowy">Kod pocztowy:</label>
        <input type="text" name="kodpocztowy" id="kodpocztowy" maxlength="2" size="1"> - 
		<input type="text" name="kodpocztowy2" maxlength="3" size="3">
        
        <br>
         <?php
			if(isset($_SESSION['emptykodpocztowy'])){
			
				echo $_SESSION['emptykodpocztowy'];
				unset($_SESSION['emptykodpocztowy']);
			}
		?>
        <br><br>
        
        <label class="form-label"  for="nrtel">Nr tel.:</label>
        <input type="tel" name="nrtel" id="nrtel" maxlength="9">
        
        <br>
         <?php
			if(isset($_SESSION['emptynrtel'])){
			
				echo $_SESSION['emptynrtel'];
				unset($_SESSION['emptynrtel']);
			}
		?>
        <br><br>
        
        <label class="form-label"  for="email">E-mail:</label>
        <input type="email" name="email" id="email">
        
        <br>
         <?php
			if(isset($_SESSION['emptyemail'])){
			
				echo $_SESSION['emptyemail'];
				unset($_SESSION['emptyemail']);
			}
		?>
        <br><br>
        
        <input type="submit" value="Zapisz dane">
        <input type="reset" value="Wyczyść dane">
        
    </form>
</body>
</html>