<?php

session_start(); // Precisa sempre ter o session start para usar e manipular as sessões!!
print_r($_SESSION);

?>

<p>
    <b>Nome: </b> <?= $_SESSION['nome'] ?><br>
    <b>Idade: </b><?= $_SESSION['idade'] ?>
</p>

<?php

$_SESSION['idade'] = 22;
?>

<p>
    <a href="basico_sessao.php">Voltar</a>
</p>
<p>
    <a href="basico_sessao_limpar.php">Limpar Sessão</a>
</p>