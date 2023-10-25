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
                                $_SESSION['msg'] =  "<div class='container'><div class='alert alert-success alert-dismissible fade show' role='alert'>
                                         Usuário editado com <strong>sucesso!</strong>
                                         <button type='button' class='close' data-dismiss='alert' aria-label='close'>
                                         <span aria-hidden='true'>&times;</span></button></div></div>";
                                header("Location: ../View/setor.php");
                        }else{
                                $_SESSION['msg'] =  "<div class='container'><div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                         Usuário não editado. Verificar <strong>conteúdo!</strong>
                                         <button type='button' class='close' data-dismiss='alert' aria-label='close'>
                                         <span aria-hidden='true'>&times;</span></button></div></div>";
                                header("Location: ../View/setor.php");
                        }
                        
                        break;

                case "2":
                        echo "Case 2: Desenvolvendo!";
                break; 

                        }
}