<div class="titulo">Variáveis</div>

<?php

$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';

$a = 3;
$b = 16;
$soma = $a + $b;
echo $soma;

echo '<br>';
echo isset($soma);  
echo '<br>';
var_dump($soma);
echo '<br>';
unset($soma);
var_dump($soma); //Retornará nulo


// As variáveis no PHP são dinâmicas. Ela aceita qualquer coisa que você vincula a ela, não necessariamente de um mesmo tipo primitivo.
// A tipagem do PHP é fraca pelo fato de ser flexível na alocação de valores.
echo '<br>';
$variavel = 10;
echo '<br>' . $variavel;

$variavel = "Agora sou uma string!";
echo '<br>' . $variavel;

// Nome de variáveis
echo '<br>';
echo '<br>';
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida'; // evitar!
// $6var = 'invalida';
// $%var7 = 'invalida';
// $var8% = 'invalida';

var_dump($_SERVER["HTTP_HOST"]);

