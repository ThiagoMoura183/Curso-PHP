<?php namespace contexto;?> <!--  O namespace tem que ser a primeira linha do código -->
<div class="titulo">Exemplo Básico</div>


<?php

echo __NAMESPACE__ . '<br>';

const constante1 = 123;
define('contexto\constante2', 234);
define(__NAMESPACE__ . '\constante3', 345);

define('outro_contexto\constante4', 456);

function soma($a, $b) {
    return $a + $b;
}

echo \contexto\soma(1, 2) . '<br>';
echo soma(1, 2) . '<br>';

function strpos($str, $text) {
    echo "Buscando o texto '{$text}' em '{$str}'<br>";
    return 1;
}

echo strpos('Texto genérico para busca', 'busca') . '<br>';
echo \strpos('Texto genérico para busca', 'busca') . '<br>';