<?php

    $id = $_GET['id'];

    //echo $id;

    include("conexao.php");

    $stmt = $pdo->prepare("delete from contato where id_Contato = $id");	    
	$stmt ->execute();    

    header("location:contato-lista.php"); 



?>