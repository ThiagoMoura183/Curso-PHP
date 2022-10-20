<div class="titulo">Desafio Switch</div>

<form action="#" method="POST">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">KM > Milha</option>
        <option value="milha-km">Milha > KM</option>
        <option value="metro-km">Metros > KM</option>
        <option value="km-metro">KM > Metros</option>
    </select>

    <button>Calcular</button>

</form>

<style>
    form>* {
        font-size: 1.8rm;
    }
</style>


<?php
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;

$param = $_POST['param'] ?? 0; //Se não vier setado, receberá 0.

if(isset($_POST['conversao'])) {
switch ($_POST['conversao']) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param KM = $distancia Milhas.";
        break;
    case 'milha-km':
        $distancia = $param /FATOR_KM_MILHA;
        $mensagem = "$param Milhas = $distancia Km.";
        break;

    case 'metro-km':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param Metro(s) = $distancia Km.";
        break;

    case 'km-metro':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param Km = $distancia Metro(s).";
        break;

    default:
        $mensagem = "Nenhuma valor calculado!";
}
    echo "<p>$mensagem</p>";
}
