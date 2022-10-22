<div class="titulo">Desafio Classe</div>

<?php

class Data {
    public $dia = '01';
    public $mes = '01';
    public $ano = 1970;

    public function apresentar() {
        echo "A data deste objeto é: {$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$dataPadrao = new Data();
$dataPadrao->apresentar();

echo "<br> {$dataPadrao->dia}";
echo "<br> {$dataPadrao->mes}";
echo "<br> {$dataPadrao->ano}";

echo '<br><br>';

$dataAniversario = new Data();
$dataAniversario->dia = '02';
$dataAniversario->mes= '04';
$dataAniversario->ano = '2000';

$dataAniversario->apresentar();


// echo "<br> {$dataAniversario->dia}";



