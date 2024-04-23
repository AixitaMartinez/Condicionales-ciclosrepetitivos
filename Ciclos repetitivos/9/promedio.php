<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ingresar calificaciones</title>
</head>
<style>
    *{
    font-family: Arial, Helvetica, sans-serif;
	font-size: 25px;
    }
    body{
        background-color: rgb(252, 207, 215);
    }
    h1{
    background-color: white;
    align-items: center;
    padding: 15px;
    margin: 20px;
    margin-right: 40px;
    margin-left: 40px;
    border-radius: 45px;
    border: 2px solid pink;
    max-width: 500px;
    color: rgb(170, 106, 118);
	font-size: 40px;
    }

    .form{
    background-color: white;;
    margin: auto;
    max-width: 400px;
    padding: 25px;
    border-radius: 35px;
    border: 2px solid pink;
	padding-top: 28px;
    }
	.input{
        background-color: rgb(247, 213, 229);
        border-radius: 6px;
        border: none;
        margin-top: 5px;
        justify-content: center;
        align-items: center;
		padding: 4px;
		margin-top: 9px;
		margin-bottom: 9px;
    }
    .submit{
        background-image: linear-gradient(95deg,rgb(182, 145, 170), rgb(208, 123, 157)); 
        border: none;
        padding: 7px 16px;
        border-radius: 13px;
        color: aliceblue;
        cursor: pointer;
		margin-bottom: 15px; 
    }
    .submit:hover{
    transform: scale(1.1);
    transition: transform 0.2s ease-in-out;
   }
</style>
<body>

	<?php
		$num_calificaciones = $_POST['num_calificaciones'];
		echo "<center><h1>Ingresar $num_calificaciones calificaciones</h1></center>";
		echo " <div class='form'> <form method='post' action='calcular_promedio.php'>";
		for ($i=1; $i<=$num_calificaciones; $i++) {
			echo " <center> <label>Calificación $i:</label>";
			echo "<input type='number' name='calificaciones[]' required class='input'>";
			echo "<br>";
		}
		echo "<br>";
		echo "<input type='submit' value='Calcular Promedio' class='submit'> </center>";
		echo "</form>";
		echo "</div>";
	?>
	
</body>
</html>
