<div class="titulo">While/Do While</div>

<?php
const VALOR_LIMITE = 5;

$contador = 0;

while ($contador < VALOR_LIMITE) {
    echo "while $contador <br>";
    $contador ++;
}

echo '<br>';
echo '<hr>';

$contador = 0;
do {
    echo "while $contador <br>";
    $contador ++;
} while ($contador < VALOR_LIMITE);
