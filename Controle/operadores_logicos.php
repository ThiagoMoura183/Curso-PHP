<div class="titulo">Operadores Lógicos</div>

<?php
echo "<p class ='divisao'>V ou F</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true); //not

echo "<p class ='divisao'>Tabela Verdade 'AND' (E) </p><hr>";
    var_dump(true && true);
    var_dump(true && false);
    var_dump(false && true);
    var_dump(false && false);

echo "<p class ='divisao'>Tabela Verdade 'OR' (OU) </p><hr>";
    var_dump(true || true);
    var_dump(true || false);
    var_dump(false || true);
    var_dump(false || false);

echo "<p class ='divisao'>Tabela Verdade 'XOR' (OU Exclusivo) </p><hr>";
    var_dump(true xor true); 
    var_dump(true xor false); 
    var_dump(false xor true); 
    var_dump(false xor false); 

echo "<p class ='divisao'>Exemplo</p><hr>";
$idade = 62;
$sexo = 'F';

if ($idade >= 60 && $sexo === 'F') {
    echo "Pode se aposentar -> $sexo";
} else if ($idade >=65 && $sexo === 'M') {
    echo "Pode se aposentar -> $sexo";
} else {
    echo "Terá que trabalhar mais um pouco...";
}
?>
