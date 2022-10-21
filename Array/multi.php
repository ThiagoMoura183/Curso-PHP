<div class="titulo">Multidimensionais</div>

<?php

$dados = [
    [
        "nome" => "Thiago",
        "idade" => 22,
        "naturalidade" => "Japão"
    ],
    [
        "nome" => "Maria",
        "idade" => 41,
        "naturalidade" => "Brasil"
    ]
];

print_r($dados);
echo '<br>' . $dados[0]['idade'];
echo '<br>' . $dados[1]['idade'];

$dados[] = [
    "nome" => "Florinda",
    "idade" => 30,
    "naturalidade" => "México"
];

echo '<br>';
print_r($dados);

unset($dados[1]);
echo '<br>';
print_r($dados);