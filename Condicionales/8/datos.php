<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra</title>
</head>
<style>
    *{
        font-family: Arial, Helvetica, sans-serif;
        margin-top: 3%;
        }
        h3{
         padding-bottom: 2px;
         font-size: 25px;
         color:  rgb(187, 79, 91);
         text-align: center;
         text-transform: bold;
         font-size: 35px;
        }
        body{
        background:  rgb(230, 71, 89);
        }
        
        .form{
        background-color: rgb(255, 255, 255);
        margin: auto;
        width: 90%;
        max-width: 290px;
        padding: 40px 40px 20px 40px;

        }
    
      
        p {
        color: #ba9191;
        font-size: 14px;
        display: block;
        padding-bottom: 0px;
        padding-left: 20px;
        }
    </style>
<body>
    <div class="form">
    <?php
$valor = $_POST['valor'];
$cantidad = $_POST['kilos'];
$sub = $cantidad * $valor;

if ($cantidad>0 and $cantidad<=2) {
    echo "EL descuento es del 0% <br>";
    echo "El total a pagar es ". $sub;
} else{
    if ($cantidad>=2.1 and $cantidad<=5) {
        $desc1 = $sub * 0.10;
        $total1= $sub - $desc1;
        echo 'El descuento es del 10% <br>';
        echo "El subtotal es ". $sub. "<br>";
        echo "El total a pagar es ". $total1;
    } else {
        if ($cantidad>=5.1 and $cantidad<=10) {
            $desc2 = $sub * 0.15;
            $total2= $sub - $desc2;
            echo 'El descuento es del 15% <br>';
            echo "El subtotal es ". $sub. "<br>";
            echo "El total a pagar es ". $total2;
        } else {
            $desc3 = $sub * 0.20;
            $total3= $sub - $desc3;
            echo 'El descuento es del 20% <br>';
            echo "El subtotal es ". $sub. "<br>";
            echo "El total a pagar es ". $total3;
            
        }
    }
}
?>
    </div>
</body>
</html>