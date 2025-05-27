<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Cálculo simples</title>
</head>
<body>
    <form action="script.php" method="POST">
        <div class="content-form">
            <label for="nome">Nome do Professor:</label>
            <input type="text" id="nome" name="nome" required>
        </div>
        <div class="content-form">
            <label for="num1">1º Número:</label>
            <input type="text" id="num1" name="num1" required>
        </div>
        <div class="content-form">
            <label for="num2">2º Número:</label>
            <input type="text" id="num2" name="num2" required>
        </div>
        <div class="content-form">
            <label for="num3">3º Número:</label>
            <input type="text" id="num3" name="num3" required>
        </div>
        <div class="content-form">
            <label for="num4">4º Número:</label>
            <input type="text" id="num4" name="num4" required>
        </div>
        <div class="content-form">
            <label for="num5">5º Número:</label>
            <input type="text" id="num5" name="num5" required>
        </div>
        <div class="button-container">
            <button type="submit">Calcular</button>
        </div>
        <div class="resposta">
            <h3 id="resultado">
                <?php
                // Exibe o resultado ou mensagem de erro, se existirem
                if (isset($_GET['resultado']) && isset($_GET['nome'])) {
                    $nome = htmlspecialchars($_GET['nome']);
                    $resultado = htmlspecialchars($_GET['resultado']);
                    echo "Olá, $nome! A soma dos números é: $resultado";
                } elseif (isset($_GET['erro'])) {
                    echo htmlspecialchars($_GET['erro']);
                }
                ?>
            </h3>
        </div>
    </form>
</body>
</html>