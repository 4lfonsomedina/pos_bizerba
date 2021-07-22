<div class="col-md-4"></div>
<div class="col-md-4">
  <div class="panel panel-default">
    <div class="panel-heading">Apertura de caja</div>
    <div class="panel-body">
      <form method="post" action="<?= site_url('Ventas_controller/realizar_apertura') ?>">
      <div class="col-xs-5">
        Fondo de caja:
        <input type="number" class="form-control" name="fondo" value="<?= $empresa->fondo ?>" required>
      </div>
      <div class="col-xs-5">
        Tipo de cambio:
        <input type="number" class="form-control" value="<?= $empresa->tipo_cambio ?>" name="tipo_cambio" required>
      </div>
      <div class="col-xs-2">
        <br>
        <button class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></button>
      </div>
    </div>
  </div>