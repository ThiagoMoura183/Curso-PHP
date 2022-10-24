<div class="titulo">Traits #02</div>

<?php

trait validacao {
    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public function validarString($str) { // Diferença do arquivo traits #01 é que o nome da função é o mesmo!
        return isset($str) && trim($str);
    }
}

class UsuarioTrait {
    // use validacao, validacaoMelhor; //Apenas isso gerará conflito no código!
    //Para resolver o conflito:

    use validacao, validacaoMelhor {
        // Uma  forma de corrigir o conflito é aplicando "prioridade"
        validacaoMelhor::validarString insteadOf validacao; // Isso diz que o método será utilizado do validacaoMelhor, e não do trait validacao

        // Uma segunda forma de corrigir o conflito é aplicando ALIAS!
        validacao::validarString as validacaoSimples;
    }
}

$usuario = new UsuarioTrait;
var_dump($usuario->validacaoSimples(' '));
echo '<br>';
// var_dump($usuario->validarString(' ')); // Retornará false.