<?php

    $user = $_POST['txEmail'];
    $pass = $_POST['txSenha'];

    include("../filme/conexao.php");

    $stmt = $pdo->prepare("select * from tbUsuario
            where email='$user' and senha='$pass'"
            );	
    $stmt ->execute();

    $row = $stmt ->fetch(PDO::FETCH_BOTH);

    if($row==false){
        echo "Usuário e/ou senha inválidos";
    }else{
        echo "Usuário logado";
    }

//echo $row[1] . " ";

?>
    