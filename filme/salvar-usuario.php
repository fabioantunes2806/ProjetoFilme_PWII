<?php  

    $nome = $_POST['regName'];
    $emailuser = $_POST['regEmail'];
    $senhauser = $_POST['regPass'];
    

    include("conexao.php");

  /*  $consulta = $pdo->prepare("SELECT * FROM 'tbusuario' WHERE 'email' =?");
    $consulta->execute();

    if ($consulta->rowCount() == 1) {
        echo "e-mail já cadastrado";
    }else{
        
    }  */

    $stmt = $pdo->prepare("insert into tbusuario
        values(null,'$nome','$emailuser','$senhauser')");	    
        $stmt ->execute();  

    header("location:login.php");
    
?>