
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
    *{
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
        }
        header{
        display: flex;
        justify-content: space-between;
        margin: 10px;
      
    }
        .container_tittle{
            padding: 15px 25px;
            background-color: rgb(255, 255, 255);
            margin-bottom: 50px;
            color: rgb(24, 24, 24);
            border: 1px solid black;
        }
        h3{
        font-size: 26px;
        color: #332874;
        text-align: center;
        padding-bottom: 0px;
        
        }
        body{
        background-color: #455cbc; 
        display: grid;
        }
        .form{
        background-color: white;
        margin: auto;
        width: 90%;
        max-width: 290px;
        padding: 50.5px 90px;
        border: 1px solid black;
        }
    </style>
<body>
<header class="container_tittle">
        <h3>Matrículas</h3>
        <h3>2023</h3>
    </header>
  <div class="form">
  <?php
   echo "<h3>Resultado:</h3> <br>";
  $promedio = $_POST['promedio'];
  $materias = $_POST['materias'];

  $costo_materia = $_POST['costo_materia'];

  if ($promedio >= 9) {
    $descuento = $costo_materia * $materias * 0.3;
    $total = ($costo_materia * $materias) - $descuento;
    $iva = 0;
    echo "¡Felicidades! Tiene decho al descuento del 30% <br>";
  } else {
    $total = $costo_materia * $materias;
    $iva = $total * 0.1;
    $total += $iva;
  }

  echo "El costo total de la colegiatura es: $" . ($total) . " (IVA incluido: $" . ($iva) . ")";
?>
  </div>
</body>
</html>