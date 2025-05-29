<?php
$nome = "Yan";
$idade = 22;

if($idade >= 16) {
    echo $nome.", você pode votar!";
} else if ($idade <= 0) {
    echo $nome." nem nasceu kkkkj";
} else {
    echo $nome.", você é menor de idade, portanto não pode votar!!!";
}
?>