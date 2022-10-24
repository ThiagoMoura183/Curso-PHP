<?php

session_start(); // Precisa sempre ter o session start para usar e manipular as sessões!!
session_destroy();
header('Location: basico_sessao.php');