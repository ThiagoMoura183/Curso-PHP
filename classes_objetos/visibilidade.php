<div class="titulo">Visibilidade</div>

<?php
class A {
    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA() {
        // $this->naoMostrar(); //Isso poderá acontecer pois uma função privada pode ser usada dentro da propria classe
        echo "a) Publico = {$this->publico}<br>";
        echo "a) Protegido = {$this->protegido}<br>";
        echo "a) Privado = {$this->privado}<br>";
    }

    private function naoMostrar() {
        echo "Não vou imprimir!";
    }
}

$a = new A;
// echo $a->privado; // Não dará certo pois o atributo é privado!
$a->mostrarA(); //Exibirá pois a os atributos são exibidos a partir de uma function publica.

// $a->naoMostrar(); // Dará erro!

echo "Fim!";
echo '<br>';
echo '<br>';

class B extends A {
    public function mostrarB() {
        echo "b) Publico = {$this->publico}<br>";
        echo "b) Protegido = {$this->protegido}<br>";
        // echo "b) Privado = {$this->privado}<br>"; // Não é disponivel, pois o recurso privado é exclusivo na classe que foi criada!
    }
}

$b = new B();
$b->mostrarB();