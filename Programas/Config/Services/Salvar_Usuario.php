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
$per_fisio = $_POST['fisio'];
$per_cli = $_POST['cli'];
$per_ocup = $_POST['ocup'];
$per_desenv = $_POST['desenv'];
$per_atac = $_POST['atac'];


$nivel_mod = $per_admin.$per_demo.$per_fat;
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
if($per_fisio == '#FISIO'){
    $aux_per_fisio = 'S';
}
    
if($per_fisio == NULL){
    $aux_per_fisio = 'N';
}   
if($per_cli == '#CLIN'){
    $aux_per_cli = 'S';
}
    
if($per_cli == NULL){
    $aux_per_cli = 'N';
}   
if($per_ocup == '#OCUP'){
    $aux_per_ocup = 'S';
}   
if($per_ocup == NULL){
    $aux_per_ocup = 'N';
}   

if($per_desenv == '#DESENV'){
    $aux_per_desenv = 'S';
}   
if($per_desenv == NULL){
    $aux_per_desenv = 'N';
}  

if($per_atac == '#ATAC'){
    $aux_per_atac = 'S';
}   
if($per_atac == NULL){
    $aux_per_atac = 'N';
}
switch($acao){
	case "1":
            
            $sql = ("INSERT INTO adeluc.tb_usuarios (nome, usuario, senha, email, ativo, datainclusao, descricaoobs, criadopor, nivel_mod, per_admin, per_demo, per_fat) "
                . "VALUES ('$descricao', '$usuario', sha1('$senha'), '$email', '$status', SYSDATE(),'$obs','$criadopor','$nivel_mod', '$aux_per_admin','$aux_per_demo' ,'$aux_per_fat')");
		 

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