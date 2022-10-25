<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Remover Registros #02</div>

<?php

require_once "conexao.php";

$conexao = novaConexao();
$registros = [];

$sql = "SELECT * FROM cadastro";
$resultado = $conexao->query($sql);

if ($_GET['excluir']) {
    $excluirSQL = "DELETE FROM cadastro WHERE id = ?";
    $stmt = $conexao->prepare($excluirSQL); // Isso impede o SQL injection!!
    $stmt->bind_param("i",$_GET['excluir']);
    $stmt->execute();
}


if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $registros[] = $row;
    }
} elseif ($conexao->error) {
    echo "Erro: " . $conexao->error;
}

$conexao->close();
?>

<table class="table table-hover table-striped table-bordered">
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Nascimento</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach ($registros as $registro) : ?>
            <tr>
                <td><?= $registro['id'] ?></td>
                <td><?= $registro['nome'] ?></td>
                <td><?= $registro['email'] ?></td>
                <td>
                    <?=
                    date('d/m/Y', strtotime($registro['nascimento']))
                    ?>
                </td>
                <td>
                    <a href="/exercicio.php?dir=db&file=excluir_2&excluir=<?= $registro['id'] ?>" class="btn btn-danger">
                        Excluir
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
    table>* {
        font-size: 1.2rem;
    }
</style>