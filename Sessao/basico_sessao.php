<div class="titulo">Basico</div>

<?php
session_start(); // Precisa sempre ter o session start para usar e manipular as sessões!!

print_r($_SESSION);

echo '<br>';

if(!$_SESSION['nome']) {
    $_SESSION['nome'] = 'Thiago';
}

if(!$_SESSION['idade']) {
    $_SESSION['idade'] = 22;
}

print_r($_SESSION);

?>

<p>
    <a href="/Sessao/basico_sessao_alterar.php">Alterar Sessão</a>
</p>