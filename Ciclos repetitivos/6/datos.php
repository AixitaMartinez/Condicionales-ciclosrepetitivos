<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intervalo y suma</title>
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
</style>
<body>
    <center><h1>Resultado:</h1></center>
   <div class="form">
   <?php
    $num1 =$_POST['numero1'];
    $num2 =$_POST['numero2'];
   
    if ($num1>$num2) {
        $suma = 0;
        for ($i=$num1; $i>=$num2 ; $i--) {
            $suma += $i;
        }
        echo "La suma de los números comprendidos entre " .$num1 . " y ".$num2." es: ". $suma;
    } else{
        $suma = 0;
        for ($i=$num1; $i<=$num2 ; $i++) {
            $suma += $i;
        }
        echo "La suma de los números comprendidos entre " .$num1 . " y ".$num2." es: ". $suma;
    }

    ?>
    
  

   </div>
</body>
</html>