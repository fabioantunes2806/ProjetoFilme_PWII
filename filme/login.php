<?php include("../estruturas/cabecalho-visitante.php")
/*include("conexao.php");

	if(isset($_POST['txEmail']) || isset($_POST['txSenha'])) {

	if(isset($_POST['txEmail']) == 0) {
		echo "Preencha seu e-mail";
	}else if(strlen($_POST['txSenha']) == 0) {
		echo "Preencha sua senha";
	}else{

		$email = $mysqli ->real_scape_string($_POST['txEmail']);
		$senha = $mysqli ->real_scape_string($_POST['txSenha']);

		$sql_code = "SELECT * FROM tbusuario WHERE email = '$email' AND senha = '$senha'";
		$sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

		$quantidade = $sql_query->num_rows;
		
		if($quantidade == 1) {

			$usuario = $sql_query->fetch_assoc();

			if(!isset($_SESSION)) {
				session_start();
			}

			$_SESSION['user'] = $usuario['id'];
			$_SESSION['nome'] = $usuario['username'];

			header("Location: index-usuario.php");
			
		} else {
		echo "Falha ao logar! E-mail ou senha incorretos";
		}
	}		
} */

?>

	<div class="section">
		<div class="container">
			<div class="full-height">
				<div class="center-box">
					<h6><span>Log In </span><span>Sign Up</span></h6>
					<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
					<label for="reg-log"></label>
					<div class="card-3d-wrap">
						<div class="card-3d-wrapper">
							<div class="card-front">
								<div class="center-wrap">
									<div class="section text-center">
										<h4>Log In</h4>
										<form action="../filme/fazer-login.php" methos="post">
											<div class="form-group">
												<input type="email" name="txEmail" class="form-style" placeholder="Seu Email" id="logEmail" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="txSenha" class="form-style" placeholder="Sua Senha" id="logPass" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<input type="submit" class="btn" value="Log In">
											<p><a href="#0" class="link">Esqueceu sua senha?</a></p>
										</form>
									</div>
								</div>
							</div>
							<div class="card-back">
								<div class="center-wrap">
									<div class="section text-center">
										<h4>Sign Up</h4>
										<form action="../filme/fazer-login.php" method="post">
											<div class="form-group">
												<input type="text" name="regName" class="form-style" placeholder="Seu Username" id="regName" autocomplete="off">
												<i class="input-icon uil uil-user"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="email" name="regEmail" class="form-style" placeholder="Seu Email" id="logemail" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="regPass" class="form-style" placeholder="Sua Senha" id="logpass" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
												<input type="submit" class="btn" value="Registrar">
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