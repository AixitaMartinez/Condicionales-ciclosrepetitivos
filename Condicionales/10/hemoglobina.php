<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anemia</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

<header>
    <nav class="navb">
        <div>MediVenus</div>
        <ul class="navb_list">
                <li><a href="index.html" class="list">Inicio</a></li>
                <li><a href="http://localhost/sena/Condicionales/10/hemoglobina.php" class="list">Anemia</a></li>
                <li><a href="" class="list">Nosotros</a></li>
            </ul>
    </nav>
</header>

<div class="form">
    <form method="post">
        <h1>Verificar anemia</h1>
        <p>Edad:</p>
        <select name="edad">
            <option value="0-1"> (0-1) mes </option>
            <option value="2-6"> (2-6) meses </option>
            <option value="7-12"> (7-12) meses</option>
            <option value="1-5"> (1-5) años</option>
            <option value="6-10"> (6-10) años</option>
            <option value="11-15"> (11-15) años</option>
            <option value="15"> Mayor de 15 años</option>
        </select>
        <br>  <br>
        <p>Sexo:</p> 
        <select name="sexo">
            <option value="femenino">Femenino</option>
            <option value="masculino">Masculino</option>
        </select>
        <br>  <br>
        <p>Nivel de hemoglobina</p> <input type="number" name="hemoglobina" step="0.1" placeholder="hemoglobina en sangre" required>
        <br>
        <input type="submit" value="Determinar" class="form_submit">
        <br> <br>
    </form>
    <?php
    /*EDAD NIVEL HEMOGLOBINA
    0 - 1 mes 13 - 26 g%
    > 1 y < = 6 meses 10 - 18 g%
    > 6 y < = 12 meses 11 - 15 g%
    > 1 y < = 5 años 11.5 - 15 g%GFPI-F-135 V01
    > 5 y < = 10 años 12.6 - 15.5 g%
    > 10 y < = 15 años 13 - 15.5 g%
    mujeres > 15 años 12 - 16 g%
    hombres > 15 años 14 - 18 g%*/
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "<h1>Resultado:</h1>";
    $edad = $_POST['edad'];
    $sexo= $_POST['sexo'];
    $hemoglobina = $_POST['hemoglobina'];
    if ($edad=="0-1") {
        echo "Edad de entre: (". $edad. ") meses <br>"; 
        echo "Hemoglobina: ". $hemoglobina. "% <br>"; 
        echo "Sexo: ". $sexo. "<br>"; 
        if ($hemoglobina<13) {
        echo "Es positivo para anemia";
        } else {
            echo "Es negativo para anemia";
        }

    } else if ($edad == "2-6") {
        echo "Edad de entre: (". $edad. ") meses <br>"; 
        echo "Hemoglobina: ". $hemoglobina. "% <br>"; 
        echo "Sexo: ". $sexo. "<br>"; 
        if ($hemoglobina<10) {
        echo "Es positivo para anemia";
        } else {
            echo "Es negativo para anemia";
        }
    } else if ($edad == "7-12"){
        echo "Edad de entre: (". $edad. ") meses <br>"; 
        echo "Hemoglobina: ". $hemoglobina. "% <br>"; 
        echo "Sexo: ". $sexo. "<br>"; 
        if ($hemoglobina<11) {
        echo "Es positivo para anemia";
        } else {
            echo "Es negativo para anemia";
        }
    } else if ($edad == "1-5") {
        echo "Edad de entre: (". $edad. ") años <br>"; 
        echo "Hemoglobina: ". $hemoglobina. "% <br>"; 
        echo "Sexo: ". $sexo. "<br>"; 
        if ($hemoglobina<11.5) {
        echo "Es positivo para anemia";
        } else {
            echo "Es negativo para anemia";
        }
    } else if ($edad == "6-10"){
        echo "Edad de entre: (". $edad. ") años <br>"; 
        echo "Hemoglobina: ". $hemoglobina. "% <br>"; 
        echo "Sexo: ". $sexo. "<br>"; 
        if ($hemoglobina<12.6) {
            echo "Es positivo para anemia";
        } else {
            echo "Es negativo para anemia";
        }
    } else if ($edad == "11-15"){
        echo "Edad de entre: (". $edad. ") años <br>"; 
        echo "Hemoglobina: ". $hemoglobina. "% <br>"; 
        echo "Sexo: ". $sexo. "<br>"; 
        if ($hemoglobina<13) {
            echo "Es positivo para anemia";
        } else {
            echo "Es negativo para anemia";
        }
    } else if ($edad == "15" && $sexo=="femenino"){
        echo "Edad : mayor o igual que 15 años <br>"; 
        echo "Hemoglobina: ". $hemoglobina. "% <br>"; 
        echo "Sexo: ". $sexo. "<br>"; 
        if ($hemoglobina<12) {
            echo "Es positivo para anemia";
        } else {
            echo "Es negativo para anemia";
        }
    } else if ($edad == "15" && $sexo=="masculino"){
        echo "Edad : mayor o igual que 15 años <br>"; 
        echo "Hemoglobina: ". $hemoglobina. "% <br>"; 
        echo "Sexo: ". $sexo. "<br>"; 
        if ($hemoglobina<14) {
            echo "Es positivo para anemia";
        } else {
            echo "Es negativo para anemia";
        }
    }
    }
    
    ?>
    </div>
</body>
</html>