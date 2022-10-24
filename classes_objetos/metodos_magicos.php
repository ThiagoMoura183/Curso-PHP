<div class="titulo">Métodos Mágicos</div>

<?php

class Pessoa {
    public $nome;
    public $idade;

    public function __construct($nome,$idade) {
        echo "Construtor invocado! <br>";
        $this->nome = $nome;
        $this->idade= $idade;
    }

    public function __destruct() {
        echo "Destrutor invocado! <br>";
    }

    public function __toString() {
        return "{$this->nome} tem {$this->idade} anos.";
    }

    public function apresentar() {
        echo $this . "<br>";
    }

    public function __get($atrib) {
        echo "Lendo atributo não declarado: {$atrib}<br>";
    }

    public function __set($atrib, $valor) {
        echo "Alterando atributo não declarado: {$atrib}/{$valor}<br>";
    }

    public function __CALL($metodo, $params) {
        echo "Tentando executar método: $metodo.<br>";
        echo "Com os parâmetros:" . print_r($params). "<br>";
    }
}

$pessoa = new Pessoa('Ricardo',40);
// $pessoa->apresentar();
// echo $pessoa, '<br>'; // Pelo fato de ter um TO_STRING, o echo no objeto funciona sem dar FATAL ERROR
// $pessoa->nome = 'Reinaldo';
// $pessoa->apresentar();

$pessoa->nomeCompleto; // Pelo fato do atributo não existir, ele irá cair no GET da classe!

$pessoa->nomeCompleto = 'Thiago Moura'; // Pelo fato do atributo não existir, mas uma informação está sendo alocada ele irá cair no SET da classe!

// Call pq o método não existe no objeto
$pessoa->exec();
echo '<br>';
echo '<br>';
$pessoa->exec(1,'teste', true);