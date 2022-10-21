<div class="titulo">Arrays Constantes</div>

<?php
const FRUTAS = ['laranja', 'abacaxi'];

// FRUTAS[0] = 'banana'; //Os elementos não podem ser alterados!
// FRUTAS[] = 'banana'; // Elementos não podem ser adicionados!

echo FRUTAS[0];

const CARROS = ["Fiat" => "uno", "Ford" => "Fiesta"];
echo '<br>' . CARROS["Fiat"];

define ('CIDADES', array('BH', 'SP'));