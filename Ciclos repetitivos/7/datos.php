
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Resultado</title>
	</head>
	<style>
    *{
    font-family: Arial, Helvetica, sans-serif;
    }
    body{
        background-color: rgb(252, 207, 215);
    }
    h1{
    background-color: white;
    align-items: center;
    padding: 10px;
    margin: 20px;
    margin-right: 40px;
    margin-left: 40px;
    border-radius: 45px;
    border: 2px solid pink;
    max-width: 500px;
    color: rgb(170, 106, 118);
    }

    .form{
    background-color: white;;
    margin: auto;
    max-width: 400px;
    padding: 16px;
    border-radius: 45px;
    border: 2px solid pink;
    }
</style>
	<body>
		<center><h1>Resultado:</h1></center>
		<div class="form">
		<?php
		$numero1 = $_POST["numero1"];
		$numero2 = $_POST["numero2"];
		$suma_pares = 0;
		$suma_impares = 0;
		var_dump($numero1);
		var_dump($numero2);
		if ($numero1 > $numero2) {
			$suma_pares = 0;
			$suma_impares = 0;
			for ($i = $numero1; $i >= $numero2; $i--)  {
				if ($i % 2 == 0) {
					$suma_pares += $i;
				} else {
					$suma_impares += $i;
				}
			}
			echo "<p>La suma de los números pares entre ".$numero1." y ".$numero2." es: ".$suma_pares."</p>";
			echo "<p>La suma de los números impares entre ".$numero1." y ".$numero2." es: ".$suma_impares. "</p>";
		} else {
			$suma_pares = 0;
			$suma_impares = 0;
			for ($i = $numero1; $i <= $numero2; $i++)  {
				if ($i % 2 == 0) {
					$suma_pares += $i;
				} else {
					$suma_impares += $i;
				}
			}
			echo "<p>La suma de los números pares entre ".$numero1." y ".$numero2." es: ".$suma_pares."</p>";
			echo "<p>La suma de los números impares entre ".$numero1." y ".$numero2." es: ".$suma_impares. "</p>";
		}
		
		
		?>
		</div>
	</body>
	</html>