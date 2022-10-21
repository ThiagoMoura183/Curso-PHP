<div class="titulo">Array</div>

<?php
$lista = array(1, 2, 3.5, "texto");

echo $lista[3] . '<br>';
var_dump($lista);
echo '<br>';
print_r($lista);

echo '<br>' . $lista[300] ; //Retorna warning dizendo que não existe.

$texto = 'Esse é um texto teste';
echo '<br>' . $texto[2];
echo '<br>' . mb_substr($texto, 10, 1);