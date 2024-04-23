
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


  p {
    text-align: center;
    font-size: 24px;
    margin-top: 50px;
  }
</style>
<body>
    <div class="form">
        <h1>Resultado</h1>
    <?php
$precio= $_POST["precio"];
$marca = $_POST["marca"];
$i =0;
if($precio>=2000){
$descuento=$precio*0.10;
$i+=10;

}
//si la marca es Nosy tiene un descuento del 5%.
if ($marca=="Nosy" or $marca=="NOSY"){
    $descuento=$descuento*0.5;
    $i+=5;
}
$total = $precio - $descuento;
$iva = $total*0.19;
$totaliva = $total - $iva;
echo "El total a pagar es: ". $precio."<br>";
echo "El descuento es de: ". $i."<br>";
echo "El total a pagar con iva incluido es: ". $totaliva."<br>";
?>
    </div>
</body>
</html>