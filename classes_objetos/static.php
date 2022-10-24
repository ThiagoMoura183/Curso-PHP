<div class="titulo">Membros Estáticos</div>

<?php

class A {
    public $naoStatic = 'Variável de instância';
    public static $static = 'Variável de classe (estática)';

    public function mostrarA() {
        echo "Não estático = {$this->naoStatic}<br>";
        // Tentativa 1
        // echo "Estático = {$this->static}<br>";
        // Tentativa 2
        // echo "Estático = {self::$static}<br>";
        echo "Estático = ". self::$static . "<br>"; // Para acessar um atributo statico, deve usar a palavra reservada SELF seguida do ::
    }

    public static function mostrarStaticA() {
        // echo "Não estático = {$this->naoStatic}<br>"; NÃO EXISTE ACESSAR A CLASSE A PARTIR DA INSTÂNCIA
        // echo "Não estático = {$static}<br>";
        echo "Estática: " . self::$static . "<br>";
    }
}

$objetoA = new A();
$objetoA->mostrarA();
$objetoA->mostrarStaticA();