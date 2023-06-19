<title>Cadastro de Gênero</title>

<?php include("../estruturas/cabecalho.php")?>

    <div class="section">
		<div class="container">
			<div class="full-height">
				<div class="center-box">
					<div class="card-3d-wrap">
						<div class="card-3d-wrapper">
							<div class="card-genero">
								<div class="center-wrap">
									<div class="text-center">
                                        <h4>Cadastro de Gênero</h4>
                                        <form action="genero-salvar.php" method="post">      
                                            <div class="form-group">
                                                <input type="text" name="txGenero" class="form-style" placeholder="Genero"/>
                                            </div>
                                            <input type="submit" class="btn" value="Enviar">
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

<?php include("../estruturas/rodape.php")?>
