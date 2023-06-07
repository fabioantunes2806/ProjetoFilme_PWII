<?php include("../estruturas/cabecalho.php")?>

    <div class="section">
        <div class="container">
            <div class="col-12 text-center align-self-center py-5">
                <div class="card-wrap-contato">
                    <div class="card-wrapper-contato">
                        <div class="card-contato">
                            <div class="center-wrap">
                                <form action="contato-salvar.php" method="post" class="form-group">
                                    <input type="text" name="txNome" class="form-style" placeholder="Seu nome" autocomplete="off">
                                    <i class="input-icon uil uil-user"></i>
                                    <input type="text" name="txEmail" placeholder="Seu email" autocomplete="off">
                                    <i class="input-icon uil uil-user"></i>
                                    <input type="text" name="txAssunto" placeholder="Assunto">
                                    <i class="input-icon uil uil-user"></i>
                                    <textarea placeholder="Mensagem" name="txMensagem"></textarea>
                                    <i class="input-icon uil uil-user"></i>
                                    <input type="submit" class="btnSubmit" value="Salvar">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include("../estruturas/rodape.php")?>