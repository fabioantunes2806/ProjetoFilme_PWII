<?php 

    include('protect.php');

    if(!isset($_SESSION)) {
        session_start();
    }

    include("../estruturas/cabecalho.php");
    
    include('conexao.php'); ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<title>Filmes</title>


<div class="background">
    <h2 class="titulo">Fantasia</h2>
    <div class="container-filmes">
        <div class = "filmes">
        <?php
            $stmt = $pdo->prepare("SELECT * FROM `filmes` WHERE id_genero = 1");	
           /* $stmt = $pdo->prepare("SELECT * FROM `filmes` WHERE id_filme in (1,3,4,5,6,7,8,9,10)"); */
            $stmt ->execute();
            while($row = $stmt ->fetch(PDO::FETCH_BOTH)) { ?>
                <a href="../estruturas/filme-individual.php?idfilme=<?php echo $row[0] ?>">
                    <img class="filme" src="<?php echo $row[8] ?>" alt="Cartaz A Viagem de Chihiro" class="proporcaoFilme">
                </a>
        <?php } ?>
    </div>   
      </div>      
      
<div class="background">
    <h2 class="titulo">Terror</h2>
    <div class="container-filmes">
        <div class = "filmes">
        <?php
            $stmt = $pdo->prepare("SELECT * FROM `filmes` WHERE id_genero = 2");	
            $stmt ->execute();
            while($row = $stmt ->fetch(PDO::FETCH_BOTH)) { ?>
                <a href="../estruturas/filme-individual.php?idfilme=<?php echo $row[0] ?>">
                    <img class="filme" src="<?php echo $row[8] ?>" alt="Cartaz A Viagem de Chihiro" class="proporcaoFilme">
                </a>
        <?php } ?>
    </div>   
      </div>      

<div class="background">
    <h2 class="titulo">Ação e Aventura</h2>
    <div class="container-filmes">
        <div class = "filmes">
        <?php
            $stmt = $pdo->prepare("SELECT * FROM `filmes` WHERE id_genero = 4");	
            $stmt ->execute();
            while($row = $stmt ->fetch(PDO::FETCH_BOTH)) { ?>
                <a href="../estruturas/filme-individual.php?idfilme=<?php echo $row[0] ?>">
                    <img class="filme" src="<?php echo $row[8] ?>" alt="Cartaz A Viagem de Chihiro" class="proporcaoFilme">
                </a>
        <?php } ?>
    </div>   
      </div>      

<div class="background">
    <h2 class="titulo">Comédia</h2>
    <div class="container-filmes">
        <div class = "filmes">
        <?php
            $stmt = $pdo->prepare("SELECT * FROM `filmes` WHERE id_genero = 5");	
            $stmt ->execute();
            while($row = $stmt ->fetch(PDO::FETCH_BOTH)) { ?>
                <a href="../estruturas/filme-individual.php?idfilme=<?php echo $row[0] ?>">
                    <img class="filme" src="<?php echo $row[8] ?>" alt="Cartaz A Viagem de Chihiro" class="proporcaoFilme">
                </a>
        <?php } ?>
    </div>   
      </div>      

<div class="background">
    <h2 class="titulo">Romance</h2>
    <div class="container-filmes">
        <div class = "filmes">
        <?php
            $stmt = $pdo->prepare("SELECT * FROM `filmes` WHERE id_genero = 3");	
            $stmt ->execute();
            while($row = $stmt ->fetch(PDO::FETCH_BOTH)) { ?>
                <a href="../estruturas/filme-individual.php?idfilme=<?php echo $row[0] ?>">
                    <img class="filme" src="<?php echo $row[8] ?>" alt="Cartaz A Viagem de Chihiro" class="proporcaoFilme">
                </a>
        <?php } ?>
    </div>   
      </div>      

            

<?php include("../estruturas/rodape.php")?>

</body>
</html>