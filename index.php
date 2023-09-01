<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Principal CSS do Bootstrap -->
    <link href="fonts/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="fonts/signin.css" rel="stylesheet">

    <title>LOGIN</title>
</head>
<body class="text-center">

<div class="container">

  <!-- Formulário de Login -->
  <form class="form-signin" action="LOGIN/Proc_Login.php" method="post">
  <h1 class="h3 mb-3 font-weight-normal"><img src="image/LogoLogin.png"></h1>
        <input type="text" name="usuario" id="txUsuario" maxlength="25" class="form-control" placeholder="Seu usuario" required autofocus/>
        <input type="password" name="senha" id="txSenha" class="form-control" placeholder="Senha" required />
        <div class="checkbox mb-3">
      </div>
  
        <input type="submit" value="Fazer Login" class="btn btn-lg btn-secondary btn-block text-white" />
        <p class="mt-5 mb-3 text-muted"> Desenvolvido por DataRowInfo &copy; 2023.</p>
           
    </form>
</div>
      
</body>
</html>