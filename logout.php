<?php

session_start();
session_destroy();

// PARA LIMPAR O COOKIE:
unset($_COOKIE['usuario']);
setcookie('usuario', ''); // O set cookie é para LIMPAR o valor

header('Location: login.php');