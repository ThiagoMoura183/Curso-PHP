<div class="titulo">Comparação Arrays</div>

<?php

$array1 = ['nome' => 'Maria', 'idade' => 25];
$array2 = ['nome' => 'Maria', 'idade' => 25];

var_dump($array1 == $array2);
var_dump($array1 === $array2);

$array3 = ['idade' => 25, 'nome' => 'Maria'];
echo '<br>';

var_dump($array1 == $array3);
var_dump($array1 === $array3);
