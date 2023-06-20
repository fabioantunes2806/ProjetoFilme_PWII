<?php include("conexao.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
<title>Index</title>

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


    <h1 class="titulo">Fantasia</h1>
    <?php
                $stmt = $pdo->prepare("SELECT * FROM `filmes` WHERE id_filme = 3");	
                $stmt ->execute();
                
                ($row = $stmt ->fetch(PDO::FETCH_BOTH)) ?>
    <section class="conteiner-carousel">    
        <div class="container__generosIndex">
        <img class="filme" src="<?php echo $row[8] ?>" alt="Cartaz Yu-Gi-Oh" class="proporcaoFilme">
        <div id="container_destaque">
        <p class=container_destaque__info><?php echo $row[1]; ?> </p><br>
         <p> <?php echo $row[6]; ?> <p>
            </div>
        </div>
    </section>

    <h1 class="titulo">Terror</h1>
    <?php
                $stmt = $pdo->prepare("SELECT * FROM `filmes` WHERE id_filme = 5");	
                $stmt ->execute();
                
                ($row = $stmt ->fetch(PDO::FETCH_BOTH)) ?>
    <section class="conteiner-carousel">    
        <div class="container__generosIndex">
        <img class="filme" src="<?php echo $row[8] ?>" alt="Cartaz Invocação do Mal" class="proporcaoFilme">
        <div id="container_destaque">
        <p class=container_destaque__info><?php echo $row[1]; ?> </p><br>
         <p> <?php echo $row[6]; ?> <p>
            </div>
        </div>
    </section>

    <h1 class="titulo">Ação e Aventura</h1>
    <?php
                $stmt = $pdo->prepare("SELECT * FROM `filmes` WHERE id_filme = 8");	
                $stmt ->execute();
                
                ($row = $stmt ->fetch(PDO::FETCH_BOTH)) ?>
    <section class="conteiner-carousel">    
        <div class="container__generosIndex">
        <img class="filme" src="<?php echo $row[8] ?>" alt="Cartaz Yu-Gi-Oh" class="proporcaoFilme">
        <div id="container_destaque">
        <p class=container_destaque__info><?php echo $row[1]; ?> </p><br>
         <p> <?php echo $row[6]; ?> <p>
            </div>
        </div>
    </section>


    <?php
                $stmt = $pdo->prepare("SELECT * FROM `contato` WHERE id_contato = 2");	
                $stmt ->execute();
                
                ($row = $stmt ->fetch(PDO::FETCH_BOTH)) ?>
    <div>
        <?php echo "Usuário: $row[1]"; ?> <br>
        <h6><?php echo "Assunto:$row[3]"; ?><br>
        <?php echo "Mensagem: $row[4]";?>
    </div> 

</body>
</html>

