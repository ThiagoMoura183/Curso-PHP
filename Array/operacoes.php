<div class="titulo">Operações</div>

<?php
$dados1 = [
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "Fortaleza",
];

$dadoscompletos = $dados1 + $dados2;
print_r($dadoscompletos);

echo '<br>' . is_array($dadoscompletos);
echo '<br>' . count($dadoscompletos) . " informações no array.";

echo '<br>';
$indice = array_rand($dadoscompletos);
echo "$indice = $dadoscompletos[$indice]";
echo '<br>';
echo '<br>';

unset($dadoscompletos["nome"]); // Para apagar uma info do array, ou liberar espaço na memória
print_r($dadoscompletos);

$impares = [1, 3, 5, 7];
$pares = [0, 2, 4, 6];
echo '<br>';
$decimais = $pares + $impares;
print_r($decimais); // pelo fato do index ser o numérico, ele irá priorizar as informações da ESQUERDA, ou seja, pares!

// Pode ser consolidado da seguinte forma (função):
$decimais = array_merge($pares, $impares);
echo '<br>';
print_r($decimais);
sort($decimais); //Isso irá ordenar o array depois de já mergeado!
echo '<br>';
print_r($decimais);