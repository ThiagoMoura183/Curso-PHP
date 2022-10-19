<div class="titulo">Constantes</div>

<?php
// Geralmente para costantes, são todas letras maiúsculas e separadas por underline
define('TAXA_DE_JUROS', 5.9);
// Constantes não usam o simbolo $ para acessar variáveis!!
echo TAXA_DE_JUROS;

// Não é possível alterar valores de constantes!
// TAXA_DE_JUROS = 2.5;

// Pode se definir uma constante usando a palavra reservada const também.
const NOVA_TAXA = 6.9;
echo  '<br>' . NOVA_TAXA;