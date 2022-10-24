<div class="titulo">Polimorfismo</div>

<?php

abstract class Comida {
    public $peso;
}

class Arroz extends Comida {
    
}

class Feijao extends Comida {

}

class Sorvete extends Comida {

}

class Pessoa {
    public $peso;

    function __construct($peso) {
        $this->peso = $peso;
    }

    public function comer(Comida $comida) { // Pode ou não ter a tipagem Comida, não terá impacto pois a linguagem é dinâmica. A vantagem de amarrar é que sempre que a função for chamada, é certo de que ela terá o atributo peso pois é herdada da classe Comida.
        $this->peso += $comida->peso;
    }
}

$p = new Pessoa(83.45);

$c1 = new Arroz();
$c1->peso = 0.65;

$c2 = new Sorvete();
$c2->peso = 1.5;


$p->comer($c1);
$p->comer($c2);

echo $p->peso;