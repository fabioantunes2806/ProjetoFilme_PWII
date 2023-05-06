<?php  
    $Nome_filme = $_POST['txNomeFilme'];
    $duracao = $_POST['txDuracao'];
    $classificacao_indicativa = $_POST['txClassInd'];
    $id_genero = $_POST['txGenero'];
    
    include("conexao.php");

    $stmt = $pdo->prepare("insert into filmes
    values(null,'$Nome_filme','$duracao','$classificacao_indicativa','$mensagem')");	    
	$id_genero ->execute();    

    header("location:Cadastro_filmes.php");    
    
?>