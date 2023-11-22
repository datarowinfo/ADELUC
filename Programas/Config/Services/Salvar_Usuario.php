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

//--------------------------------------------------------------------
$per_admin = $_POST['admin'];
$per_demo = $_POST['demo'];
$per_fat = $_POST['fat'];
$per_nfe = $_POST['nfe'];
$per_ocup = $_POST['ocup'];
$per_atac = $_POST['atac'];
$per_fisio = $_POST['fisio'];
$per_cli = $_POST['cli'];
$per_desenv = $_POST['desenv'];

//criação do template
$nivel_mod = $per_admin.$per_demo.$per_fat.$per_nfe.$per_ocup.$per_atac.$per_fisio.$per_cli.$per_desenv;

if($per_admin == '#ADMIN'){  
     $aux_per_admin = 'S';     
}
if ($per_demo == '#DEMO'){
     $aux_per_demo = 'S';
}
if ($per_fat == '#FAT'){
     $aux_per_fat = 'S';
}
if ($per_nfe == '#NFE'){
     $aux_per_nfe = 'S';
}
if ($per_ocup == '#OCUP'){
     $aux_per_ocup = 'S';
}
if ($per_atac == '#ATAC'){
     $aux_per_atac = 'S';
}
if ($per_fisio == '#FISIO'){
     $aux_per_fisio = 'S';
}
if ($per_cli == '#CLIN'){
     $aux_per_cli = 'S';
}
if ($per_desenv == '#DESENV'){
     $aux_per_desenv = 'S';
}

switch($acao){
	case "1":
		$sql = ("INSERT INTO adeluc.tb_usuarios (nome, usuario, senha, email, ativo, datainclusao, descricaoobs, criadopor, "
                . "per_admin, "
                . "per_demo, "
                . "per_fat, "
                . "per_nfe, "
                . "per_ocup, "
                . "per_fisio, "
                . "per_cli, "
                . "per_desenv, "
                . "per_atac, "
                . "nivel_mod) "
                . "VALUES ('$descricao', '$usuario', sha1('$senha'), '$email', '$status', SYSDATE(),'$obs','$criadopor', "
                . "'$aux_per_admin', "
                . "'$aux_per_demo', "
                . "'$aux_per_fat', "
                . "'$aux_per_nfe', "
                . "'$aux_per_ocup', "
                . "'$aux_per_fisio', "
                . "'$aux_per_cli', "
                . "'$aux_per_desenv', "
                . "'$aux_per_atac', "
                . "$nivel_mod')");
                
		$result = mysqli_query($con, $sql);

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