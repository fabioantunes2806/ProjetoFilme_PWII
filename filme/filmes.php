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

<section>
<?php
                $stmt = $pdo->prepare("select * from filmes where Nome_filme = 'One Piece Film: Red'");	
                $stmt ->execute();

    ($row = $stmt ->fetch(PDO::FETCH_BOTH)); ?>

<div class="background">
    <h1 class="titulo">Destaque</h1>
    <div class="container">  
        <img id="imgDestaque" src="<?php echo $row[8] ?>" alt="Capa One Piece Film: RED">
        <div id="container_destaque">          
            <p><strong>DIRETOR DE ANIMAÇÃO</strong></p><br>
            <p class="container_destaque__info"><?php echo "<td> $row[5] </td>" ?></p><br>
            <p><strong>RESUMO</strong></p><br>
            <p class="container_destaque__info"><?php echo "<td> $row[6] </td>" ?></p><br>
            <p><strong>Gênero</strong></p><br>
            <p class="container_destaque__info"><?php
                        $stmt = $pdo->prepare("select * from genero where id_genero=4");	
                        $stmt ->execute();            
                        ($row = $stmt ->fetch(PDO::FETCH_BOTH));
                         echo $row[1];  ?></p>
        </div>
    </div>
</section>

    <button class="handle left-handle">
        <div class="text">&#8249;</div>
    </button>
    <?php
                $stmt = $pdo->prepare("SELECT * FROM `filmes` WHERE id_filme = 1 or id_filme = 3 or id_filme = 4 or id_filme = 5 or id_filme = 6 or id_filme = 7
                or id_filme = 8 or id_filme = 9 or id_filme = 10;");	
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