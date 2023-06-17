<?php

include("../estruturas/cabecalho-visitante.php");


if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    die("Você não pode acessar esta página porque não está logado. Faça Login para continuar.");
}

include("../estruturas/rodape.php");
?>