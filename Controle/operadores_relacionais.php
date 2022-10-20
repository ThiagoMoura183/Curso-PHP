<div class="titulo">Operadores Relacionais</div>

<?php

// var_dump(1 == 1);
// var_dump(1 > 1);
// var_dump(1 >= 1);
// var_dump(4 < 23);
// var_dump(1 != 1);

// Esse comparativo com 2x simbolos de igual é apenas a igualdade do valor
var_dump(111 == '111'); // true

echo '<br>';
// Esse comparativo com 3x simbolos de igual é estrita, que compara não apenas valor mas também a TIPAGEM do valor
var_dump(111 === '111'); // false

var_dump(111 != '111'); // false
var_dump(111 !== '111'); // true

echo "<p>Relacionais no If/Else</p><hr>";
$idade = 65;

if ($idade < 18) {
    echo "Menor de idade = $idade<br>";
} else if ($idade < 65) {
    echo "Adulto = $idade<br>";
} else {
    echo "Terceira Idade = $idade!";
}

echo '<p>Spaceship</p><hr>';
var_dump(5 <=> 3); // Se da esquerda > direita = 1
var_dump(50 <=> 50); // Se da esquerda > direita = 0
var_dump(5 <=> 50); // Se da esquerda > direita = -1

?>

<style>
    p {
        margin-bottom: 0px;
    }
    
    hr {
        margin-top: 0px;
    }

</style>