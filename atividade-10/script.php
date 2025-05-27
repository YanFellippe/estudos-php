<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe o nome e números
    $nome = htmlspecialchars($_POST['nome']);
    $num1 = filter_var($_POST['num1'], FILTER_VALIDATE_FLOAT);
    $num2 = filter_var($_POST['num2'], FILTER_VALIDATE_FLOAT);
    $num3 = filter_var($_POST['num3'], FILTER_VALIDATE_FLOAT);
    $num4 = filter_var($_POST['num4'], FILTER_VALIDATE_FLOAT);
    $num5 = filter_var($_POST['num5'], FILTER_VALIDATE_FLOAT);

    // Validação simples
    if ($num1 === false || $num2 === false || $num3 === false || $num4 === false || $num5 === false) {
        // Redireciona com mensagem de erro
        header("Location: index.php?erro=" . urlencode("Erro: Por favor insira números válidos."));
        exit();
    } else {
        $soma = $num1 + $num2 + $num3 + $num4 + $num5;
        // Redireciona com o resultado e o nome
        header("Location: index.php?nome=" . urlencode($nome) . "&resultado=" . urlencode($soma));
        exit();
    }
} else {
    // Redireciona com mensagem de erro se acessado diretamente
    header("Location: index.php?erro=" . urlencode("Acesse esta página a partir do formulário."));
    exit();
}
?>