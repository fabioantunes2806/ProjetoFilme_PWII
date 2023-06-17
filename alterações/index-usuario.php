<?php

include('protect.php');

if(!isset($_SESSION)) {
    session_start();
}
?>

<?php include("../estruturas/cabecalho.php")?>

<?php include("../estruturas/catalogo.php")?>

<?php include("../estruturas/rodape.php")?>