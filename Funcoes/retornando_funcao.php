<div class="titulo">Retornando Função</div>

<?php

function soma($a) {
    return function($b) use ($a) {
        return $a + $b;
    };
}

echo soma(3)(15);

$doisMais = soma(2);
echo '<br>' . $doisMais(10);
echo '<br>' . $doisMais(18); // Não precisa passar o primeiro parâmetro pois ele já vale a função, com o parametro $a