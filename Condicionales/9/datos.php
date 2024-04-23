
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
        .input {
        border-radius: 5px;
        background-color: #e9e9f7;
        padding: 5px;
       margin-bottom: 6px;
        width: 100%;
        color: #2f2f6d;
        border: 1px solid #dadaf7;
        max-width: 100px;
    
        }
      
      
       
    </style>
    <body>
        <div class="form">
        <?php
    $n1 = $_POST['n1']; 
    $n2 = $_POST['n2'];  
    $n3 = $_POST['n3'];
    switch (true) {
        case ($n1>$n2 && $n1<$n3 || $n1<$n2 && $n1>$n3):
            $medio=$n1;
            echo " <h3>el número del medio es ". $n1. "</h3>";
            break;
        case ($n3>$n2 && $n3<$n1 || $n3<$n2 && $n3>$n1):
            $medio=$n3;
            echo "<h3>el número del medio es ". $n3. "</h3>";
            break;
        default:
        $medio=$n2;
        echo "<h3>el número del medio es ". $n2. "</h3>";
            break;
    }
    ?>
        </div>
    </body>
    </html>