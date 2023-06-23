<?php include("../estruturas/cabecalho.php")?>

<?php include('conexao.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $id = $_GET['idfilme']; ?>

<div class="background">
    <?php   $stmt = $pdo->prepare("SELECT * FROM `filmes` WHERE id_filme = $id");	
            $stmt ->execute();
        
            ($row = $stmt ->fetch(PDO::FETCH_BOTH)); ?>
        <img src="<?php echo $row[9] ?>" alt="Cartaz A Viagem de Chihiro" class="backgroundImage">
        <img src="<?php echo $row[9] ?>" alt="Cartaz A Viagem de Chihiro" class="proporcaoFilme">
        <div class="descFilme">
            <div class="infoFilme">
                <p class="titleFilme"><?php echo $row[1] ?></p>
                <p>
                    <?php echo $row[6] ?>
                </p>
            </div>
            <div class="infoFilmeExtra">
				<p>Duração: <?php echo $row[2] ?></p>

                <?php   $stmt = $pdo->prepare("SELECT * FROM `class_ind` WHERE id_classind = $row[3]");	
            $stmt ->execute();
            ($row1 = $stmt ->fetch(PDO::FETCH_BOTH)); ?>
				<p>Classificação Indicativa: <?php echo $row1[1] ?> </p>
				    
                <?php   $stmt = $pdo->prepare("SELECT * FROM `genero` WHERE id_genero = $row[4]");	
            $stmt ->execute();
            ($row2 = $stmt ->fetch(PDO::FETCH_BOTH)); ?>
                <p>Gênero: <?php echo $row2[1] ?></p>
				<p>Diretor: <?php echo $row[5] ?></p>
				<p>Lançamento: <?php echo $row[7] ?></p> 
            </div>  
        </div>
    </div>	
    
</body>
</html>