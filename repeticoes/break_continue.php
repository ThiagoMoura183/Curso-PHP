<div class="titulo">Break/Continue</div>

<?php

$cont = 10;

for (;;) { //Laço infinito
    echo "$cont <br>";
    $cont++;
    if ($cont > 20) {
        break;
    }
}

echo "Fim!";
echo '<br>';
echo '<br>';
echo '<hr>';

for (;;) { //Laço infinito
    $cont++;
    if ($cont % 2 === 1) {
        continue;
    }
    echo "$cont <br>";
    if ($cont >= 30) {
        break;
    }
}

echo "Fim!";