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
    $dobro = $num1 * $num1;
    $triplo = $num1 * $num1 * $num1;

    echo "O dobro é: $dobro <br>";
    echo "O triplo é: $triplo <br>";
    ?>

    <a href="./index.html">calcular novamente</a>
</body>
</html>