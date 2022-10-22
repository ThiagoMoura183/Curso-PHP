<div class="titulo">Construtor e Destrutor</div>

<?php

class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $idade) { //Os parâmetros do construtor pode ou não ter o mesmo nome dos atributos da classe
        echo 'Construtor invocado! <br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo "Objeto destruído!";        
    }

    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos.<br>";
    }
}

$pessoa1 = new Pessoa('Thiago Moura', 22);
$pessoa1->apresentar();

// $pessoa1 = new Pessoa; // Problema! Pois obrigatoriamente precisa passar parâmetro, a menos que esteja padronizado na classe!

unset($pessoa1); // O unset é a chamada da função DESTRUTORA!!
$pessoa1 = NULL; // Atribuir o valor nulo também chama a função DESTRUTORA!!
