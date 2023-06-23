<?php

    $id = $_GET['id'];

    //echo $id;

    include("conexao.php");

    $stmt = $pdo->prepare("delete from genero where id_genero = $id");	    
	$stmt ->execute();    

    header("location:genero-lista.php"); 



?>