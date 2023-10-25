<?php
require_once("../../../connection/conexao.php");
session_start();

if(isset($_POST['Subject']))
{
    $id = $_POST['id_hierarquia'];
    $descricao = $_POST['descricao'];
    $caracterizacao = $_POST['caracterizacao'];
    $nome = $_SESSION['UsuarioNome'];
    $ativo = $_POST['status'];
    $acao = $_POST['Subject'];

        switch($acao){
                case "1":
                        $result_usuario = "UPDATE adeluc.tb_hierarquia "
                        . "SET descricao='$descricao' , "
                        . "caracterizacao='$caracterizacao', "
                        . "datamodificacao=NOW() ,"
                        . "ativo='$ativo' ,"
                        . "usuariomodificacao='$nome'"
                        . "WHERE id_hierarquia='$id'";

                        $resultado_usuario = mysqli_query($con, $result_usuario); 
                        
                        if(mysqli_affected_rows($con)){
                                
                                header("Location: ../View/setor_Edit.php");
                        }else{
                                $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
                                header("Location: ../View/setor_Edit.php?id=$id");
                        }
                        
                        break;

                case "2":
                        echo "Case 2: Desenvolvendo!";
                break; 

                        }
}