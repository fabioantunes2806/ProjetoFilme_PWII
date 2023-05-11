<?php

    $id = $_GET['id'];

    //echo $id;

    include("conexao.php");

    $stmt = $pdo->prepare("delete from filmes where id_filme = $id");	    
	$stmt ->execute();    

    header("location:filme-lista.php"); 



?>