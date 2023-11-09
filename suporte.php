<?php
require_once("Connection/conexao.php");

// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title></title>

        <!-- Custom fonts for this template -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <link href="Style/StyleSuporte.css" rel="stylesheet">

        <!-- Custom styles for this page -->
        <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

        <!--Teste-->
    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="app.php">
                    <div class="sidebar-brand-icon rotate-n-20">
                        <i><img src="Image/Logo.png"/></i>
                    </div>
                    <div class="sidebar-brand-text mx-2"><i><img src="Image/LogoCab.png"/></i></div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Inicio</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Suporte
                </div>


                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                       aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Chamados</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Registro chamados</h6>
                            <a class="collapse-item active border-left-dark" href="suporte.php">Chamados</a>

                        </div>
                    </div>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content" class="bg-gray-400">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <form class="form-inline">
                            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                            </button>
                        </form>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto bg-dark">

                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                     aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small"
                                                   placeholder="Search for..." aria-label="Search"
                                                   aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>

                            <!-- Nav Item - Alerts -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-info-circle fa-2x"></i>
                                    <!-- Counter - Alerts -->
                                    <span class="badge badge-primary badge-counter">?</span>
                                </a>
                                <!-- Dropdown - Alerts -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                     aria-labelledby="alertsDropdown">
                                    <h6 class="dropdown-header bg-dark">
                                        Versão do Sistema
                                    </h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-primary">
                                                <i class="fas fa-file-alt text-light"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">DataRowInfo 14, Julho de 2023</div>
                                            <span class="font-weight-bold"><p>DTRADELUC17072023</p></span>

                                        </div>
                                    </a>

                                </div>
                            </li>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-light small"><?php echo $_SESSION['UsuarioNome']; ?></span>
                                    <img class="img-profile rounded-circle"
                                         src="img/undraw_profile.svg">
                                </a>
                                <!-- Dropdown - User Information Teste -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                     aria-labelledby="userDropdown">

                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Activity Log
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>

                    <div class="card bg-gray-400 border-0">

                        <!-- End of Topbar -->
                        <div class="py-2 container-fluid bg-gray-400">

                            <!-- DataTales Example -->
                            <div class="card shadow mb-4 bg-gray-400 border-0" >
                                <div class="card-header py-3 bg-dark">
                                    <h6 class="m-0 font-weight-bold text-light bg-dark">Registro de chamados</h6>
                                </div>

                                <div class="card-body bg-gray-300">
                                   
                                    <div class="modal fade" id="cadastrochamado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                         aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content   bg-light">
                                                <div class="modal-header bg-dark">
                                                    <h5 class="modal-title text-white" id="exampleModalLabel">Abrir chamado</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="container-fluid bg-gray-400">
                                                    <div class="card shadow m-4">
                                                        
                                                        

                                                        <div class="card-body bg-gray-300">
                                                            <p>
                                                                
                                                                
                                                                
                                                            <form class="bg-gray-300 text-dark" method="POST" action="Salvar_chamado.php">
                                                                <table>
                                                                    <tr>

                                                                        <td>
                                                                            Descrição: <input id="descricaochamado" type="text" class="form-control form-control-sm" name="descricao">
                                                                        </td>

                                                                        <td>
                                                                            Prioridade: 
                                                                            <select id="permissao" name="prioridade" class="form-control form-control-sm">
                                                                                <option name="prioridade" value="1">Baixa</option>;
                                                                                <option name="prioridade"value="2">Média</option>;
                                                                                <option name="prioridade"value="3">Alta</option>;

                                                                            </select>
                                                                        </td>

                                                                    </tr>

                                                                    <tr>
                                                                        <td colspan="2">
                                                                            Especificação: <textarea id="especificacao" type="text" class="form-control form-control-sm" name="especificacao"></textarea>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>
                                                                            <input id="anexar" type="text" class="form-control form-control-sm" name="anexar" disabled>
                                                                        </td>
                                                                        <td>
                                                                            <button id="Anexar" class="btn btn-primary btn-icon-split aling-right" name="Anexo" value="3">
                                                                                <span id="iconChamado" class="icon text-white-50 fas fa-paperclip" ></span>
                                                                                <span class="text">Anexar</span>
                                                                            </button>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>
                                                                            Observação: <input id="obs" type="text" class="form-control form-control-sm" name="obs">
                                                                        </td>


                                                                        <td>
                                                                            Tipo: <input id="tipochamado" type="text" value = "Chamado" disabled class="form-control form-control-sm ">
                                                                        </td>

                                                                    <tr>

                                                                        <td colspan = "2">

                                                                            <button id="SalvarChamado" class="btn btn-primary btn-icon-split aling-right" name="Subject" value="1">
                                                                                <span id="iconChamado" class="icon text-white-50 fas fa-save">
                                                                                </span>
                                                                                <span class="text">Salvar</span>
                                                                            </button>

                                                                            <button id="FecharChamado" class="btn btn-secondary btn-icon-split aling-right" name="Subject" value="2">
                                                                                <span id="iconChamado" class="icon text-white-50 fas fa-trash">
                                                                                </span>
                                                                                <span class="text">Fechar</span>
                                                                            </button>

                                                                        </td>

                                                                    </tr>

                                                                </table>

                                                            </form>
                                                            </p>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <button type="button" class="btn btn-primary view_data text-white" 
                                            href="#" data-toggle="modal" data-target="#cadastrochamado">Abrir chamado</button>
                                    <br><br>

                                    <div class="table-responsive bg-gray-300 text-dark">

                                        <table class="table table-striped table-hover table-sm text-dark" id="dataTable" width="100%" cellspacing="0">
                                            <thead class="thead-dark" >
                                                <tr>
                                                    <th id="acao">Ação</th>
                                                    <th>Numero</th>
                                                    <th>Descricao</th>
                                                    <th>Data</th>
                                                    <th>Prioridade</th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                                <?php
                                                require_once("Connection/conexao.php");

                                                $result_setor = "SELECT * FROM ADELUC.tb_chamados";
                                                $resultado_setor = mysqli_query($con, $result_setor);
                                                while ($rows_setor = mysqli_fetch_array($resultado_setor)) {
                                                    ?>
                                                    <tr>

                                                        <td>

                                                            <button type="button" class="btn btn-dark view_data text-white">
                                                                <svg class="bi d-block mx-auto mb-1" width="10" height="10" fill="currentColor">
                                                                <use xlink:href="fonts/bootstrap-icons.svg#pencil-fill"/></svg></button>

                                                            <button type="button" class="btn btn-dark view_data text-white">
                                                                <svg class="bi d-block mx-auto mb-1" width="10" height="10" fill="currentColor">
                                                                <use xlink:href="fonts/bootstrap-icons.svg#search"/></svg></button>
                                                        </td>

                                                        <th><?php echo $rows_setor['id_chamados']; ?></th>
                                                        <th><?php echo $rows_setor['descricao']; ?></th>
                                                        <td><?php echo $rows_setor['datainclusao']; ?></td>
                                                        <td><?php echo $rows_setor['prioridade']; ?></td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.container-fluid -->
                    </div>
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-dark">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2020</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content   bg-dark">
                    <div class="modal-header">
                        <h5 class="modal-title text-white" id="exampleModalLabel">Pronto para sair?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body text-white">Selecione "Logout" para finalizar a sua sessão!</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login/logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
