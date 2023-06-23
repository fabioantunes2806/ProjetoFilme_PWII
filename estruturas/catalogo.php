<?php include("conexao.php"); ?>

<?php
            $stmt = $pdo->prepare("select * from filmes where Nome_filme = 'One Piece Film: Red'");	
            $stmt ->execute();

            ($row = $stmt ->fetch(PDO::FETCH_BOTH)); ?>

<h1 class="titulo">Destaque</h1>
		<div class="container"> 
			<img class="container-img" src="<?php echo $row[8] ?>" alt="Capa One Piece Film: RED">
			<div class="container-destaque">         
				<p><strong>DIRETOR DE ANIMAÇÃO</strong></p>
				<p class="container-destaque-info">
					<?php echo $row[5] ?>
				</p>
				<p><strong>Sinopse</strong></p>
				<p class="container-destaque-info sinopse">
					<?php echo $row[6] ?>
				</p>
				<p><strong>Gênero</strong></p>
				<p class="container-destaque-info">
					<?php  $stmt = $pdo->prepare("select * from genero where id_genero= $row[4]");	
						$stmt ->execute();            
						($row = $stmt ->fetch(PDO::FETCH_BOTH));
						echo $row[1];  ?>
				</p>
			</div>
		</div> 


     <?php   $stmt = $pdo->prepare("select * from filmes where id_filme = 3");	
            $stmt ->execute();

            ($row = $stmt ->fetch(PDO::FETCH_BOTH)); ?>

		<h1 class="titulo">Fantasia</h1>
		<div class="container"> 
			<img class="container-img" src="<?php echo $row[8] ?>" alt="Capa One Piece Film: RED">
			<div class="container-destaque">          
				<p><strong>DIRETOR DE ANIMAÇÃO</strong></p><br>
				<p class="container-destaque-info">
                  <?php echo $row[5] ?>
				</p><br>
				<p><strong>Sinopse</strong></p><br>
				<p class="container-destaque-info sinopse">
                     <?php echo $row[6] ?>
				</p><br>
				</p> 
			</div>
		</div>

        <?php   $stmt = $pdo->prepare("select * from filmes where id_filme = 5");	
            $stmt ->execute();

            ($row = $stmt ->fetch(PDO::FETCH_BOTH)); ?>

		<h1 class="titulo">Terror</h1>
		<div class="container"> 
			<img class="container-img" src=" <?php echo $row[8] ?>" alt="Capa One Piece Film: RED">
			<div class="container-destaque">          
				<p><strong>DIRETOR DE ANIMAÇÃO</strong></p><br>
				<p class="container-destaque-info">
                  <?php echo $row[5] ?>
				</p><br>
				<p><strong>RESUMO</strong></p><br>
				<p class="container-destaque-info sinopse">
                    <?php echo $row[6] ?>
				</p><br>
				</p> 
			</div>
		</div>

        <?php   $stmt = $pdo->prepare("select * from filmes where id_filme = 8");	
            $stmt ->execute();

            ($row = $stmt ->fetch(PDO::FETCH_BOTH)); ?>

		<h1 class="titulo">Ação e Aventura</h1>
		<div class="container"> 
			<img class="container-img" src="<?php echo $row[8] ?>" alt="Capa One Piece Film: RED">
			<div class="container-destaque">          
				<p><strong>DIRETOR DE ANIMAÇÃO</strong></p><br>
				<p class="container-destaque-info">
                 <?php echo $row[5] ?>
				</p><br>
				<p><strong>RESUMO</strong></p><br>
				<p class="container-destaque-info sinopse">
                    <?php echo $row[6] ?>
				</p><br>
				</p> 
			</div>
		</div>

        <?php   $stmt = $pdo->prepare("select * from filmes where id_filme = 35");	
            $stmt ->execute();

            ($row = $stmt ->fetch(PDO::FETCH_BOTH)); ?>

		<h1 class="titulo">Comédia</h1>
		<div class="container"> 
			<img class="container-img" src="  <?php echo $row[8] ?>" alt="Capa One Piece Film: RED">
			<div class="container-destaque">          
				<p><strong>DIRETOR DE ANIMAÇÃO</strong></p><br>
				<p class="container-destaque-info">
                    <?php echo $row[5] ?>
				</p><br>
				<p><strong>Sinopse</strong></p><br>
				<p class="container-destaque-info sinopse">
                    <?php echo $row[6] ?>
				</p><br>
				</p> 
			</div>
		</div>