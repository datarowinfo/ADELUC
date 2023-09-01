<?php

require_once("Connection/conexao.php");
session_start();

$descricao = $_POST['descricao'];
$caracterizacao = $_POST['caracterizacao'];
$tipo = "SET";
$status = $_POST['status'];
$criado = $_SESSION['UsuarioNome'];
$acao = $_POST['Subject'];

switch($acao){
	case "1":
		$sql = ("INSERT INTO ADELUC.tb_hierarquia (descricao, caracterizacao, tipo, ativo, datacriacao, usuariocriacao) VALUES (UPPER('$descricao'), UPPER('$caracterizacao'),'$tipo','$status',SYSDATE(),'$criado')");
		$result = mysqli_query($con, $sql);

		if(!$result) {
			echo("Ocorreu um erro durante a inserção na tabela!");
		} else 
		{
		header("location:setor_.php");	
 		}
 	break;

	case "2":
		echo "Case 2: Desenvolvendo!";
	break;
}
?>