<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
</head>
<style>
    body {
      background-color: black;
      color: white;
      font-family: Arial, sans-serif;
    }

    h1 {
      text-align: center;
      font-size: 25px;
      margin-top: 10px;
    }
    p {
      text-align: center;
      font-size: 24px;
      margin-top: 50px;
    }
    td{
        font-size: 30px;
    }
  </style>
<body>
    <center>
    <table border="2">
  
    <?php
    $numero = $_POST['numero'];
    for ($i=1; $i <= 11 ; $i++) { 
       $resultado = $numero * $i;
       echo "<tr> <td>".$numero. "</td><td> x </td> <td> ".$i. "</td> <td> = </td> <td>" .$resultado. "</td></tr><br> ";
    }
    ?>
    </table>
    </center>
    

</body>
</html>