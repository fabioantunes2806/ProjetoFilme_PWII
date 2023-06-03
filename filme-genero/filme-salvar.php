<?php  
    $Nome_filme = $_POST['txNomeFilme'];
    $duracao = $_POST['txDuracao'];
    $id_classind = $_POST['txClassInd'];
    $id_genero = $_POST['txGenero'];
    $diretor = $_POST['txDiretor'];
    $sinopse = $_POST['txSinopse'];
    $lancamento = $_POST['txLancamento'];
    $Img1 = $_POST['txImg1'];
    $Img2 = $_POST['txImg2'];
    
    include("conexao.php");

    $stmt = $pdo->prepare("insert into filmes
    values(null,'$Nome_filme','$duracao','$id_classind','$id_genero','$diretor','$sinopse','$lancamento','$Img1','$Img2')");	    
	$stmt ->execute();    

    header("location:cadastro-filme.php");   
    

    //imagem do marcador
    if(isset($_FILES["arqimage"]["name"])){
        $arqINome = $_FILES["arqimage"]["name"];
        $arqITipo = $_FILES["arqimage"]["type"];
        $arqITamanho = $_FILES["arqimage"]["size"];
        $arqINomeTemp = $_FILES["arqimage"]["tmp_name"];
        $erroImgMarc = $_FILES["arqimage"]["error"];

        if($erroImgMarc==0){
            if(is_uploaded_file($arqINomeTemp)){
                if(move_uploaded_file($arqINomeTemp,"../ProjetoFilme/img/". $arqINome)){
                    $caminhoI = $arqINome;
                }
                else{
                    $erro = "Falha ao mover imagem do marcador";
                    echo "$erro";
                }
            }
            else{
                $erro = "Erro no envio: A imagem do marcador não foi recebida com sucesso.";
                echo "$erro";
            }
        }
        else{
            $erro = "Erro no envio: ". $erro;
            echo "$erro";
        }
    }
    else{
        $erro = "Imagem do Marcador enviado não encontrada";
        echo "$erro";
    }
    
?>