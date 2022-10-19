<div class="titulo">Integração HTML</div>

<h1>
<?php
    echo 'Olá';
    echo '<small>';
    echo ' Mundo';
    echo '</small>';
?>
</h1>

<!-- Essa forma de escrita é LINEAR, novas linhas não serão interpretadas. -->
<?= "<div>Outra forma de me 'expressar'!</div>"?>

<br>
<div><button><?= "Legal" ?></button></div>