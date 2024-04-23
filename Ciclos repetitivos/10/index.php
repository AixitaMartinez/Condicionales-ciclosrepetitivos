<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Love Tester</title>
</head>
<style>
	*{
}
body{
    background-image: url(fondo.jpg);
	background-image: no-repeat;
	background-size: cover;
    font-family: Arial, Helvetica, sans-serif;
}
.contenedor{
	margin: auto;
	margin-top: 80px;
    max-width: 500px;
    padding: 50px;
    background-color: white;
    padding: 40px 80px 50px 80px;
    border-radius: 20px;
	border: 1px solid palevioletred;
}
.contenedor h1{
    text-transform: uppercase;
    color: palevioletred;
    text-align: center;
}

.inputarea input{
    border-color: palevioletred;
    border-radius: 10px;
    margin-bottom: 15px;
    margin-left: 6px;
    text-align: center;
    outline: none;
}
.form_submit{
    background-color: palevioletred;
    border: none;
    border-radius: 20px;
    text-align: center;
    padding: 10px 30px;
   cursor: pointer;
   color: white;

}
.form_submit:hover{
    transform: scale(1.1);
    transition: transform 0.2s ease-in-out;
}

.contenedor img{
    align-items: center;
}
h2{
    color: rgb(195, 83, 121);
    margin-top: 20px;
}
.uwu {
    position: fixed;
    bottom: 0;
    left: 0;
  }
  
  .uwu img {
    max-width: 100%;
    height: auto;
  }
  .uwu2 {
    position: fixed;
    bottom: -6px;
    right: 0;
  }
  
  .uwu2 img {
    max-width: 100%;
    height: auto;
  }
  
  .contenedor img:hover{
    transform:scale(1.1);
    transition: transform 0.2s ease-in-out;
 }
  
</style>
<body>
	
	<div class="contenedor">
		<form method="post">
			<center>
			<img src="pixel-cat.gif" width="70px" height="70px" class="imagen">
			</center>
		
		<h1>Love Tester</h1>
			
			<div class="inputarea" >
				<center>
				<input type="text" name="nombre1" required placeholder="Tú nombre">
				<input type="text" name="nombre2" required placeholder="Su nombre"><br>
				</center>
			
			</div>
			<center>
			<input type="submit" name="submit" value="Calcular" class="form_submit">
			</center>
		</form>
		<?php
		if(isset($_POST['submit'])){
			$nombre1 = $_POST['nombre1'];
			$nombre2 = $_POST['nombre2'];
			$love_score = rand(0, 100);

			echo "<h2>" .$nombre1 .", Tu amor con " .$nombre2. " es del " .$love_score."%</h2>";
			if ($love_score=="100") {
				echo '<p>Mejor cásense, están hechos el uno para el otro</p>';
				echo '<img src="perfecto.gif">';
			} else if($love_score<="99" && $love_score>="91"){
				echo '<p>Son su media naranja, ¡sigan así! buena pareja</p>';
				echo '<img src="pareja.gif">';
			}else if ($love_score<="90" && $love_score>="80") {
				echo '<p>Son compatibles, buena pareja🤯</p>';
				echo '<img src="kiss.gif">';
			} else if ($love_score<="79" && $love_score>="60") {
				echo '<p>Podría funcionar, hay química</p>';
				echo '<img src="reaccion.gif" width="200px" height="200px">';
			} else if ($love_score<="59" && $love_score>="50"){
				echo '<p>Mejores amigos tal vez(?</p>';
				echo '<img src="best-friend.gif">';
			} elseif ($love_score<="49" && $love_score>="30") {
				echo 'Aquí no hay química. Amigos tal vez</p>';
				echo '<img src="amigos.gif" width="200px" height="200px"><img src="friendzone2.gif" width="200px" height="200px">';
			} elseif ($love_score<="29" && $love_score>="10") {
				echo 'Mejor no se junten</p>';
				echo '<img src="10.gif">';
			}  elseif ($love_score<="9" && $love_score>="1") {
				echo 'Eso no sirve</p>';
				echo '<img src="nosi.gif">';
			} else {
				echo 'Eso está más muerto que el carajo, ni se miren';
				echo '<img src="0.gif">';
			}
			
		}
		?>
	</div>
	<div class="uwu">
	<img src="anime-dance.gif" width="120px" height="120px">
	</div>
	<div class="uwu2">
	<img src="pregunta.gif" width="120px" height="120px">
	</div>

</body>
</html>