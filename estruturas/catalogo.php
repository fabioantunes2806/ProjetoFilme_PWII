<?php include("conexao.php"); ?>

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
                $stmt = $pdo->prepare("SELECT * FROM `filmes` WHERE id_filme = 1 or id_filme = 3;");	
                $stmt ->execute();
                
                ($row = $stmt ->fetch(PDO::FETCH_BOTH))  ?>
    <div class="conteiner-carousel">
        <div class="slider">
            <img class="filme" src="<?php echo $row[8] ?>" alt="Cartaz A Viagem de Chihiro" class="proporcaoFilme">
            <img class="filme" src="../estruturas/img/yugioh.jpg" alt="Cartaz Yu-gi-oh - O Lado Negro das Dimensões" class="proporcaoFilme">
            <img class="filme" src="../estruturas/img/malevola.jpg" alt="Cartaz Malévola - Dona do Mal" class="proporcaoFilme">
            <img class="filme" src="../estruturas/img/invocacaoDoMal1.jpg" alt="Cartaz Primeiro Invocação do Mal" class="proporcaoFilme">
            <img class="filme" src="../estruturas/img/aCasadoTerror.jpg" alt="Cartaz A Casa do Terror" class="proporcaoFilme">
            <img class="filme" src="../estruturas/img/oExorcista.jpg" alt="Cartaz O Exorcista" class="proporcaoFilme">
            <img class="filme" src="../estruturas/img/doutorEstranho2.jpeg" alt="Cartaz Doutor Estranho no Multiverso da Loucura" class="proporcaoFilme">
            <img class="filme" src="../estruturas/img/velozeseFuriosos7.jpg"  alt="Cartaz Velozes e Furiosos 7" class="proporcaoFilme">
            <img class="filme" src="../estruturas/img/jumanji2.jpg" alt="Cartaz Jumanji: Bem-vindo á Selva" class="proporcaoFilme">
        </div>
        
        <button class="handle right-handle">
            <div class="text">&#8250;</div>
        </button>
    </div>

    <h1 class="titulo">Fantasia</h1>
    <section class="container">    
        <div class="container__generosIndex">
            <img class="filme" src="../estruturas/img/chihiro.jpg" alt="Cartaz A Viagem de Chihiro" class="proporcaoFilme">
            <img class="filme" src="../estruturas/img/yugioh.jpg" alt="Cartaz Yu-gi-oh - O Lado Negro das Dimensões" class="proporcaoFilme">
            <img class="filme" src="../estruturas/img/malevola.jpg" alt="Cartaz Malévola - Dona do Mal" class="proporcaoFilme">
        </div>
    </section>

    <h1 class="titulo">Terror</h1>
    <section class="container">    
        <div class="container__generosIndex">
            <img class="filme" src="../estruturas/img/invocacaoDoMal1.jpg" alt="Cartaz Primeiro Invocação do Mal" class="proporcaoFilme">
            <img class="filme" src="../estruturas/img/aCasadoTerror.jpg" alt="Cartaz A Casa do Terror" class="proporcaoFilme">
            <img class="filme" src="../estruturas/img/oExorcista.jpg" alt="Cartaz O Exorcista" class="proporcaoFilme">
        </div>
    </section>

    <h1 class="titulo">Ação e Aventura</h1>
    <section class="container">   
        <div class="container__generosIndex">
            <img class="filme" src="../estruturas/img/doutorEstranho2.jpeg" alt="Cartaz Doutor Estranho no Multiverso da Loucura" class="proporcaoFilme">
            <img class="filme" src="../estruturas/img/velozeseFuriosos7.jpg"  alt="Cartaz Velozes e Furiosos 7" class="proporcaoFilme">
            <img class="filme" src="../estruturas/img/jumanji2.jpg" alt="Cartaz Jumanji: Bem-vindo á Selva" class="proporcaoFilme">
        </div>
    </section>
</div>

</body>
</html>

