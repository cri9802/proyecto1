<link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">
 
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
  <link href="{{asset('plantillamx/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('plantillamx/css/sb-admin-2.min.css')}}" rel="stylesheet">


    <!-- Custom fonts for this template -->
  <link href="{{asset('plantillamx/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('plantillamx/css/sb-admin-2.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="{{asset('plantillamx/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

</head>


<body id="page-top">
  <div id="wrapper">  
    <div id="content-wrapper" class="d-flex flex-column"> 
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <ul class="navbar-nav ml-auto">           
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">  {{Session::get('sesionname')}}</b>
                </span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a  href="{{URL::action('controlador_acceso@cerrarsesion')}}" class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Salir
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <div class="row justify-content-center">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="ae-container-fluid rk-topbar"> 
      <form class="form">       
          <div class="row justify-content-center">
            <div class="col-xs-6 col-xs-offset-9">
              <a class="nav-link rk-item ae-masonry__item" routerLink="principalde">
                <img src="images/vac.PNG" alt="" width= "400px" height="400px">
                  
              </a>
              <p class="ae-u-bolder au-mb-6" ALIGN="center" style="color:blue"><b>Solicita vacaciones</b></p>
            </div>
          </div> 
      </form>
    </div>
  </nav>
        </div>
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Nuxiba &copy; Vacaciones 2020</span>
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
          <a class="btn btn-primary" href="{{URL::action('controlador_acceso@cerrarsesion')}}" >Salir</a>
        </div>
      </div>
    </div>
  </div>


  <script src="{{asset('plantillamx/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('plantillamx/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
