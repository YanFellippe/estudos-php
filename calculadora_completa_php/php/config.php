 <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      $op = $_POST['operacao'];
      $resultado = "";

      if ($op == '+') {
        $resultado = $num1 + $num2;
      } elseif ($op == '-') {
        $resultado = $num1 - $num2;
      } elseif ($op == '*') {
        $resultado = $num1 * $num2;
      } elseif ($op == '/') {
        if ($num2 != 0) {
          $resultado = $num1 / $num2;
        } else {
          $resultado = "Erro: divisão por zero!";
        }
      }

      echo "<div class='result'>Resultado: $resultado</div>";
    }
  ?>