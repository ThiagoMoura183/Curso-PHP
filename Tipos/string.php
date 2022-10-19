<div class="titulo">Tipo String</div>

<?php

echo 'Eu sou uma string';
echo '<br>';

var_dump("Eu também");
echo '<br>';

// Concatenação

echo "Nós também" . ' somos' . '<br>'; //Obs: Concatenação é com símbolo PONTO
echo 'Número é ' . 123;
echo '<br>', "Também aceito", " virgulas";

echo '<br>';
echo "'Teste' " . '"Teste" ' . '\'Teste\' ' . "\"Teste\" "; 

print("<br> Também existe a função print");
print "<br> Também existe a função print - Sem parênteses";
echo '<br>';
echo '<br>';

// Algumas funções

echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('Todas as Palavras');
echo '<br>' . mb_strlen('Eu também', "UTF-8");
echo '<br>' . substr('Só uma parte do texto', 7 , 6);
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso');

echo '<br>';