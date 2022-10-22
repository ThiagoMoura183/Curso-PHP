<div class="titulo">Primeira Classe</div>

<?php

class Cliente { // Padrão em nomenclatura de classe é ter a primeira letra de cada palavra sempre maiúscula
    // atributos
    public $nome = 'Anônimo'; // Atributo pertence ao objeto
    public $idade = 18;

    public function apresentar() {
        echo "Nome: {$this->nome} Idade: {$this->idade} <br>";
    }
}

$cliente1 = new Cliente(); // Criando um novo objeto!
$cliente1->apresentar();

echo '<br>';
echo $cliente1->nome; // Posso imprimir apenas um atributo do objeto criado
echo '<br>';

// Para alterar o valor das instâncias/objetos:
$cliente1->nome = 'Thiago Moura'; // Para acessar o atributo, não precisa do $
$cliente1->idade= 22;

$cliente2 = new Cliente();
$cliente2->nome = 'Gabriel';
$cliente2->idade= 43;

$cliente1->apresentar();
$cliente2->apresentar();