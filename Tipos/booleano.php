<div class="titulo">Tipo Booleano</div>

<?php

echo TRUE;
echo '<br>';
echo FALSE; //False não mostra nada no navegador

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' . is_bool(true);
echo '<br>' . is_bool('true'); //False não mostra nada no navegador

// Fazer regras de conversões

echo '<p> Regras: </p>';
echo '<br>' . var_dump((bool) 0); //Apenas 0 é false
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) -1);
echo '<br>' . var_dump((bool) ""); // false
echo '<br>' . var_dump((bool) "0"); // false
echo '<br>' . var_dump((bool) " "); // todo resto para baixo é true
echo '<br>' . var_dump((bool) "00");