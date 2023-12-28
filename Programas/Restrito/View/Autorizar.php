<?php
session_start();
include_once("../../../connection/conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM adeluc.tb_contrato WHERE id_contrato = '$id'";
$resultado_usuario = mysqli_query($con, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
    
        $cnpj = $row_usuario['CNPJ'];
        $razao = $row_usuario['razao'];
        $unidade = $row_usuario['unidade'];
        $codidentificador = $row_usuario['cod_identificador'];
        $ativo = $row_usuario['ativo'];
        
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
        <!--<meta http-equiv="refresh" content="2; URL='http://localhost/DTR-ADELUC/Programas/Ocupacional/View/setor.php'"/>-->

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
                    Acesso restrito
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                       aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Contrato Cliente</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Contratos Cadastrados:</h6>
                            <a class="collapse-item" href="Contrato_Cliente.php">Contratos</a>
                            <a class="collapse-item active" href="Autorizacoes.php">Autorizações</a>
                            
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
                                    </h6>
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
                     <!-- End of Topbar -->
                    <div class="container-fluid bg-gray-400">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 bg-dark">
                                <h6 class="m-0 font-weight-bold text-light">Autorizar módulos no contrato</h6>
                            </div>
                            <div class="card-body bg-gray-300">
                                <p>
                                <form class="bg-gray-300 text-dark" method="POST" action="../Services/Salvar_Setor.php">
                                    <table>
                                        <tr>

                                            <td>
                                                <input type="hidden" name="id_contrato" value="<?php echo $row_usuario['id_contrato']; ?>">
                                                CNPJ: <input id="descricaosetor" type="text" class="form-control form-control-sm" name="cnpj" value="<?php echo $cnpj; ?>" disabled>
                                            </td>

                                            <td>
                                                Razão Social: <input id="caracterizacaosetor" type="text" class="form-control form-control-sm" name="razao" value="<?php echo $razao; ?>" disabled>
                                            </td>
                                            
                                            <td>
                                                Unidade: <input type="text" name="unidade"  class="form-control form-control-sm" value="<?php echo $unidade; ?>" disabled>
                                            </td>

                                            <td>
                                                Código identificador: <input type="text" name="codidentificador" class="form-control form-control-sm"  value="<?php echo $codidentificador; ?>" disabled>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <input style="margin-left: 10px" type="radio" name="status" value="S" <?php echo ($row_usuario['ativo'] == "S") ? 'checked' : null; ?>>Ativo
                                                <input style="margin-left: 10px" type="radio" name="status" value="N" <?php echo ($row_usuario['ativo'] == "N") ? 'checked' : null; ?>>Bloqueado
                                            </td><!-- comment -->
                                        </tr>
                                        
                                        
                                        <tr><td>
                                                 <div class="bg-gray-300">
                                                     <p><h6 class="m-0 font-weight-bold">Autorizar módulos de sistema:</h6></p>
                                                 </div
                                             </td></tr>
                                        
                                                    <tr>
                                                    <td> Desenvolvedor: </td>
                                                    <td><input type="radio" name="status" value="#DESENV" disabled> Sim
                                                        <input type="radio" name="status" value="N" disabled> Não
                                                    </td></tr>
                                                    <tr>
                                                    <td> Fisioterapia: </td>
                                                    <td><input type="radio" name="status" value="#FISIO" disabled> Sim
                                                        <input type="radio" name="status" value="N" disabled> Não</td>
                                                    </td></tr>
                                                    <tr>
                                                    <td> Ocupacional: </td>
                                                    <td><input type="radio" name="status" value="#OCUP" disabled> Sim
                                                        <input type="radio" name="status" value="N" disabled> Não
                                                    </td></tr>
                                                    <tr>
                                                    <td> Clinicas: </td>
                                                    <td><input type="radio" name="status" value="#CLIN" disabled> Sim
                                                        <input type="radio" name="status" value="N" disabled> Não
                                                    </td></tr>
                                                    <tr>
                                                    <td> Faturamento: </td>
                                                    <td><input type="radio" name="status" value="#FAT" disabled> Sim
                                                        <input type="radio" name="status" value="N" disabled> Não
                                                    </td></tr>
                                                    <tr>
                                                    <td> Notas Fiscal: </td>
                                                    <td><input type="radio" name="status" value="#NFE" disabled> Sim
                                                        <input type="radio" name="status" value="N" disabled> Não
                                                    </td></tr>
                                                          <tr>
                                                    <td> Vendas: </td>
                                                    <td><input type="radio" name="status" value="#VENDA" disabled> Sim
                                                        <input type="radio" name="status" value="N" disabled> Não
                                                    </td></tr>
                                                    
                                                    <tr><td>
                                                 <div class="bg-gray-300">
                                                     <p><h6 class="m-0 font-weight-bold">Liberar usuário:</h6></p>
                                                 </div
                                             </td></tr>
                                        
                                                    <tr><td>Quantidade: <input type="text" name="simultaneo"  disabled class="form-control form-control-sm" placeholder="usuário simultâneo" disabled></td>
                                                      </tr>
                                        
                                        <tr>
                                            <td>
                                                <br>
                                                <button id="SalvarCad" class="btn btn-primary aling-right" name="Subject" value="1" disabled>
                                                    <span id="iconCad" class="icon text-white-70 fas fa-save">
                                                    </span>
                                                    <span class="text">Autorizar</span>
                                                </button>

                                                <button id="LimparCadSetor" class="btn btn-secondary aling-right" name="Subject" value="2" disabled>
                                                    <span id="iconCad" class="icon text-white-70 fas fa-times">
                                                    </span>
                                                    <span class="text">Limpar</span>
                                                </button>
                                            </td>
                                        </tr>
                                        
                                        <tr><td></td></tr>
                                        
                                        <tr>
                                            <td colspan = '4'>
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
                 
                $result_usuarios = "SELECT * FROM adeluc.tb_contrato";
                $resultado_usuarios = mysqli_query($con, $result_usuarios);
                    
                echo"<div class='container-fluid bg-gray-400'>"
                      ."<div class='card shadow mb-4' >"
                        ."<div class='card-body bg-gray-300'>"
                            ."<div class='table-responsive bg-gray-300 text-dark'>"
                                ."<table class='table table-striped table-hover table-sm text-dark' id='dataTable' width='100%' cellspacing='0'>"
                                    ."<thead class='thead-dark'>"
                                    .     "<tr>"
                                    .       "<th>Ação</th>"
                                    .       "<th>Cód.Identificador</th>"
                                    .       "<th>Razão Social</th>"
                                    .       "<th>Ativo</th>"
                                    .     "</tr>"
                                    . "</thead>"
                                    ."<tbody>";
                    ini_set('default_charset', 'utf-8');
                    while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
                        
                          $auxStatus = $row_usuario['ativo'];
                                                
                                                if ($auxStatus == 'S') {
                                                    $status = 'ATIVO';
                                                } else {
                                                    $status = 'INATIVO';
                                                }

                                    echo "<tr>"
                                    .       "<td>"
                                            . "<a class='btn btn-dark view_data text-white' href='Editar_Setor.php?id=" . $row_usuario['id_contrato'] . "'>
                                                <svg class='bi d-block mx-auto mb-1' 
                                                                 width='10' height='10' fill='currentColor'>
                                                            <use xlink:href='../../../fonts/bootstrap-icons.svg#pencil-fill'/>
                                                            </svg></a></td>"
                                    .       "<td>".$row_usuario['cod_identificador']."</td>"
                                    .       "<td>".$row_usuario['razao']."</td>"
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
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="Index.php">Logout</a>
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

    </body>

</html>