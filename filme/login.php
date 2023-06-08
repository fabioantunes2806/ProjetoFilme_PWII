<?php include("../filme/cabecalho-visitante.php")?>

    <div class="section">
        <div class="container-user">
            <div class="checkbox-box"><!--tem um problema com essa div que cancela a animação de virar para o Log In e Sign In-->
                <h6><span>Log In </span><span>Sign Up</span></h6>
                <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
                <label for="reg-log"></label>
            </div>            
            <div class="card-3d-wrap">
                <div class="card-3d-wrapper">
                    <div class="card-front">
                        <div class="center-wrap">
                            <h4 class="mb-4 pb-3">Log In</h4>
                            <form action="../filme/fazer-login.php" method="post" class="form-group">
                                <input type="email" name="txEmail" class="form-style" placeholder="Your Email" id="logEmail" autocomplete="off">
                                <i class="input-icon uil uil-at"></i>
                                <input type="password" name="txSenha" class="form-style" placeholder="Your Password" id="logPass" autocomplete="off">
                                <i class="input-icon uil uil-lock-alt"></i>
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
        </div>
    </div>

<?php include("../estruturas/rodape.php")?>