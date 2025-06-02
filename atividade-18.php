<?php
$pressao = 135;

echo "Pressão: " . $pressao . " mmHg - ";

if (!is_numeric($pressao) || $pressao < 0) {
    echo "Valor inválido para pressão.";
} elseif ($pressao < 90) {
    echo "Risco: Hipotensão (pressão baixa)";
} elseif ($pressao <= 119) {
    echo "Situação: Pressão ideal";
} elseif ($pressao <= 129) {
    echo "Situação: Pressão normal alta";
} elseif ($pressao <= 139) {
    echo "Situação: Pré-hipertensão (atenção necessária)";
} elseif ($pressao <= 159) {
    echo "Situação: Hipertensão Estágio 1";
} elseif ($pressao <= 179) {
    echo "Situação: Hipertensão Estágio 2";
} else { // 180 ou mais
    echo "Situação: Crise hipertensiva – risco de vida!";
}
?>
