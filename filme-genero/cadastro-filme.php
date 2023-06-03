<?php include("conexao.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Filme</title>
</head>
    <body>

        <section>

            <form action="filme-salvar.php"  enctype="multipart/form-data" method="post">      
                <input type="text" placeholder="Nome do Filme" name="txNomeFilme" />
                <input type="text" placeholder="Duração" name="txDuracao" />
                <select placeholder="Classificão Indicativa" name="txClassInd">
                    <?php
                        $stmt = $pdo->prepare("select * from class_ind");	
                        $stmt ->execute();            
                        while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
                    ?>    
                        <option value="<?php echo $row['id_classind'] ?>"> 
                            <?php echo $row['class_ind'] ?>
                        </option>           
                    <?php }	?>
                </select>
                <input type="text" placeholder="Diretor" name="txDiretor" />
                <input type="text" placeholder="Sinopse" name="txSinopse" />
                <input type="text" placeholder="Lançamento" name="txLancamento" />
                <select placeholder="Gênero" name="txGenero">
                    <?php
                        $stmt = $pdo->prepare("select * from genero");	
                        $stmt ->execute();            
                        while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
                    ?>    
                        <option value="<?php echo $row['id_genero'] ?>"> 
                            <?php echo $row['Genero'] ?>
                        </option>           
                    <?php }	?>
                </select>
                <input type="file" name="arqimage" class='Insira um nome aqui' />
                <input type="submit" value="Salvar" />
            </form>
            
        </section>
        
    </body>
</html>