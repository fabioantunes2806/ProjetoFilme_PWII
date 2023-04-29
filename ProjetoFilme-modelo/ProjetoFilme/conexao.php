<?php
	$servidor="localhost";
	$banco="bd_projetofilme";
	$usuario="root";
	$senha="";

	$pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);		
?>