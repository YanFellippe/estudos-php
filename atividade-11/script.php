<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe o nome e números
    $nome = htmlspecialchars($_POST['nome']);
    $num1 = filter_var($_POST['num1'], FILTER_VALIDATE_FLOAT);
    // Validação simples
    if ($num1 === false) {
        // Redireciona com mensagem de erro
        header("Location: index.php?erro=" . urlencode("Erro: Por favor insira números válidos."));
        exit();
    } else {
        $multi = $num1 + ($num1 * 0.3);
        // Redireciona com o resultado e o nome
        header("Location: index.php?nome=" . urlencode($nome) . "&resultado=" . urlencode($multi));
        exit();
    }
} else {
    // Redireciona com mensagem de erro se acessado diretamente
    header("Location: index.php?erro=" . urlencode("Acesse esta página a partir do formulário."));
    exit();
}
?>