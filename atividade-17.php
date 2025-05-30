<?php
$nota1 = 9.7;
$nota2 = 9.6;
$nota3 = 9.7;
$nota4 = 9.5;
$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

if($media < 4){
    echo "Nota: ".$media." - Situação: Reprovado com desempenho insuficiente.";
} else if($media >= 4 && $media <= 5.9) {
    echo "Nota: ".$media." - Situação: Recuperação - precisa melhorar.";
} else if($media >= 6 && $media <= 7.9) {
    echo "Nota: ".$media." - Situação: Aprovado com desempenho regular.";
} else if($media >= 8 && $media <= 9.4) {
    echo "Nota: ".$media." - Situação: Aprovado com bom desempenho.";
} else if($media >= 9.5 && $media <= 10) {
    echo "Nota: ".$media." - Situação: Aprovado com com excelência!";
} else if($media < 0 || $media >= 11) {
    echo "Nota inválida.";
} 
?>