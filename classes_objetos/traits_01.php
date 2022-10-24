<div class="titulo">Traits #01</div>

<?php

trait validacao {
    public $a = 'Valor A';

    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public $b = 'Valor B';
    private $c = 'Valor Privado';
    public function validarStringMelhor($str) {
        return isset($str) && trim($str);
    }
}

class UsuarioTeste {
    use validacao, validacaoMelhor; // Isso é como se o PHP copiasse as functions dentro da classe PHP.

    public function imprimirValorC() {
        echo $this->c;
    }
}

$usuario = new UsuarioTeste();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validarStringMelhor(' '));
echo '<br>';
echo $usuario->a, '<br>',  $usuario->b;
echo '<br>';
echo $usuario->imprimirValorC();

