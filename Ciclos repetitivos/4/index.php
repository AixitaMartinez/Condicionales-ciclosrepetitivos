<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
</head>
<style>
    body {
      background-color: rgb(242, 202, 224);
      color: #725766;
      font-family: Arial, sans-serif;
    }

        h1 {
      text-align: center;
      font-size: 39px;
     margin-bottom: 27px;
    }

    .form {
      width: 50%;
      margin: 50px auto;
      text-align: center;
      margin-bottom:45px;
    }

    label {
      display: block;
      margin: 20px 0;
      font-size: 26px;
    }

    input[type="number"] {
      font-size: 21px;
      padding: 9px;
      border: none;
      background-color: #fefef1;
      color: rgb(150, 149, 133);
      max-width: 50px;
      border-radius: 20px;
    }

    input[type="submit"] {
      font-size: 15px;
      padding: 10px;
      border: none;
      margin-top: 8px;
      background-color: #f99be4;
      color: white;
      cursor: pointer;
      border-radius: 20px;
    }

    input[type="submit"]:hover {
      background-color: #da78da;
      transform: scale(1.1);
      transition: transform 0.2s ease-in-out;
    }

    p {
      text-align: center;
      font-size: 24px;
      margin-top: 50px;
    }
    table{
      border-collapse: collapse; 
    }
   td,th{
    padding-left:8px;
    padding-right:8px;
    padding-top: 3px;
    padding-bottom: 3px;
   }
  </style>
<body>
    <!--Escriba un programa en Php que solicite un número y muestre la tabla de multiplicar correspondiente-->
    	<h1>Tabla de multiplicar:</h1>
	<form method="post" class="form">
       <p> Digite un número </p> <input type="number" name="numero">
       <input type="submit" value="Tabla">
    </form>
   <center>
    <?php
    if (isset($_POST["numero"])) {
      echo "<table border='2'>";
      $numero = $_POST['numero'];
      echo "<h1>Tabla de multiplicar del número: ".$numero."</h1>";
    for ($i=1; $i <= 11 ; $i++) { 
       $resultado = $numero * $i;
       echo "<tr> <td>".$numero. "</td><td> x </td> <td> ".$i. "</td> <td> = </td> <td>" .$resultado. "</td></tr> ";
    }
    echo "  </table>";
    }
    ?>
  
    </center>
</body>
</html>