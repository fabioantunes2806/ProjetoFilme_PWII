<?php include("../filme/cabecalho-visitante.php")?>

    <div id="login">
        <form id="login__form" action="../filme/fazer-login.php" method="post">
            <input type="text" placeholder="email@dominio.com" name="txEmail">
            <input type="password" placeholder="senha" name="txSenha">
            <input type="submit" value="Entrar">
        </form>
    </div>

<?php include("../estruturas/rodape.php")?>