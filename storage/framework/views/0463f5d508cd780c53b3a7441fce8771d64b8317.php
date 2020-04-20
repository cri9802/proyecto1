
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>Nuxiba</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/responsive.css')); ?>">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="<?php echo e(asset('css/colors/orange.css')); ?>" />

    <!-- Modernizer -->
    <script src="<?php echo e(asset('js/modernizer.js')); ?>"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="loader">
        <div id="status"></div>
    </div>
    <div id="site-header">
        <header id="header" class="header-block-top">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <!-- navbar -->
                        <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                
                            </div>
                            <div id="navbar" class="navbar-collapse collapse" >
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a href="#banner">INICIO</a></li>                                    
                                    <li><a href="login1">INICIAR SESION</a></li>

                                </ul>
                            </div>
                            <!-- end nav-collapse -->
                        </nav>
                        <!-- end navbar -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </header>
        <!-- end header -->
    </div>
    


 

    <div id="menu" class="menu-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
                    Solicitud de vacaciones en la empresa Nuxiba 
                    </h2>
                        <p class="title-caption text-center">Para poder generar una solicitud de vacaciones, primero necesitas estar registrado por el administrador, posteriormente ya registrado, deberas loguearte para generar la solicitud. </p>
                    </div>
                   
                    <!-- end tab-menu -->
                </div>
                <!-- end col -->
            </div>
            
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end menu -->





    <footer class="ae-container-fluid rk-footer ">
    <div class="ae-grid ae-grid--collapse">
      <div class="ae-grid__item item-lg-4 au-xs-ta-center au-lg-ta-left">
        <ul class="rk-menu rk-footer-menu">
          
          <li class="rk-menu__item"><a href="contact.html" class="rk-menu__link"><p style="color:#576771"></p></a>
          </li>
        </ul>
        <p class="rk-footer__text rk-footer__copy "> <span class="ae-u-bold">© </span><span class="ae-u-bolder"> 2020 Nuxiba </span>All Right Reserved.</p>
      </div>
      <div class="ae-grid__item item-lg-4 au-xs-ta-center">
        <a href="#0" class="rk-social-btn ">
         
          </a>
        </div>
      <div class="ae-grid__item item-lg-4 au-xs-ta-center au-lg-ta-right">
        <p class="rk-footer__text rk-footer__contact "> 
          <span class="ae-u-bold">Email: </span><span class="ae-u-bolder">
             <a href="#0" class="rk-dark-color ">contact@nuxiba.com </a></span></p>
        
      </div>
    </div>
  </footer>
    <!-- end footer-main -->






    <a href="#" class="scrollup" style="display: none;">Scroll</a>

    <section id="color-panel" class="close-color-panel">
        <a class="panel-button gray2"><i class="fa fa-cog fa-spin fa-2x"></i></a>
               <div class="segment">
            <h4 class="gray2 normal no-padding">Color Scheme</h4>
            <a title="orange" class="switcher orange-bg"></a>
            <a title="strong-blue" class="switcher strong-blue-bg"></a>
            <a title="moderate-green" class="switcher moderate-green-bg"></a>
            <a title="vivid-yellow" class="switcher vivid-yellow-bg"></a>
        </div>
    </section>

    <!-- ALL JS FILES -->
    <script src="<?php echo e(asset('js/all.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <!-- ALL PLUGINS -->
    <script src="<?php echo e(asset('js/custom.js')); ?>"></script>
</body>

</html>


