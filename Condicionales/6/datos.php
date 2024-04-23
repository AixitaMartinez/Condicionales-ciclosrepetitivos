
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>¿Ganaste o perdiste?</title>
</head>
<style>
    *{
        font-family: Arial, Helvetica, sans-serif;
        margin-top: 3%;
        }
        h3{
         padding-bottom: 2px;
         font-size: 25px;
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
      <h3>¡Resultados!</h3>
   <?php
$r1= $_POST['r1'];
$r2= $_POST['r2'];
$r3= $_POST['r3'];
$c=0;
$i=0;
if ($r1=="SI") {
   echo '¡La respuesta  1. es correcta! <br>';
   $c+=1;
} else {
   $i+=1;
}

if ($r2=="SI") {
    echo '¡La respuesta 2. es correcta! <br>';
    $c+=1;
 } else {
    $i+=1;
 }

 if ($r3=="SI") {
    echo '¡La respuesta 3. es correcta! <br>';
    $c+=1;
 } else {
    $i+=1;
 }

 if ($c==3) {
    echo '¡Felicitaciones! las preguntas correctas: ' . $c;
 } else {
    echo '¡Fallaste! :( Cantidad de preguntas incorrectas: ' . $i;
 }
?>
   </div>
</body>
</html>