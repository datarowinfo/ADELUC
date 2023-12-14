<?php

require_once("../../../Connection/conexao.php");
session_start();

//Variaveis globais

$dado='ADELUC.ADEMILZA.LUCAS';
$pass = $_POST['senha'];
$senha = $dado.$pass.$dado;

$descricao = $_POST['descricao'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$status = $_POST['status'];
$obs = $_POST['descricaoobs'];
$criadopor = $_SESSION['UsuarioNome'];
$acao = $_POST['subject'];
$per_admin = $_POST['admin'];
$per_demo = $_POST['demo'];
$per_fat = $_POST['fat'];
$per_nfe = $_POST['nfe'];
$per_cli = $_POST['cli'];
$nivel_mod = $per_admin.$per_demo.$per_fat.$per_nfe.$per_cli;

//--------------------------------------------------------------------
if($per_admin == '#ADMIN'){
    $aux_per_admin = 'S';
}
    
if($per_admin == NULL){
    $aux_per_admin = 'N';
}

if($per_demo == '#DEMO'){
    $aux_per_demo = 'S';
}
    
if($per_demo == NULL){
    $aux_per_demo = 'N';
}

if($per_fat == '#FAT'){
    $aux_per_fat = 'S';
}
    
if($per_fat == NULL){
    $aux_per_fat = 'N';
}

if($per_nfe == '#NFE'){
    $aux_per_nfe = 'S';
}
    
if($per_nfe == NULL){
    $aux_per_nfe = 'N';
}

if($per_cli == '#CLIN'){
    $aux_per_cli = 'S';
}
    
if($per_cli == NULL){
    $aux_per_cli = 'N';
}
//--------------------------------------------------------------------

switch($acao){
	case "1":
            
            $sql_usuario = ("INSERT INTO adeluc.tb_usuarios (nome, usuario, senha, email, ativo, datainclusao, descricaoobs, criadopor) "
                . "VALUES ('$descricao', '$usuario', sha1('$senha'), '$email', '$status', SYSDATE(),'$obs','$criadopor')");
            
            $result = mysqli_query($con, $sql_usuario);
		 
            $sql_modelo = ("INSERT INTO adeluc.tb_modelo_user (usuario_modelo, dinclusao_modelo, usuariocriacao, template, per_admin, per_demo, per_fat, per_nfe, per_cli) "
                . "VALUES ('$usuario', SYSDATE(), '$criadopor','$nivel_mod', '$aux_per_admin','$aux_per_demo' ,'$aux_per_fat', '$aux_per_nfe', '$aux_per_cli')");
            
            $result2 = mysqli_query($con, $sql_modelo);

		if(!$result) {
			echo("Ocorreu um erro durante a inserção na tabela!");
		} else 
		{
		header("location:../View/usuario.php");	
 		}
 	break;

	case "2":
		echo "Case 2: Desenvolvendo!";
	break;
}