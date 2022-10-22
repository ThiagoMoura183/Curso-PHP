<div class="titulo">Argumentos Variáveis</div>

<?php
function soma($a, $b) {
    return $a + $b;
}

echo soma (4, 5) . '<br>';
echo soma (10, 20, 30) . '<br>';

echo '<hr>';

function somaCompleta (...$numeros) { // Esse parametro faz com que receba um array
    $soma = 0;
    foreach ($numeros as $num) {
        $soma += $num;
    }
    return $soma;
}

echo somaCompleta(1,6,6,8,9,10) . '<br>'; // Agora ele aceita vários parâmetros
echo somaCompleta(10,20,30). '<br>'; 

$array = [6, 7, 8];

echo somaCompleta(...$array);