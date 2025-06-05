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
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];
    $num4 = $_GET['num4'];
    $num5 = $_GET['num5'];
    $multiplicacao = $num1 * $num2 * $num2 * $num4 * $num5;

    echo "Resultado do produto é: $multiplicacao"
    ?>

    <a href="./index.html">calcular novamente</a>
</body>
</html>