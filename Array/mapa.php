<div class="titulo">Mapa</div>

<?php

$dados = array (
    "idade" => 25,
    "cor" => "Azul",
    "peso" => 49.8
);

print_r($dados);

var_dump($dados[0]); //Não existe.

echo '<br>' . $dados["idade"];
echo '<br>' . $dados["cor"];
echo '<br>' . $dados["peso"];

//--------------------------------------
$lista = array(
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    "g" => "c"
); //Isso gera uma confusao, pois está misturando INDEX PADRÃO (numeral) com um index que foi criado

echo '<br>';

// $lista = 'i'; // Isso dará erro pois substituiria a variável de array para string
$lista[] = 'i'; // Isso adiciona a informação no final do array
print_r($lista);
