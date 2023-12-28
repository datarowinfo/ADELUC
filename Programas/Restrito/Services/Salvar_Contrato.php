<?php

require_once("../../../Connection/conexao.php");
session_start();

$cnpj = $_POST['cnpj'];
$razao = $_POST['razao'];
$unidade = $_POST['unidade'];
$ativo = $_POST['ativo'];
$criado = $_SESSION['UsuarioNome'];
$codidentificador = $cnpj."_".$unidade;
$acao = $_POST['Subject'];

switch($acao){
	case "1":
		$sql = ("INSERT INTO ADELUC.tb_contrato (CNPJ, razao, cod_identificador, ativo, usuario_criacao, data_inclusao, unidade) "
                . "VALUES ('$cnpj', '$razao','$codidentificador','$ativo','$criado', SYSDATE(),'$unidade')");
                
		$result = mysqli_query($con, $sql);

		if(!$result) {
			echo("Ocorreu um erro durante a inserção na tabela!");
		} else 
		{
                    
                 if(mysqli_affected_rows($con)){
                                $_SESSION['msg'] =  "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                                         Contrato cadastrado com <strong>sucesso!</strong>
                                         <button type='button' class='close' data-dismiss='alert' aria-label='close'>
                                         <span aria-hidden='true'>&times;</span></button></div>";
                                header("Location: ../View/Contrato_Cliente.php");
                        }else{
                                $_SESSION['msg'] =  "<div class='container'><div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                         Houve um erro ao cadastrar o contrato. Verificar <strong>conteúdo!</strong>
                                         <button type='button' class='close' data-dismiss='alert' aria-label='close'>
                                         <span aria-hidden='true'>&times;</span></button></div></div>";
                                header("Location: ../View/Contrato_Cliente.php");
                        }
 		}
 	break;

	case "2":
		echo "Case 2: Desenvolvendo!";
	break;
}

?>