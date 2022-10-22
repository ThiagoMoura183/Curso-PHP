<div class="titulo">Funções Anonimas</div>


<?php

$soma = function ($a, $b) {
    return $a + $b;
}; // A variável soma recebe o retorno da function

echo $soma (1, 4) . '<br>';

function executar($a, $b, $op, $funcao) {
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado <br>"; 
}

executar(2, 3, '+', $soma);

$multiplicacao = function ($a, $b) {
    return $a * $b;
}; // A variável soma recebe o retorno da function
