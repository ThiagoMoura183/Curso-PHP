<div class="titulo">Atribuições</div>

<?php

$title = 'Atribuições';

$numero = 10;
echo '<br>' . $numero;

$numero = $numero - 1;
echo '<br>' . $numero;

$numero = $numero + 1.5;
echo '<br>' . $numero;
//-------------------------------------------------------------------------------------------
$numero--; //Variável de decremento pós fixado
echo '<br>' . $numero;
--$numero; //Variável de decremento pré fixado
echo '<br>' . $numero;

$numero++; //Variável de incremento pós fixado
echo '<br>' . $numero;
++$numero; //Variável de incremento pré fixado
echo '<br>' . $numero;
//-------------------------------------------------------------------------------------------

$numero = 20;
echo '<br>' . $numero;

$numero -= 5;
echo '<br>' . $numero;
$numero += 5;
echo '<br>' . $numero;
$numero *= 10 ;
echo '<br>' . $numero;
$numero /= 2 ;
echo '<br>' . $numero;
$numero %= 6 ;
echo '<br>' . $numero;
$numero **= 4 ;
echo '<br>' . $numero;
$numero .= 4 ; // APENAS CONCATENAÇÃO!
echo '<br>' . $numero;
//-------------------------------------------------------------------------------------------

$texto = 'Esse é um texto';
echo '<br>' . $texto;
$texto = $texto . ' qualquer';
echo '<br>' . $texto;
$texto .= ' de verdade!';
echo '<br>' . $texto;