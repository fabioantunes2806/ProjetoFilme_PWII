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
    <h5>Filme</h5>

    <?php $id = $_GET['idfilme'];

    $stmt = $pdo->prepare("SELECT * FROM `filmes` WHERE id_filme = $id");	
    $stmt ->execute();

    ($row = $stmt ->fetch(PDO::FETCH_BOTH)); ?>

    <img src="<?php echo $row[9] ?>" alt="Cartaz A Viagem de Chihiro" class="proporcaoFilme">

    <p> <?php echo "Nome: $row[1]"; ?> </p></br>
    <p> <?php echo "Duração: $row[2]"; ?> </p></br>
    <p> <?php echo "Classificação Indicativa: $row[3]"; ?> </p></br>
    <p> <?php echo "Gênero: $row[4]"; ?> </p></br>
    <p> <?php echo "Diretor: $row[5]"; ?> </p></br>
    <p> <?php echo "Sinopse: $row[6]"; ?> </p></br>
    <p> <?php echo "Lançamento: $row[7]"; ?> </p>

    
</body>
</html>