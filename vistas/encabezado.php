<?php
session_start();

if (!isset($_SESSION["id"])) {
  header("Location: login.php");
  exit();
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <title>MiParqueadero</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo" href="index.php">Mi Parqueadero</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <!--Notification Menu-->
              <li class="dropdown notification-menu"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o fa-lg"></i></a>
                <ul class="dropdown-menu">
                  <li class="not-head">You have 4 new notifications.</li>
                  <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Lisa sent you a mail</span><span class="text-muted block">2min ago</span></div></a></li>
                  <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Server Not Working</span><span class="text-muted block">2min ago</span></div></a></li>
                  <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Transaction xyz complete</span><span class="text-muted block">2min ago</span></div></a></li>
                  <li class="not-footer"><a href="#">See all notifications.</a></li>
                </ul>
              </li>
              <!-- User Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                  <li><a href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
                  <li><a href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                  <li><a href="controladores/cerrarsession.controlador.php"><i class="fa fa-sign-out fa-lg"></i>Cerrar Sesión</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img class="img-circle" src="./assets/images/user.png" alt="User Image"></div>
            <div class="pull-left info">
              <p><?php
              echo $_SESSION["nombre"]; // deberia salir el nombre en el encabezado, valider ...!!OJOO
              ?></p>
              
              <!--<p class="designation">Frontend Developer</p>-->
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            
            <li class="treeview"><a href="#"><i class="fa fa-car"></i><span> Vehículo</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="?c=vehiculo"><i class="fa fa-circle-o"></i>Listar</a></li>
                <li><a href="ui-cards.html"><i class="fa fa-circle-o"></i> Cards</a></li>
                <li><a href="widgets.html"><i class="fa fa-circle-o"></i> Widgets</a></li>
              </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Forms</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="form-components.html"><i class="fa fa-circle-o"></i> Form Components</a></li>
                <li><a href="form-custom.html"><i class="fa fa-circle-o"></i> Custom Components</a></li>
                <li><a href="form-samples.html"><i class="fa fa-circle-o"></i> Form Samples</a></li>
                <li><a href="form-notifications.html"><i class="fa fa-circle-o"></i> Form Notifications</a></li>
              </ul>
            </li>
            <li><a href="charts.html"><i class="fa fa-pie-chart"></i><span>Charts</span></a></li>
          </ul>
        </section>
      </aside>
      