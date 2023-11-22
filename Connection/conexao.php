<?php

	$servidor = 'localhost';
	$usuario = 'root';
	$senha = 'root';
	$banco = 'adeluc';

	$con = mysqli_connect($servidor, $usuario, $senha, $banco);
	mysqli_set_charset($con, "utf8mb4");
	
	if (!$con) {
		echo"Erro ao conectar com o Banco";
		
	} else{
		echo"";
	}
?>
