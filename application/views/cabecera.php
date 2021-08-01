<!DOCTYPE html>
<html>
<head>
	<title>POS BIZERBA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?= base_url('assets/css') ?>/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url('assets/css') ?>/general.css">
	<link rel="stylesheet" href="<?= base_url('assets/css') ?>/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/css') ?>/data_table.css">
</head>
<body>


<nav class="navbar navbar-default" style="width: 100%; position: fixed; z-index: 1; border-radius: 0px">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">POS BIZERBA</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-cubes fa-2x" aria-hidden="true"></i> Catalogos <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?= site_url('Catalogos_controller/productos') ?>">Productos</a></li>
            <li><a href="<?= site_url('Catalogos_controller/departamentos') ?>">Departamentos</a></li>
            <!--<li class="divider"></li>-->
            <li><a href="<?= site_url('Catalogos_controller/cajeros') ?>">Cajeros</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> 
<i class="fa fa-money fa-2x" aria-hidden="true"></i> Ventas <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?= site_url('Ventas_controller/apertura') ?>">Apertura de caja</a></li>
            <li><a href="<?= site_url('Ventas_controller/pos') ?>">Punto de venta</a></li>
            <li><a href="<?= site_url('Ventas_controller/retiro') ?>">Retiro de efectivo</a></li>
            <li><a href="<?= site_url('Ventas_controller/cierre') ?>">Cierre de caja</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i> Reportes <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?= site_url('Catalogos_controller/productos') ?>">Reporte de ventas</a></li>
            <li><a href="#">Ventas por productos</a></li>
            <li><a href="#">Ventas por cajeros</a></li>
          </ul>
        </li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> 
          	<?= $this->session->userdata('nombre') ?> <i class="fa fa-caret-square-o-down" aria-hidden="true"></i></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?= site_url('Empresa_controller') ?>"><i class="fa fa-building-o" aria-hidden="true"></i> Empresa</a></li>
            
            <li><a href="<?= site_url('Welcome') ?>"><i class="fa fa-power-off" aria-hidden="true"></i> Salir</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div style="width: 100%; height: 8vh;"></div>