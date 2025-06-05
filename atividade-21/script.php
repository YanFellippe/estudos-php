<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>RESULTADO</h1>
    <?php
    $num1 = $_GET['num1'];
    $calculo = $num1 * 7;

    echo "O dobro é: $calculo <br><br>";
    ?>

    <a href="./index.html">calcular novamente</a>
</body>
</html>