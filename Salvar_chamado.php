<?php

require_once("Connection/conexao.php");
session_start();


$descricao = $_POST['descricao'];
$especificacao = $_POST['especificacao'];
$prioridade = $_POST['prioridade'];
$tipo = "tipo";
$status = 'A';
$obs = $_POST['obschamado'];
$criado = $_SESSION['Usuarioinclusao'];
$acao = $_POST['Subject'];

switch($acao){
	case "1":
		$sql = ("INSERT INTO ADELUC.tb_chamados (descricao, especificacao, tipo, prioridade, status, tipo, datainclusao, usuarioinclusao, obs) VALUES (UPPER('$descricao'), UPPER('$especificacao'),'$tipo','$status',SYSDATE(),'$criado', '$obs')");
		$result = mysqli_query($con, $sql);

		if(!$result) {
			echo("Ocorreu um erro durante a inserção na tabela!");
		} else 
		{
		header("location:../View/setor_.php");	
 		}
 	break;

	case "2":
		echo "Case 2: Desenvolvendo!";
	break;
}
?>