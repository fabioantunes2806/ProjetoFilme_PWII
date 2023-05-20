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

            <form action="filme-salvar.php" method="post">      
                <div>
                    <input type="text" placeholder="Nome do Filme" name="txNomeFilme" />
                </div>		

                <div>
                    <input type="text" placeholder="Duração" name="txDuracao" />
                </div>		

                <div>
                    <input type="text" placeholder="Classificação Indicativa" name="txClassInd" />
                </div>		

                <div>
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
                </div>

                <div>
                    <input type="submit" value="Salvar" />
                </div>
            </form>
            
        </section>
        
    </body>
</html>