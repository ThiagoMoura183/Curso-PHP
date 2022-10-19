<div class="titulo">Valor vs Referência</div>

<?php

$variavel = 'valor inicial';
echo $variavel;

// Atribuição por Valor
$variavelValor = $variavel;
echo "<br> $variavelValor";

$variavelValor = 'novo valor';
echo "<br> $variavel";
echo " $variavelValor";

// Atribuição por Valor

// Nesse momento, estou dizendo que a variavelReferencia está apontando pro mesmo ponteiro da variavel. Ou seja, ele altera o valor daquela posição.
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referencia';

echo "<br>$variavel";
echo "<br>$variavelReferencia";