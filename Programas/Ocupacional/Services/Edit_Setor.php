<?php
session_start();
include_once("../../../connection/conexao.php");

$id = filter_input(INPUT_POST, 'id_hierarquia', FILTER_SANITIZE_NUMBER_INT);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$caracterizacao = filter_input(INPUT_POST, 'caracterizacao', FILTER_SANITIZE_STRING);
$acao = filter_input(INPUT_POST, 'Subject', FILTER_SANITIZE_NUMBER_INT);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";
switch($acao){
	case "1":
		$result_usuario = "UPDATE tb_hierarquia SET descricao='$descricao', caracaterizacao='$caracterizacao', datamodificacao=NOW() WHERE id_hierarquia='$id'";
                $resultado_usuario = mysqli_query($con, $result_usuario);

                if(mysqli_affected_rows($con)){
                    $_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
                    header("Location: ../View/setor.php");
                }else{
                        $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
                        header("Location: ../View/Edit_Setor.php?id=$id");
                }
                break;

	case "2":
		echo "Case 2: Desenvolvendo!";
	break;
}