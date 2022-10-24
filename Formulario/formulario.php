<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="titulo">Formulário</div>

<h2>Cadastro</h2>

<?php
// VALIDAÇÕES!!
if (count($_POST) > 0) {

    $erros = [];
    // if (isset($_POST['nome'])) {
    // }
    if (!filter_input(INPUT_POST, "nome")) {
        $erros['nome'] = "Nome é obrigatório!";
    }

    if (filter_input(INPUT_POST, "nascimento")) {
        $data = DateTime::createFromFormat('d/m/Y', $_POST['nascimento']);
        if (!$data) {
            $erros['nascimento'] = "Data deve estar no formato dd/mm/aaaa!";
        }
    }

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $erros['email'] = "E-mail inválido!";
    }
    if (!filter_var($_POST['site'], FILTER_VALIDATE_URL)) {
        $erros['site'] = "Site inválido!";
    }

    $filhosConfig = ["options" => ["min_range" >= 0, "max_range" >= 20]];

    if (!filter_var($_POST['filhos'], FILTER_VALIDATE_INT, $filhosConfig) && $_POST['filhos'] != 0) {
        $erros['filhos'] = "Quantidade de filhos inválida!";
    }

    $salarioConfig = ["options" => ['decimal' => ',']];

    if (!filter_var($_POST['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)) {
        $erros['salario'] = "Salário inválido!";
    }
}
?>

<?php foreach($erros as $erro): ?>
    <div class="alert alert-danger" role="alert"> -->
        <?= $erro ?>
    </div>
<?php endforeach ?>

<form action="#" method="POST">
    <div class="form-row">
        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?= $_POST['nome'] ?>">

        </div>
        <div class="form-group col-md-6">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control" id="nascimento" name="nascimento" placeholder="Data de Nascimento" value="<?= $_POST['nascimento'] ?>">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" value="<?= $_POST['email'] ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control" id="site" name="site" placeholder="Site" value="<?= $_POST['site'] ?>">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Qtd. de Filhos</label>
            <input type="text" class="form-control" id="filhos" name="filhos" placeholder="Quantidade de Filhos" value="<?= $_POST['filhos'] ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" class="form-control" id="salario" name="salario" placeholder="salario" value="<?= $_POST['salario'] ?>">
        </div>
    </div>

    <button class="btn btn-primary btn-lg" style="margin-top: 20px;">Enviar!</button>

</form>