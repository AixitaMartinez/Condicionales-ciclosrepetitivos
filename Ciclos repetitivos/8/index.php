<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números</title>
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
    <!-- Realice un programa que muestre los números del 50 al 0 de 3 en 3.-->
    <center>   
        <h1>programa que muestre los números del 50 al 0 de 3 en 3 <br> ⊙﹏⊙</h1>
    </center>
 
    <div class="form"> 
        <ul>
    <?php
    for ($i=50; $i >=0 ; $i-=3) { 
       echo "<li>".$i."</li>";
    }
    ?>
    </ul></div>
    
   
</body>
</html>