<form method="POST" action="<?= site_url('Empresa_controller/guardar') ?>">
      <input type="hidden" name="id_empresa" value="<?= $empresa->id_empresa ?>">
<div class="col-md-2"></div>
<div class="col-md-8">
	<div class="panel panel-default">
		<div class="panel-heading">DATOS DE LA EMPRESA 
			<button type="submit" class="pull-right btn btn-success btn-xs"> 
         Guardar <i class="fa fa-floppy-o" aria-hidden="true"></i> 
      </button>
		</div>
		<div class="panel-body">
      <div class="col-md-6 top_form">
        <b>RFC</b>
        <input type="text" class="form-control" name="rfc" value="<?= $empresa->rfc ?>">
      </div>
      <div class="col-md-6 top_form">
        <b>NOMBRE</b>
        <input type="text" class="form-control" name="nombre" value="<?= $empresa->nombre ?>">
      </div>
      <div class="col-md-12 top_form">
        <b>DIRECCION</b>
        <input type="text" class="form-control" name="direccion" value="<?= $empresa->direccion ?>">
      </div>
      <div class="col-md-6 top_form">
        <b>TELEFONO</b>
        <input type="text" class="form-control" name="telefono" value="<?= $empresa->telefono ?>">
      </div>
      <div class="col-md-6 top_form">
        <b>IMPUESTO</b>
        <select class="form-control" name="iva">
          <option value="0.16" <?php if($empresa->iva=='0.16'){echo "selected";}?>> 16% </option>
          <option value="0.08" <?php if($empresa->iva=='0.08'){echo "selected";}?>> 8% </option>
        </select>
      </div>
      <div class="col-md-4 top_form">
        <b>TIPO DE CAMBIO</b>
        <input type="text" class="form-control" name="tipo_cambio" value="<?= $empresa->tipo_cambio ?>">
      </div>
      <div class="col-md-4 top_form">
        <b>FONDO</b>
        <input type="text" class="form-control" name="fondo" value="<?= $empresa->fondo ?>">
      </div>
      <div class="col-md-4 top_form">
        <b>RETIROS</b>
        <input type="text" class="form-control" name="retiros" value="<?= $empresa->retiros ?>">
      </div>
    </div>
  </div>
</div>

</form>