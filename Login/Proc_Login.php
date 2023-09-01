<?php
session_start();
require_once("../Connection/conexao.php");


  // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
      header("Location: index.php"); exit;
  }

  $usuario = ($_POST['usuario']);
  $pass = ($_POST['senha']);

  $dado = 'BYL.';
  $dado2 = 'N1ghtw1sh@Pr0s0p0p314';
  $senha = $dado.$pass.$dado2.$pass.$dado;
  // Validação do usuário/senha digitados
  $very = "SELECT `id`, `nome`, `nivel` FROM `tb_usuarios` WHERE (`usuario` = '".$usuario ."') AND (`senha` = '". sha1($senha) ."') AND (`ativo` = 1) LIMIT 1";
  $query = $con -> query($very);
  
  if (mysqli_num_rows($query) != 1) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
      header("location:login_error.php"); exit;
  } else {
      // Salva os dados encontados na variável $resultado
      $resultado = mysqli_fetch_assoc($query);

// Se a sessão não existir, inicia uma
    if (!isset($_SESSION)) {
        session_start();
    }

// Salva os dados encontrados na sessão
    $id = $_SESSION['UsuarioID'] = $resultado['id'];
    $usuario = $_SESSION['Usuario'] = $resultado['usuario'];
    $nome = $_SESSION['UsuarioNome'] = $resultado['nome'];
    $nivel = $_SESSION['UsuarioNivel'] = $resultado['nivel'];

    
    // aqui voce verifica a sessão
    if($nivel == 1){
    header('Location: ../app.php');
    }
    else if($nivel == 2){
    header('Location: ../app1.php');
    }
    else if($nivel == 3){
    header('Location: ../app#2.php');
    }
    else if($nivel == 4){
    header('Location: ../app#3.php');
    }
    else if($nivel == 5){
    header('Location: ../app#4.php');
    }
    else if($nivel == 6){
    header('Location: ../app#5.php');
    }
    else if($nivel == 7){
    header('Location: ../app#6.php');
    }
    else if($nivel == 8){
    header('Location: ../app#7.php');
    }
    else{
    // caso a condição acima for falsa é redirecinado para usuario basico
    header('Location: .login_error.php');
    }

// Redireciona o visitante
//header("Location: restrito.php"); exit;

  }

  ?>