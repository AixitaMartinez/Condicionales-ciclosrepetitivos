
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        <style>
        body{
        font-family: Arial, Helvetica, sans-serif;
        margin-top: 15px;
        }
        h3{
        font-size: 26px;
        color: #b52c4c;
        text-align: center;
        padding-bottom: 0px;
        }
        body{
        background-color: #e9325d; 
        display: grid;
        }
        .form{
        background-color: white;
        margin: auto;
        width: 90%;
        max-width: 260px;
        padding: 50.5px 90px;
        border-radius: 50px;
        }
        
    </style>
<body>
    <div class="form">
        <h3>COMPRA</h3>
    <?php
    $contra = $_POST['contra'];
    $nombre = "botas";
    
    $precio = 152000;
    if ($contra>"99") {
        echo "La contraseña es invalida <br>";
    }
    if ($contra=="01") {
        $desc1 = $precio * 0.10;
        $total1 = $precio - $desc1;
        echo 'Nombre del artículo: '.$nombre. '<br>';
        echo 'Precio original: '.$precio. '<br>';
        echo 'Descuento del 10%: '.$desc1. '<br>';
        echo 'Precio total del artículo con descuento: '.$total1. '<br>';
    } else if ($contra=="02") {
        $desc2 = $precio * 0.20;
        $total2 = $precio - $desc2;
        echo 'Nombre del artículo: '.$nombre. '<br>';
        echo 'Precio original: '.$precio. '<br>';
        echo 'Descuento del 20%: '.$desc2. '<br>';
        echo 'Precio total del artículo con descuento: '.$total2. '<br>';
    } else {
        echo 'Nombre del artículo: '.$nombre. '<br>';
        echo 'Precio '.$precio. '<br>';
    }
        $tallas = $_POST['opciones'];
        echo 'Talla: '.$tallas . '<br>';

    ?>
    </div>
</body>
</html>