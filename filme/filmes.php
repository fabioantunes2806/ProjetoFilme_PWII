<?php include("../estruturas/cabecalho.php");
    
    include('conexao.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
<title>Filmes</title>


<?php
                $stmt = $pdo->prepare("select * from filmes where Nome_filme = 'One Piece Film: Red'");	
                $stmt ->execute();

    ($row = $stmt ->fetch(PDO::FETCH_BOTH)); ?>

<div class="background">
    <h2 class="titulo">Fantasia</h2>
    <div class="container-filmes">
        <?php
            /*$stmt = $pdo->prepare("SELECT * FROM `filmes` WHERE id_genero = 1");	*/
            $stmt = $pdo->prepare("SELECT * FROM `filmes` WHERE id_filme in (1,3,4,5,6,7,8,9,10)");
            $stmt ->execute();
            while($row = $stmt ->fetch(PDO::FETCH_BOTH)) { ?>
                <a href="../estruturas/filme-individual.php?idfilme=<?php echo $row[0] ?>">
                    <img class="filme" src="<?php echo $row[8] ?>" alt="Cartaz A Viagem de Chihiro" class="proporcaoFilme">
                </a>
        <?php } ?>
    </div>   


    <button class="handle left-handle">
        <div class="text">&#8249;</div>
    </button>
    <?php
                $stmt = $pdo->prepare("SELECT * FROM `filmes` WHERE id_filme in (1,3,4,5,6,7,8,9,10)");	
                $stmt ->execute();
                
                while($row = $stmt ->fetch(PDO::FETCH_BOTH)) { ?>
    <div class="conteiner-carousel">
        <div class="slider">
            <a href="../estruturas/filme-individual.php?idfilme=<?php echo $row[0] ?>">
            <img class="filme" src="<?php echo $row[8] ?>" alt="Cartaz A Viagem de Chihiro" class="proporcaoFilme">
            </a>
        </div>
                <?php } ?>
        <button class="handle right-handle">
            <div class="text">&#8250;</div>
        </button>
    </div>


    <h1 class="titulo">Fantasia</h1>
    <?php
                $stmt = $pdo->prepare("SELECT * FROM `filmes` WHERE id_genero = 1");	
                $stmt ->execute();
                
                while($row = $stmt ->fetch(PDO::FETCH_BOTH)) { ?>
     <a href="../estruturas/filme-individual.php?idfilme=<?php echo $row[0] ?>">
    <section class="conteiner-carousel">    
        <div class="container__generosIndex">
            <img class="filme" src="<?php echo $row[8] ?>" alt="Cartaz A Viagem de Chihiro" class="proporcaoFilme">
        </div>
        <?php } ?>
    </section>

    <h1 class="titulo">Terror</h1>
    <?php
                $stmt = $pdo->prepare("SELECT * FROM `filmes` WHERE id_genero = 2");	
                $stmt ->execute();
                
                while($row = $stmt ->fetch(PDO::FETCH_BOTH)) { ?>
     <a href="../estruturas/filme-individual.php?idfilme=<?php echo $row[0] ?>">
    <section class="conteiner-carousel">    
        <div class="container__generosIndex">
        <img class="filme" src="<?php echo $row[8] ?>" alt="Cartaz A Viagem de Chihiro" class="proporcaoFilme">
        </div>
        <?php } ?>
    </section>

    <h1 class="titulo">Ação e Aventura</h1>
    <?php
                $stmt = $pdo->prepare("SELECT * FROM `filmes` WHERE id_genero = 4");	
                $stmt ->execute();
                
                while($row = $stmt ->fetch(PDO::FETCH_BOTH)) { ?>
     <a href="../estruturas/filme-individual.php?idfilme=<?php echo $row[0] ?>">
    <section class="container-carousel">   
        <div class="container__generosIndex">
        <img class="filme" src="<?php echo $row[8] ?>" alt="Cartaz Filme Fantasia" class="proporcaoFilme">
        </div>
        <?php } ?>
    </section>
</div>

<?php include("../estruturas/rodape.php")?>

</body>
</html>