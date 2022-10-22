<div class="titulo">Argumento Padrão</div>

<?php
function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente') {
    echo "Bem vindo, $nome $sobrenome! <br>";
}

saudacao();
saudacao(NULL); // Significa que o primeiro parametro é nulo! Então listará apenas o segundo
saudacao(NULL, NULL); // Significa que os dois parâmetros são nulos, não listara o nome e sobrenome!
echo saudacao('Thiago', 'Moura');

