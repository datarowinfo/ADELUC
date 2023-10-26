<?php
    require_once("../Connection/conexao.php");
    session_start();

        $descricao = $_POST['descricao'];
        $especificacao = $_POST['especificacao'];
        $tipo = "CHAMADO";
        $status = $_POST['status'];
        $prioridade = $_POST['prioridade'];
        $observacao = $_POST['obs'];
        $criado = $_SESSION['UsuarioNome'];
        $acao = $_POST['Subject'];

    switch($acao){
            case "1":
                    $sql = ("INSERT INTO ADELUC.tb_chamados (descricao, especificacao, tipo ,prioridade, status, datainclusao, usuarioinclusao, obs) VALUES (UPPER('$descricao'), UPPER('$especificacao'),'$tipo', '$prioridade', '$status',NOW(),'$criado', $observacao)");

                    $result = mysqli_query($con, $sql);

                    if(!$result) {
                            echo("Ocorreu um erro durante a inserção na tabela!");
                    } 
                    else {
                         header("location:suporte.php");	
                    }
            break;

            case "2":
                    echo "Case 2: Desenvolvendo!";
            break;
    }
