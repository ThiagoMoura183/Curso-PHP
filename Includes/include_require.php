<div class="titulo">Include vs Require</div>

<?php

echo 'Usando include com arquivo inexistente...<br>';
include('arquivo_inexistente.php'); // Não para a execução, ele apenas segue.

echo 'Usando require com arquivo inexistente...<br>';
require('arquivo_inexistente.php'); 

echo 'Não encontrou...<br>';

// Require faz com que PARE de executar o código, já o include ele seguirá normal!!