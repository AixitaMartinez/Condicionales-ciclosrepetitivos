
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
        font-family:sans-serif
    }
    h3{
    font-family: Arial, Helvetica, sans-serif;
    color: rgb(181, 122, 153);
    font-style: oblique;
    text-align: center;
    }
    body{
    background-image: linear-gradient(95deg,rgb(182, 145, 170), rgb(208, 123, 157)); 
    display: grid;
    height: 300px;
    }
    .form{
        background-color: white;
        margin: auto;
        width: 90%;
        max-width: 400px;
        padding: 5.5em 5em;
        border-radius: 45px;
    }
    .tittle{
        padding: 18px;
        background-color: white;
        margin: auto;
        margin-bottom: 20px;
        border-radius: 25px;
    }
</style>
<body>
    <div class="tittle"> <h3>Resultado</h3> </div>
    <div class="form">
    <?php
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2']; 
    $n3 = $_POST['n3'];
    if ($n1<0 or $n1>5) {
        echo 'El valor de la nota 1 es incorrecto';
    } else if ($n2<0 or $n2>5){
        echo 'El valor de la nota 2 es incorrecto';
    } else if ($n3<0 or $n3>5){
        echo 'El valor de la nota 3 es incorrecto';
    }else {
        $prom = ($n1+$n2+$n3)/3;
        if ($prom<=3){
            echo 'El promedio total es: '.$prom. '<br>';
            echo 'Pero usted no aprobó :C';
        } else if  ($prom>3 and $prom<5){
            echo 'El promedio total es: '.$prom. '<br>';
            echo 'Usted ha aprobado.';
        } else {
            echo 'El promedio total es: '.$prom. '<br>';
            echo 'Usted ha aprobado. ¡Felicidades! :D';
        }
    }
?>
    </div>
</body>
</html>