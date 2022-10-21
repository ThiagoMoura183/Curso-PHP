<div class="titulo">Laço For</div>

<?php

for ($cont = 1; $cont <= 5; $cont++) {
    echo "$cont <br>";
}

echo '<hr>';

for (;$cont <= 10; $cont++) {
    echo "$cont <br>"; //Isso irá mostrar a partir do 6, pois no for de cima, a variável acabou valendo 6
}

echo '<hr>';

for (;$cont <= 15;) {
    echo "$cont <br>";
    $cont++;
}


