<div class="titulo">Herança</div>

<?php

class Pessoa {
    public $nome;
    public $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
        echo "Pessoa criada! <br>";   
    }

    public function __destruct() {
        echo "Pessoa removida! <br>";
    }

    public function apresentar() {
       echo "{$this->nome}, {$this->idade} anos. <br>"; 
    }
}

// Herança
class Usuario extends Pessoa { //Super classe: PESSOA, Sub Classe: USUÁRIO
    public $login;

    public function __construct($nome, $idade, $login) {
        // $this->nome = $nome;
        // $this->idade = $idade;
        parent::__construct($nome, $idade); // É a mesma coisa que descomentar as 2x linhas acima. Ele chama a função da super classe!
        $this->login = $login;
        echo "Usuário criado! <br>";
    }

    public function __destruct() {
        echo "Usuário removido! <br>";        
    }

    public function apresentar() {
        echo "@{$this->login}: ";
        parent::apresentar(); //Isso faz a chamada da função herdada, ou seja, mostrará o nome e idade.
        // echo "@{$this->login}: {$this->nome}, {$this->idade} anos. <br>";
    }
}

$usuario1 = new Usuario('Thiago Moura', 22, "thi_moura");
$usuario1->apresentar(); // O usuário tem esse método pois HERDOU da classe de Pessoa e foi sobreescrito. Mesmo se as linhas 39,40 e 41 não estivessem escritas, iria imprimir o echo da função APRESENTAR da classe Pessoa.

unset($usuario1);