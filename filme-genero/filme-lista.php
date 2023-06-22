<?php include("conexao.php"); 

include("../estruturas/cabecalho.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <title>Lista de Filmes</title>
</head>
<body>

<!-- Pesquisa -->
<section>
  <div>
  <h2>Pesquisar filme</h2>
  </div>
  <form method="post">
    <div>
      <input type="text" placeholder="Nome do filme" name="txPesquisar" required />
    </div>  
    <div>
      <button> Pesquisar </button>
    </div>  
    </form>
  </section>

  <!-- Tabela -->
    <section>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Duração</th>
                <th scope="col">Classificação Indicativa</th>
                <th scope="col">Gênero</th>			
                <th scope="col">Diretor</th>	
                <th scope="col">Sinopse</th>	
                <th scope="col">Lançamento</th>	
                <th scope="col">Imagem 1</th>	
                <th scope="col">Imagem 2</th>	
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
            <?php

              if(isset($_POST['txPesquisar'])){
                $nome = $_POST['txPesquisar'];
                $stmt = $pdo -> prepare("SELECT * FROM filmes where Nome_filme like '%$nome%'");
              }else{
                $stmt = $pdo->prepare("select * from filmes");	
              }

                
                $stmt ->execute();
                
                while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
                  echo "<tr class='celula'>";
                    echo "<td> $row[0] </td>";						
                    echo "<td> $row[1] </td>";						
                    echo "<td> $row[2] </td>";						
                    echo "<td> $row[3] </td>";		
                    echo "<td> $row[4] </td>";	
                    echo "<td> $row[5] </td>";
                    echo "<td> $row[6] </td>";
                    echo "<td> $row[7] </td>";
                    echo "<td> $row[8] </td>";
                    echo "<td> $row[9] </td>";
                    echo "<td> 
                            <a href='filme-remover.php?id=$row[0]'> Remover </a>
                          </td>";
                  echo "</tr>";
                }	
            ?>
            </tbody>
        </table>
    </section>

    <!--
    <div class="alert alert-primary" role="alert">
      A simple primary alert—check it out!
    </div>
    <div class="alert alert-secondary" role="alert">
      A simple secondary alert—check it out!
    </div>
    <div class="alert alert-success" role="alert">
      A simple success alert—check it out!
    </div>
    <div class="alert alert-danger" role="alert">
      A simple danger alert—check it out!
    </div>
    <div class="alert alert-warning" role="alert">
      A simple warning alert—check it out!
    </div>
    <div class="alert alert-info" role="alert">
      A simple info alert—check it out!
    </div>
    <div class="alert alert-light" role="alert">
      A simple light alert—check it out!
    </div>
    <div class="alert alert-dark" role="alert">
      A simple dark alert—check it out!
    </div>
    -->
    
</body>
</html>