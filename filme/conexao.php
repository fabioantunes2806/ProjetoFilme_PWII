<?php
	$servidor="localhost";
	$banco="db_projetofilme";
	$usuario="root";
	$senha="";
	$database="db_projetofilme";

/*	$pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);		*/

	$mysqli = new mysqli($servidor, $usuario, $senha, $database);

	if($mysqli->error) {
		die("Falha ao conectar ao banco de dados. " . $mysqli->error);
	}
?>