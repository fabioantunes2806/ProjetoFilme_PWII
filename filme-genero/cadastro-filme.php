<title>Cadastro de Gênero</title>

<?php include("conexao.php"); ?>

<?php include("../estruturas/cabecalho.php")?>

    <div class="section">
		<div class="container">
			<div class="full-height">
				<div class="center-box">
					<div class="card-3d-wrap">
						<div class="card-3d-wrapper">
							<div class="card-filme">
								<div class="center-wrap">
									<div class="text-center">
                                        <h4>Cadastro de Gênero</h4>
                                        <form action="filme-salvar.php" enctype="multipart/form-data" method="post">      
                                            <div class="form-group">
                                                <input type="text" class="form-style" placeholder="Nome do Filme" name="txNomeFilme" />
                                                <input type="text" class="form-style" placeholder="Duração" name="txDuracao" />
                                                <select placeholder="Classificão Indicativa" class="form-style" name="txClassInd">
                                                    <?php
                                                        $stmt = $pdo->prepare("select * from class_ind");	
                                                        $stmt ->execute();            
                                                        while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
                                                    ?>    
                                                        <option value="<?php echo $row['id_classind'] ?>"> 
                                                            <?php echo $row['class_ind'] ?>
                                                        </option>           
                                                    <?php }	?>
                                                </select>
                                                <input type="text" class="form-style" placeholder="Diretor" name="txDiretor" />
                                                <input type="text" class="form-style" placeholder="Sinopse" name="txSinopse" />
                                                <input type="text" class="form-style" placeholder="Lançamento" name="txLancamento" />
                                                <select placeholder="Gênero" class="form-style" name="txGenero">
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
                                                <input type="file" class="form-style" name="arqimage" class='Insira um nome aqui' />
                                                <input type="file" class="form-style" name="arqbanner" class='Insira um nome aqui' />
                                            </div>
                                            <input type="submit" class="btn" value="Salvar" />
                                        </form> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>