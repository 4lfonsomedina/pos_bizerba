<div class="col-md-4"></div>
<div class="col-md-4">
  <div class="panel panel-default">
    <div class="panel-heading">Retiro de caja</div>
    <div class="panel-body">
      <form method="post" action="<?= site_url('Ventas_controller/realizar_retiro') ?>">
        <input type="hidden" name="id_corte" value="<?= $caja->id_cajas ?>">
      <div class="col-xs-7">
        Retiro de caja:
        <input type="number" class="form-control" name="retiro" value="<?= $empresa->retiros ?>" required>
      </div>
      <div class="col-xs-5" align="right">
        <br>
        <button class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></button>
      </div>
    </div>
  </div>