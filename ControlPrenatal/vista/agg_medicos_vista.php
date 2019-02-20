<?php
$mensaje='';
try{
	$conexion = new PDO('mysql:host=localhost;dbname=centromedico','root','');
}catch(PDOException $e){
	echo "Error: ". $e->getMessage();
}


?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ruta Materna</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Preloader CSS
        ============================================ -->
    <link rel="stylesheet" href="css/preloader/preloader-style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
             
<strong><img src="img/logo/logosn.png" alt="" /></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a href="CenterMedicine.php">
                                <i class="fa big-icon fa-home icon-wrap"></i>
                                <span class="mini-click-non">Inicio</span>
                            </a>
                        </li>
                        <li>
<a  href="calendario.php" aria-expanded="false"><i class="fa big-icon fa-calendar icon-wrap"></i> <span class="mini-click-non">Citas</span></a>
                        </li>
                        <li>
<a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="fa big-icon fa-stethoscope icon-wrap"></i> <span class="mini-click-non">Consultas</span></a>

<ul class="submenu-angle" aria-expanded="false">

<li><a  href="agregarconsulta.php"><i class="fa fa-plus sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Nueva Consulta</span></a></li>

<li><a  href="consultapre.php"><i class="fa fa-list sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Lista de Pacientes</span></a></li>
                            </ul>
                        </li>
                        <li>

<a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="fa big-icon fa-flask icon-wrap"></i> <span class="mini-click-non">Historial Perinatal &nbsp; &nbsp; </span></a>

<ul class="submenu-angle" aria-expanded="false">

<li><a  href="historiapaciente.php"><i class="fa fa-plus sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Crear Historial</span></a></li>

<li><a  href="prenatal.php"><i class="fa fa-list sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Lista de Historiales</span></a></li>
                            </ul>
                        </li>
                        

<li>

<a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="fa big-icon fa-user-md icon-wrap"></i> <span class="mini-click-non">Medicos</span></a>
                            <ul class="submenu-angle" aria-expanded="false">

<li><a  href="agregarmedicos.php"><i class="fa fa-plus sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Agregar Medico</span></a></li>

<li><a  href="medicos.php"><i class="fa fa-list sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Lista de Medicos</span></a></li>
                            </ul>
                        </li>
                        
                        <li>

<a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="fa big-icon fa-copy icon-wrap"></i> <span class="mini-click-non">Reportes</span></a>
                            <ul class="submenu-angle" aria-expanded="false">

<li><a  href="reporteshistorial.php"><i class="fa fa-file-pdf-o sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Historiales Perinatales</span></a></li>

<li><a  href="listadodepersonapdf.php"><i class="fa fa-file-pdf-o sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Listado de Medicos</span></a></li>

<li><a  href="listadoconsultas_pdf.php."><i class="fa fa-file-pdf-o sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Listado de Consultas</span></a></li>
                               
                            </ul>
                        </li>
                        <li>

<a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="fa big-icon fa-line-chart icon-wrap"></i> <span class="mini-click-non">Estadisticas</span></a>
                            <ul class="submenu-angle" aria-expanded="false">

<li><a  href="estadistica_embarazada.php"><i class="fa fa-bar-chart sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Pacientes por Edad</span></a></li>

<li><a  href="estadistica_mes.php"><i class="fa fa-bar-chart sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Pacientes por Meses</span></a></li>
                            </ul>
                        </li>
                        <li>

<a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="fa big-icon fa-users icon-wrap"></i> <span class="mini-click-non">Usuarios</span></a>

<ul class="submenu-angle" aria-expanded="false">

<li><a  href="registrarusuarios.php"><i class="fa fa-plus sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Nuevo Usuario</span></a></li>

<li><a  href="usuarios.php"><i class="fa fa-list sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Lista de Usuarios</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="CenterMedicine.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">

<div class="menu-switcher-pro">

<button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">

<i class="fa fa-bars"></i>
                                                </button>
                                        </div>
                                    </div>

<div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">

<div class="header-top-menu tabl-d-n">

<ul class="nav navbar-nav mai-top-nav">
<li class="nav-item"><a href="CenterMedicine.php" class="nav-link">Inicio</a>
</li>
<li class="nav-item"><a href="integrante.php" class="nav-link">Aceca de</a>
</li>

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
<div class="header-right-info">
<ul class="nav navbar-nav mai-top-nav header-right-menu">
<li class="nav-item">
<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
<i class="fa fa-user adminpro-user-rounded header-riht-inf" aria-hidden="true"></i>
<span class="admin-name">Administrador</span>
<i class="fa fa-angle-down adminpro-icon adminpro-down-arrow"></i>
                                                        </a>
<ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">

                                                        
<li><a href="cerrar.php"><span class="fa fa-lock author-log-ic"></span>Cerrar Sesion</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
<li><a data-toggle="collapse" data-target="#Charts" href="#">Inicio <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        </li>
<li><a data-toggle="collapse" data-target="#demo" href="calendario.php">Citas <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        </li>
<li><a data-toggle="collapse" data-target="#others" href="#">Consultas<span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
<ul id="others" class="collapse dropdown-header-top">
<li><a href="file-manager.html">Nueva Consulta</a></li>
<li><a href="contacts.html">Lista de Pacientes</a></li>
                                            </ul>
</li>
<li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Historial Clinico Perinatal<span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
<ul id="Miscellaneousmob" class="collapse dropdown-header-top">

<li><a href="google-map.html">Crear Historial</a>
                                                </li>

<li><a href="data-maps.html">Lista de Historiales</a>
                                                </li>
                                            </ul>
                                        </li>

<li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Medicos <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>

<ul id="Chartsmob" class="collapse dropdown-header-top">

<li><a href="bar-charts.html">Agregar Medicos</a>
                                                </li>

<li><a href="line-charts.html">Lista de Medicos</a>
                                                </li>
                                            </ul>
                                        </li>
                                       
                                            </ul>
                                        </li>

<li><a data-toggle="collapse" data-target="#formsmob" href="#">Reportes<span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>

<ul id="formsmob" class="collapse dropdown-header-top">

<li><a href="basic-form-element.html">Pacientes por Mes</a>
                                                </li>

<li><a href="advance-form-element.html">Total de Consultas</a>
                                                </li>
                                            </ul>
                                        </li>

<li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">Estadisticas <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Appviewsmob" class="collapse dropdown-header-top">
<li><a href="estadistica_embarazada.php">Pacientes por Edad</a>
                                                </li>
<li><a href="estadistica_año.php">Pacientes por Meses</a>
                                                </li>
<li><a href="estadisticas_medicos.php">Consultaspor Medicos</a>
                                                </li>
                                            </ul>
                                        </li>
<li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">Usuarios <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
<ul id="Appviewsmob" class="collapse dropdown-header-top">

<li><a href="basic-form-element.html">Nuevo Usuario</a>
                                                </li>

<li><a href="advance-form-element.html">Lista de Usuarios</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="charts-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="charts-single-pro responsive-mg-b-30">
                            <div class="alert-title">
                                <h1>Agregar Medico</h1>
                            </div>                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
		

<div class="basic-form-area mg-tb-15">

<div class="container-fluid">

<div class="row">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<div class="sparkline12-list">

<div class="sparkline12-graph">

<div class="basic-login-form-ad">

<div class="row">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<div class="all-form-element-inner">

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                                                    
	
					
						
						

<div class="form-group-inner">
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

<label class="login2 pull-right pull-right-pro">Identificacion</label>

</div>

<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">

<input type="number" class="form-control"  name="identificacion" placeholder="Cedula o Pasaporte" />
                                                            </div>
                                                        </div>
            </div>
 <div class="form-group-inner">
 <div class="row">
         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

<label class="login2 pull-right pull-right-pro">Nombre(s)</label>

</div>

<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">

<input type="text" class="form-control" name="nombres" placeholder="Nombre(s)" />

</div>
                                                        </div>

</div>

<div class="form-group-inner">

<div class="row">

<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

<label class="login2 pull-right pull-right-pro">Apellido(s)</label>

</div>

<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">

<input type="text" class="form-control" name="apellidos" placeholder="Apellido(s)" />
                                                            </div>
                                                        </div>
                                                    </div>



<div class="form-group-inner">

<div class="row">

<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

<label class="login2 pull-right pull-right-pro">Correo</label>
                                                            </div>

<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">

<input type="email" class="form-control" name="correo" placeholder="Correo@gmail.com" />
                                                            </div>
                                                        </div>
                                                    </div>

<div class="form-group-inner">
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

<div class="input-mask-title"><label>Telefono</label>

</div>

</div>
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
<div class="input-mark-inner mg-b-22"><input type="number" class="form-control" name="telefono" placeholder="Telefono">
					                                            </div>
					                                        </div>
					                                    </div>
					                                </div>


<div class="form-group-inner">
<div class="login-btn-inner">
<div class="row">
<div class="col-lg-3"></div>
<div class="col-lg-3">
<div class="login-horizental cancel-wp pull-left">

<a href="vista/medicos_vista.php"><button class="btn btn-sm btn-primary login-submit-cs" type="submit" name="enviar" >Guardar Datos</button></a>

</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
</form>
<?php  if(!empty($errores)): ?>
<ul>
<?php echo $errores; ?>
                                                    </ul>
<?php  endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright &copy; 2019 <b><a href="/">Dionisio Marquez</a></b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/morrisjs/raphael-min.js"></script>
    <script src="js/morrisjs/morris.js"></script>
    <script src="js/morrisjs/morris-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <!-- Charts JS
        ============================================ -->
    <script src="js/charts/Chart.js"></script>
    <script src="js/charts/bar-chart.js"></script>
        <!-- tab JS
        ============================================ -->
    <script src="js/tab.js"></script>
        <!-- data table JS
        ============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
        ============================================ -->
    <script src="js/editable/jquery.mockjax.js"></script>
    <script src="js/editable/mock-active.js"></script>
    <script src="js/editable/select2.js"></script>
    <script src="js/editable/moment.min.js"></script>
    <script src="js/editable/bootstrap-datetimepicker.js"></script>
    <script src="js/editable/bootstrap-editable.js"></script>
    <script src="js/editable/xediable-active.js"></script>
</body>

</html>


				