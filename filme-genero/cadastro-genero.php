<title>Cadastro de Gênero</title>

<?php include("../estruturas/cabecalho.php")?>

    <section>
        <form action="genero-salvar.php" method="post">      
            <div>
                <input type="text" placeholder="Genero" name="txGenero" />
            </div>		

            <div>
                <input type="submit" value="Salvar" />
            </div>
        </form>        
    </section>

<?php include("../estruturas/rodape.php")?>
