<link rel="stylesheet" href="<?php echo e(asset('dist/css/skins/_all-skins.min.css')); ?>">
 
 <!DOCTYPE html>
<html lang="en">
<head>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Nuxiba</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo e(asset('plantillamx/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo e(asset('plantillamx/css/sb-admin-2.min.css')); ?>" rel="stylesheet">


    <!-- Custom fonts for this template -->
  <link href="<?php echo e(asset('plantillamx/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo e(asset('plantillamx/css/sb-admin-2.min.css')); ?>" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="<?php echo e(asset('plantillamx/vendor/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">

</head>


<body id="page-top">
  <div id="wrapper">  
    <div id="content-wrapper" class="d-flex flex-column"> 
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <ul class="navbar-nav ml-auto">           
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">  <?php echo e(Session::get('sesionname')); ?></b>
                </span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a  href="<?php echo e(URL::action('controlador_acceso@cerrarsesion')); ?>" class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Salir
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <div class="row justify-content-center">
          <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
              <div class="card-body p-0">
                <div class="row">
                  <div class="col-lg-6 d-none d-lg-block bg-login-image" ></div>
                    <div class="col-lg-6">
                      <div class="p-5">
                        <div class="text-center">
                          <h1 class="h4 text-gray-900 mb-4">Bienvenido al sistema de Vacaciones </h1>
                        </div>           
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
    </div>
  </div>
  
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Listo para salir?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="<?php echo e(URL::action('controlador_acceso@cerrarsesion')); ?>" >Salir</a>
        </div>
      </div>
    </div>
  </div>



  <script src="<?php echo e(asset('plantillamx/vendor/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('plantillamx/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="{asset('plantillamx/vendor/jquery-easing/jquery.easing.min.js')}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{asset('plantillamx/js/sb-admin-2.min.js')}"></script>

  <!-- Page level plugins -->
  <script src="{asset('plantillamx/vendor/chart.js/Chart.min.js')}"></script>

  <!-- Page level custom scripts -->
  <script src="{asset('plantillamx/js/demo/chart-area-demo.js')}"></script>
  <script src="{asset('plantillamx/js/demo/chart-pie-demo.js')} "></script>

  <!-- Page level plugins -->
  <script src="{asset('plantillamx/vendor/datatables/jquery.dataTables.min.js')}"></script>
  <script src="{asset('plantillamx/vendor/datatables/dataTables.bootstrap4.min.js')}"></script>

  <!-- Page level custom scripts -->
  <script src="{asset('plantillamx/js/demo/datatables-demo.js')}"></script>

</body>

</html>
