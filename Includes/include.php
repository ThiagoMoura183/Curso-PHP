<div class="titulo">Include</div>

<?php

echo 'Executei essa linha do arquivo include <br>';

include('include_arquivo.php');

echo soma(6,9) . "!<br>";
echo "O conteúdo da variável é '{$variavel}'."; // Variavel importada