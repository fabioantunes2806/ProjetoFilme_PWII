<?php 
include('..\filme\protect.php');

if(!isset($_SESSION)) {
    session_start();
}

include("../estruturas/cabecalho.php")?>

    <title>Contato</title>

    <div class="section">
		<div class="container">
			<div class="full-height">
				<div class="center-box">
					<div class="card-3d-wrap">
						<div class="card-3d-wrapper">
							<div class="card-genero">
								<div class="center-wrap">
									<div class="text-center">
                                        <h4>Contato</h4>
                                        <form action="../contato/contato-salvar.php" method="post">
                                            <div class="form-group">
                                                <input type="text" name="txNome" class="form-style" placeholder="Seu nome" autocomplete="off">
                                            </div>	
                                            <div class="form-group">
                                                <input type="text" name="txEmail" class="form-style" placeholder="Seu email" autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="txAssunto" class="form-style" placeholder="Assunto" autocomplete="off">
                                            </div>
                                            <div class="form-group mt-2">
                                                <textarea name="txMensagem" class="form-style" placeholder="Mensagem" autocomplete="off"></textarea>
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