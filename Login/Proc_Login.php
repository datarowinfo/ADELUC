<?php
require_once("../Connection/conexao.php");

  // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
      header("Location: index.php"); exit;
  }

  $dado='ADELUC.ADEMILZA.LUCAS';
  $pass = $_POST['senha'];
  $senha = $dado.$pass.$dado;
  
  $usuario = ($_POST['usuario']);

  // Validação do usuário/senha digitados
  $very = "SELECT `id`, `usuario`, `nome`, `nivel_mod` FROM `vw_login` WHERE (`usuario` = '".$usuario ."') AND (`senha` = '". sha1($senha) ."') AND (`ativo` = 1) LIMIT 1";
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
    $user = $_SESSION['Usuario'] = $resultado['usuario'];
    $nome = $_SESSION['UsuarioNome'] = $resultado['nome'];
    $nivel = $_SESSION['UsuarioNivel'] = $resultado['nivel_mod'];

    
  // aqui voce verifica a sessão
    if($nivel == '#ADMIN#DEMO'|| $nivel == '#ADMIN#CLIN'){
        
        $sql_sessao = ("INSERT INTO adeluc.tb_log_sessao (usuario, hora_acesso, template) "
                . "VALUES ('$user', SYSDATE(),'$nivel')");
            
            $result2 = mysqli_query($con, $sql_sessao);
        
        
    header('Location: ../processamento.php');
    }
   
    else{
  // caso a condição acima for falsa é redirecinado para usuario basico
    header('Location: login_error.php');
    }
  }