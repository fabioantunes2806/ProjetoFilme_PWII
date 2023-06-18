<?php
/*
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

//echo $row[1] . " "; */

include("conexao.php");

	if(isset($_POST['txEmail']) || isset($_POST['txSenha'])) {

	if(isset($_POST['txEmail']) == 0) {
		echo "Preencha seu e-mail";
	}else if(strlen($_POST['txSenha']) == 0) {
		echo "Preencha sua senha";
	}else{

		$email = $mysqli ->real_scape_string($_POST['txEmail']);
		$senha = $mysqli ->real_scape_string($_POST['txSenha']);

		$sql_code = "SELECT * FROM tbusuario WHERE email = '$email' AND senha = '$senha'";
		$sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

		$quantidade = $sql_query->num_rows;
		
		if($quantidade == 1) {

			$usuario = $sql_query->fetch_assoc();

			if(!isset($_SESSION)) {
				session_start();
			}

			$_SESSION['user'] = $usuario['id'];
			$_SESSION['nome'] = $usuario['username'];

			header("Location: index-usuario.php");
			
		} else {
		echo "Falha ao logar! E-mail ou senha incorretos";
		}
	}		
}

?>
    