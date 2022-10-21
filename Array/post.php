<div class="titulo">$_POST</div>

<form action="#" method="POST">
    <!-- Esse "name" que será obtido quando consumir o $_POST -->
    <input type="text" name="nomePessoa"> 
    <input type="text" name="sobrenomePessoa"> 
    <button>Enviar!</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
print_r($_GET);
echo '<br>';
print_r($_POST);
