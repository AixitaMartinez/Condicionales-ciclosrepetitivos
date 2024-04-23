<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intervalo</title>
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
    <center><h1>Intervalo</h1></center>
    <div class="form">
    <ul>  <?php
    /*Con ciclo While
        $i = $num1;
        while ($num1 <= $num2) {
        $i++;
        echo $i;
        }
    */
    $num1 =$_POST['numero1'];
    $num2 =$_POST['numero2'];
    if ($num1<$num2) {
       
        for ($i=$num1; $i<=$num2 ; $i++) {
        echo '<li>'.$i. '</li> <br>';
    }
    } else  if ($num1>$num2){
        for ($i=$num1; $i>=$num2 ; $i--) {
            echo '<li>'.$i. '</li> <br>';
        }
    } else{
        echo "Son los mismos números";
    }
    
    ?>
    </ul>
    </div>

</body>
</html>