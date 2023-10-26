<?php

require_once("Connection/conexao.php");
session_start();


$descricao = $_POST['descricao'];
$especificacao = $_POST['especificacao'];
$prioridade = $_POST['prioridade'];
$status = "A";
$tipo = "1";
$criado = $_SESSION['UsuarioNome'];
$obs = $_POST['obs'];
$acao = $_POST['Subject'];

      switch($acao){
	case "1":
		$sql = ("INSERT INTO ADELUC.tb_chamados (descricao, especificacao, prioridade,  status, tipo, datainclusao, usuarioinclusao, obs) VALUES (UPPER('$descricao'), UPPER('$especificacao'), '$prioridade', '$status', '$tipo', SYSDATE(), '$criado', '$obs')");
		$result = mysqli_query($con, $sql);
                
              

		if(!$result) {
			echo("Ocorreu um erro durante a inserção na tabela!");
		} else 
		{
		header("location:suporte.php");	
 		}
 	break;

	case "2":
		echo "Case 2: Desenvolvendo!";
	break;
}


?>