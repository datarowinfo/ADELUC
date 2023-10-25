<?php
include_once("../../../Connection/conexao.php");
session_start();

if(!empty($_GET['id_hierarquia']))
{

    $id = $_GET = ['id_hierarquia'];
    
    $sqlSelect = "SELECT * adeluc.tb_hierarquia FROM WHERE id_hierarquia = '$id'";
    $result = $con->query($sqlSelect);
    
    if($result->num_rows > 0)
    {
        while($setor_data = mysqli_fetch_assoc($result))
        {
            $descricao = $setor_data['descricao'];
            $caracterizacao = $setor_data['caracterizacao'];
            $status = $setor_data['ativo'];
        }

    }
    else
    {
        header('location: setor.php');
    }
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
        <link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../../../css/sb-admin-2.min.css" rel="stylesheet">
        <link href="../Style/StyleCadastroSetor.css" rel="stylesheet">

        <!-- Custom styles for this page -->
        <link href="../../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../../../app.php">
                    <div class="sidebar-brand-icon rotate-n-20">
                        <i><img src="../../../Image/Logo.png"/></i>
                    </div>
                    <div class="sidebar-brand-text mx-2"><i><img src="../../../Image/LogoCab.png"/></i></div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="../../../app.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Inicio</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Estrutura de PCMSO
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                       aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Setor e função</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Cadastros:</h6>
                            <a class="collapse-item active" href="setor.php">Setor</a>
                            <a class="collapse-item" href="funcao.php">Funcao</a>
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
                                    <h6 class="dropdown-header">
                                        Versão do Sistema
                                   3 </h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-primary">
                                                <i class="fas fa-file-alt text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">14, Julho de 2023</div>
                                            <span class="font-weight-bold">Versão atual é a DTRADELUC17072023</span>
                                        </div>
                                    </a>
                                    
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Detalhes da versão</a>
                                </div>
                            </li>

                            

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['UsuarioNome']; ?></span>
                                    <img class="img-profile rounded-circle"
                                         src="../../../img/undraw_profile.svg">
                                </a>
                                <!-- Dropdown - User Information -->
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
                    <!-- End of Topbar -->
                    <div class="container-fluid bg-gray-400">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 bg-dark">
                                <h6 class="m-0 font-weight-bold text-light">Cadastro de setor</h6>
                            </div>
                            <div class="card-body bg-gray-300">
                                <p>
                                <form class="bg-gray-300 text-dark" method="POST" action="../Services/Salvar_Setor.php">
                                    <table>
                                        <tr>

                                            <td>
                                                Descrição do setor: <input id="descricaosetor" type="text" class="form-control form-control-sm" name="descricao">
                                            </td>

                                            <td>
                                                Caracterização: <input id="caracterizacaosetor" type="text" class="form-control form-control-sm" name="caracterizacao">
                                            </td>

                                            <td>
                                                Tipo: <input type="text" name="tipo" value = "SET" disabled class="form-control form-control-sm">
                                            </td>

                                        </tr>

                                        <tr>
                                            <td colspan = "2">
                                                <input style="margin-left: 10px" type="radio" name="status" value="1" checked required>Ativo
                                                <input style="margin-left: 10px" type="radio" name="status" value="0" required>Desativado
                                            </td><!-- comment -->
                                            <td>
                                                <button id="SalvarCad" class="btn btn-secondary aling-right" name="Subject" value="1">
                                                    <span id="iconCad" class="icon text-white-70 fas fa-save">
                                                    </span>
                                                    <span class="text">Salvar</span>
                                                </button>

                                                <button id="LimparCadSetor" class="btn btn-secondary aling-right" name="Subject" value="2">
                                                    <span id="iconCad" class="icon text-white-70 fas fa-times">
                                                    </span>
                                                    <span class="text">Limpar</span>
                                                </button>
                                            </td>
                                        </tr>
                                        
                                        <tr><td colspan="3"></td></tr>
                                        
                                        <tr>
                                            <td colspan = '3'>
                                                <?php if(isset($_SESSION['msg'])){
                                                        echo $_SESSION['msg'];
                                                        unset($_SESSION['msg']);
                                                }?>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                                </p>

                            </div>
                        </div>
                    </div>


                   <?php
                 
                $result_usuarios = "SELECT * FROM adeluc.tb_hierarquia WHERE tipo = 'SET'";
                $resultado_usuarios = mysqli_query($con, $result_usuarios);
                    
                echo"<div class='container-fluid bg-gray-400'>"
                      ."<div class='card shadow mb-4' >"
                        ."<div class='card-body bg-gray-300'>"
                            ."<div class='table-responsive bg-gray-300 text-dark'>"
                                ."<table class='table table-striped table-hover table-sm text-dark' id='dataTable' width='100%' cellspacing='0'>"
                                    ."<thead class='thead-dark'>"
                                    .     "<tr>"
                                    .       "<th>Ação</th>"
                                    .       "<th>Cód.Setor</th>"
                                    .       "<th>Setor</th>"
                                    .       "<th>Caracterização</th>"
                                    .       "<th>Situação</th>"
                                    .     "</tr>"
                                    . "</thead>"
                                    ."<tbody>";
                    ini_set('default_charset', 'utf-8');
                    while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
                        
                          $auxStatus = $row_usuario['ativo'];
                                                
                                                if ($auxStatus == 1) {
                                                    $status = 'ATIVO';
                                                } else {
                                                    $status = 'DESATIVADO';
                                                }

                                    echo "<tr>"
                                    .       "<td>"
                                            . "<a class='btn btn-dark view_data text-white' href='Editar_Setor.php?id=" . $row_usuario['id_hierarquia'] . "'>
                                                <svg class='bi d-block mx-auto mb-1' 
                                                                 width='10' height='10' fill='currentColor'>
                                                            <use xlink:href='../../../fonts/bootstrap-icons.svg#pencil-fill'/>
                                                            </svg></a></td>"
                                    .       "<td>".$row_usuario['id_hierarquia']."</td>"
                                    .       "<td>".$row_usuario['descricao']."</td>"
                                    .       "<td>".$row_usuario['caracterizacao']."</td>"
                                    .       "<td>".$status."</td>"
                                    . "</tr>";
                    }
                                echo"</tbody>"
                                ."</table>"
                             ."</div>"
                          ."</div>"
                        ."</div>"
                    ."</div>"
		?>

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-gradient-dark">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto text-white">
                        <span>Copyright &copy; Desenvolvido por DataRowInfo 2023</span>
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
        
        <!-- Editar Setor Modal-->
        <div class="modal fade bd-example-modal-lg" id="EditSetor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content   bg-dark">
                <div class="modal-header">
                    
                    <h5 class="modal-title text-white" id="exampleModalLabel">Editar - cadastro de setor</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

        <!-- Bootstrap core JavaScript-->
        <script src="../../../vendor/jquery/jquery.min.js"></script>
        <script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../../../vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../../../js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="../../../vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="../../../vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="../../../js/demo/datatables-demo.js"></script>
        <script src="../../../js/bootstrap.min.js"></script>
        
    </body>
</html>