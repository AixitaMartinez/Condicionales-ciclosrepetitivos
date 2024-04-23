<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Promedio de Calificaciones</title>
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
	p{
		font-size: 20px;
	}
</style>
<body>
	<center><h1>Promedio (❁´◡`❁)</h1></center>
	<div class="form">
	<?php
		$calificaciones = $_POST['calificaciones'];
		$num_calificaciones = count($calificaciones);
		$suma = 0;
		for ($i = 0; $i < $num_calificaciones; $i++) {
			$suma += $calificaciones[$i];
		}
		$promedio = $suma / $num_calificaciones;
		echo "<p>Promedio de Calificaciones: <b>".$promedio."</b></p>";
	?>
	</div>
	
</body>
</html>
