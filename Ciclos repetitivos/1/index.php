<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>números</title>
</head>
<style>
    *{
    font-family: Arial, Helvetica, sans-serif;
    }
    body{
        background-color: rgb(252, 207, 215);
    }
    h1{
    background-color: rgb(249, 227, 239);
    align-items: center;
    padding: 10px;
    margin: 20px;
    margin-right: 40px;
    margin-left: 40px;
    border-radius: 45px;
    border: 1px solid rgb(242, 202, 224);
    max-width: 500px;
    color: rgb(170, 106, 118);
    }

    .form{
     background-color: rgb(249, 227, 239);
    margin: auto;
    max-width: 400px;
    padding: 16px;
    border-radius: 45px;
    border: 1px solid rgb(242, 202, 224);
    }
</style>
<body>
    <center>
    <h1>🐷Números del 1 al 300:🐷</h1>
    </center>
    	
        <div class="form">
        <ul>
		<?php
        for ($i=1; $i <=300 ; $i++) { 
            echo "<li>".$i."</li>";
        }
        ?>
	    </ul>
        </div>
	
</body>
</html>