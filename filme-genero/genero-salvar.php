<?php  
    $Genero = $_POST['txGenero'];

    
    include("conexao.php");

    $stmt = $pdo->prepare("insert into genero
    values(null,'$Genero')");	    
	$stmt ->execute();    

    header("location:cadastro-genero.php");    
    
?>