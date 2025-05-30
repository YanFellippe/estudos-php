<?php
$nome = "Yan";
$idade = 22;

if($idade < 5){
    echo $nome.", sua idade é inválida para natação!";
} else if($idade >= 5 && $idade <= 7){
    echo $nome.", você está na categoria: Infantil A";
} else if($idade >= 8 && $idade <= 10){
    echo $nome.", você está na categoria: Infantil B";
} else if($idade >= 10 && $idade <= 13){
    echo $nome.", você está na categoria: Juvenil A";
} else if($idade >= 14 && $idade <= 17){
    echo $nome.", você está na categoria: Juvenil B";
} else if($idade >= 18){
    echo $nome.", você está na categoria: Adulto";
}
?>