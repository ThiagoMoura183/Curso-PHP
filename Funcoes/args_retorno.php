<div class="titulo">Argumentos e Retorno</div>

<?php

function obterMensagem() {
    return 'Seja bem vindo(a)!';
}

obterMensagem(); // Não lista nada pois não é um echo!

$m = obterMensagem();

echo $m . '<br>';

var_dump(obterMensagem());

echo '<br>';
echo '<hr>';

function obterMensagemComNome($nome) {
    return "Bem vindo, {$nome}";
}

echo '<br>' . obterMensagemComNome('Thiago');

function soma($a, $b) {
    global $resultado;
    $resultado = $a + $b;
    return $resultado;
}

echo '<br>', soma (9,8);