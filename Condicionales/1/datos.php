
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
        margin-top: 3%;
        }
        h3{
         padding-bottom: 2px;
         font-size: 30px;
         color: #7878bd;
         text-align: center;
        }
        body{
        background:  rgba(180, 180, 207);
        }
        
        .form{
        background-color: rgb(255, 255, 255);
        margin: auto;
        width: 90%;
        max-width: 290px;
        padding: 40px 40px 60px 40px;
        border-radius: 8px;
        }
       
    </style>
<body>
    <div class="form">
    <?php
    $n1 = $_POST ['n1'];
    $n2 = $_POST ['n2'];
    $n3 = $_POST ['n3'];

    $opcion =$_POST['opcion'];
    echo '<h3>🐣 Opcion: '. $opcion. ' 🐣<br> </h3>';
    
    if ($opcion==1) {
    $suma = $n1 + $n2 + $n3;
    echo 'El resultado de la suma es: '. $suma;
    } else if ($opcion==2) {
        $resta = $n1 - $n2 - $n3;
        echo 'El resultado de la resta es: '. $resta;
    } else if ($opcion==3) {
        $multi = $n1 * $n2 * $n3;
        echo 'El resultado de la multiplicación es: '. $multi;
    } else if ($opcion==4){
        $divi = $n1 / $n2 / $n3;
        echo 'El resultado de la division es: '. $divi;
    }

?>
    </div>
</body>
</html>
