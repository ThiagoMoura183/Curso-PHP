<div class="titulo">Inserir Registro #01</div>

<?php

require_once "conexao.php";

$sql = "INSERT INTO cadastro
(nome, nascimento, email, site, filhos, salario)
VALUES (
    'Thiago Moura',
    '2000-04-02',
    'teste@teste.com',
    'https://teste.io',
    0,
    50000
)";

$conexao = novaConexao();

$resultado = $conexao->query($sql);

if ($resultado) {
    echo "Sucesso ao inserir registro!";
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();
