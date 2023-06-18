<?php  
    $Nome_filme = $_POST['txNomeFilme'];
    $duracao = $_POST['txDuracao'];
    $id_classind = $_POST['txClassInd'];
    $id_genero = $_POST['txGenero'];
    $diretor = $_POST['txDiretor'];
    $sinopse = $_POST['txSinopse'];
    $lancamento = $_POST['txLancamento'];

    include("conexao.php");


    //imagem do marcador 1
    if(isset($_FILES["arqimage"]["name"])){
        $arqINome = $_FILES["arqimage"]["name"];
        $arqITipo = $_FILES["arqimage"]["type"];
        $arqITamanho = $_FILES["arqimage"]["size"];
        $arqINomeTemp = $_FILES["arqimage"]["tmp_name"];
        $erroImgMarc = $_FILES["arqimage"]["error"];

        if($erroImgMarc==0){
            if(is_uploaded_file($arqINomeTemp)){
                if(move_uploaded_file($arqINomeTemp,"../estruturas/img/". $arqINome)){
                    $caminhoI = '../estruturas/img/' .$arqINome;
      
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

     //imagem do marcador 2
     if(isset($_FILES["arqbanner"]["name"])){
        $arqINome2 = $_FILES["arqbanner"]["name"];
        $arqITipo2 = $_FILES["arqbanner"]["type"];
        $arqITamanho2 = $_FILES["arqbanner"]["size"];
        $arqINomeTemp2 = $_FILES["arqbanner"]["tmp_name"];
        $erroImgMarc2 = $_FILES["arqbanner"]["error"];

        if($erroImgMarc2==0){
            if(is_uploaded_file($arqINomeTemp2)){
                if(move_uploaded_file($arqINomeTemp2,"../estruturas/img/". $arqINome2)){
                    $caminhoII = '../estruturas/img/' .$arqINome2;

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
    
    
    $stmt = $pdo->prepare("insert into filmes
    values(null,'$Nome_filme','$duracao','$id_classind','$id_genero','$diretor','$sinopse','$lancamento','$caminhoI','$caminhoII')");	    
	$stmt ->execute();    

    header("location:cadastro-filme.php");   
?>