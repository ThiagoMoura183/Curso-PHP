<div class="titulo">Função & Escopo</div>

<?php

function imprimirMensagem() {
    echo "Olá! ";
    echo "Até a próxima!<br>";
}

imprimirMensagem();

$variavel = 1;

function trocaValor() {
    $variavel = 2; // Mesmo que a variavel tenha o mesmo nome da variavel fora da função, o PHP separa os valores
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValor();
echo "Depois: $variavel <br>"; // Mostrará 1, pois o valor 2 está na variável apenas dentro da função!

echo '<br>';
echo '<hr>';

function trocaValorDeVerdade() {
    global $variavel; // Significa que a variável está fora do escopo da função, e é GLOBAL!
    $variavel = 3;
    echo "Durante a função: $variavel <br>";   
}

echo "Antes: $variavel <br>";
trocaValorDeVerdade();
echo "Depois: $variavel <br>"; // Mostrará 1, pois o valor 2 está na variável apenas dentro da função!
