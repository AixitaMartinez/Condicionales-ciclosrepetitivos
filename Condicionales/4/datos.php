
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
      background-color: black;
      color: white;
      font-family: Arial, sans-serif;
      font-size: 24px;
      text-align: center;
    }

    h1 {
      text-align: center;
      font-size: 2.5em;
      margin-top: 50px;
    }

    .form {
      width: 50%;
      margin: 50px auto;
      text-align: center;
      border: 5px;
      border-color: pink;
    }

  </style>
<body>
    <div class="form">
    <?php
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    if ($cantidad<=0) {
    echo 'EL valor que digito es incorrecto.';
    } else if ($cantidad>="3") {
        $total1= $precio*$cantidad;
        $desc1 = $total1*0.20;
        $desctotal = $total1-$desc1;
        echo 'La cantidad de camisas que va a comprar es: '. $cantidad. '<br>';
        echo 'Usted tiene derecho a un descuento del 20% <br>';
        echo 'El total a pagar sin descuento: '. $total1. '<br>';
        echo 'El total a pagar con descuento incluido: '. $desctotal;
    } else {
        $total2= $precio*$cantidad;
        $desc2 = $total2*0.10;
        $desctotal2 = $total2-$desc2;
        echo 'La cantidad de camisas que va a comprar es: '. $cantidad. '<br>';
        echo 'Usted tiene derecho a un descuento del 10% <br>';
        echo 'El total a pagar sin descuento: '. $total2. '<br>';
        echo 'El total a pagar con descuento incluido: '. $desctotal2;
    }
    ?>
    </div>

</body>
</html>