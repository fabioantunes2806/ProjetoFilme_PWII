<?php  

    $nome = $_POST['txNome'];
    $email = $_POST['txEmail'];
    $assunto = $_POST['txAssunto'];
    $mensagem = $_POST['txMensagem'];
    

    include("conexao.php");

    $stmt = $pdo->prepare("insert into contato
    values(null,'$nome','$email','$assunto','$mensagem')");	    
	$stmt ->execute();    

    header("location:contato.php");
    
?>