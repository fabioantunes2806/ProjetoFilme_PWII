<?php include("../estruturas/cabecalho-visitante.php")?>

    <div class="section">
		<div class="container">
			<div class="full-height">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Log In</h4>
											<div class="form-group">
												<input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<a href="#" class="btn mt-4">submit</a>
                            				<p><a href="#0" class="link">Forgot your password?</a></p>
				      					</div>
			      					</div>
			      				</div>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Sign Up</h4>
											<div class="form-group">
												<input type="text" name="logname" class="form-style" placeholder="Your Full Name" id="logname" autocomplete="off">
												<i class="input-icon uil uil-user"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<a href="#" class="btn mt-4">submit</a>
				      					</div>
			      					</div>
			      				</div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>
    <!--<div class="section">
        <div class="container-user">
            <div class="checkbox-b  ox">
                <h6><span>Log In </span><span>Sign Up</span></h6>
                <input class="checkbox" type="checkbox" id="regCheck" name="regCheck"/>
                <label for="regCheck"></label>            
            </div>
            <div class="card-3d-wrap">
                <div class="card-front">
                    <div class="center-wrap">
                        <h4 class="mb-4 pb-3">Log In</h4>
                        <form action="../filme/fazer-login.php" method="post" class="form-group">
                            <input type="email" name="txEmail" class="form-style" placeholder="Your Email" id="logEmail" autocomplete="off">
                            <!--<i class="input-icon uil uil-at"></i>--
                            <i class="input-icon fa-solid fa-at"></i>
                            <input type="password" name="txSenha" class="form-style" placeholder="Your Password" id="logPass" autocomplete="off">
                            <!--<i class="input-icon uil uil-lock-alt"></i>--
                            <i class="input-icon fa-solid fa-lock"></i>
                            <input type="submit" class="btnSubmit" value="Log In">
                        </form>
                        <p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p>
                    </div>
                </div>
                <div class="card-back">
                    <div class="center-wrap">
                        <h4 class="mb-4 pb-3">Sign Up</h4>
                        <form action="../filme/fazer-login.php" method="post" class="form-group">
                            <input type="text" name="signName" class="form-style" placeholder="Your Full Name" id="subName" autocomplete="off">
                            <i class="input-icon uil uil-user"></i>
                            <input type="email" name="signEmail" class="form-style" placeholder="Your Email" id="subEmail" autocomplete="off">
                            <i class="input-icon uil uil-at"></i>
                            <input type="password" name="signPass" class="form-style" placeholder="Your Password" id="subPass" autocomplete="off">
                            <i class="input-icon uil uil-lock-alt"></i>
                            <input type="submit" class="btnSubmit" value="Sign Up">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

<?php include("../estruturas/rodape.php")?>