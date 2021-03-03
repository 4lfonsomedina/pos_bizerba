<div class="col-md-1"></div>
<div class="col-md-10">
	<div class="panel panel-default">
		<div class="panel-heading">CATALOGO DE PRODUCTOS 
			<a class="pull-right btn btn-success btn-xs btn_alta_departamento"> <i class="fa fa-plus" aria-hidden="true"></i> </a>
		</div>
		<div class="panel-body">
			<table class="table" id='tabla_catalogo'>
				<thead>
					<tr>
						<th>#</th>
						<th>DEPARTAMENTO</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($departamentos as $d){?>
					<tr>
						<td><?= $d->id_departamento ?></td>
						<td><a class='btn_editar_departamento' 
                id_departamento='<?= $d->id_departamento ?>'
                departamento='<?= $d->departamento ?>'
              ><?= $d->departamento ?></a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>




<!-- Modal Alta producto-->
<div id="alta_departamento_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form action="<?= site_url('Catalogos_controller/alta_departamento') ?>" method="POST">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Alta producto</h4>
      </div>
      <div class="modal-body">
        <b>departamento</b><br><input type="text" name="departamento" class="form-control" required>
      </div>
      <div class="modal-footer">
      	<div class="row">
      		<div class="col-xs-6">
      			<button type="button" class="btn btn-default" data-dismiss="modal" style="width: 100%"><i class="fa fa-reply" aria-hidden="true"></i></button>
      		</div>
      		<div class="col-xs-6">
      			<button type="submit" class="btn btn-success" style="width: 100%"><i class="fa fa-floppy-o" aria-hidden="true"></i></button>
      		</div>

      	</div>
        
      </div>
  	</form>
    </div>

  </div>
</div>


<!-- Modal Editar producto-->
<div id="editar_departamento_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
  	<form action="<?= site_url('Catalogos_controller/editar_departamento') ?>" method="POST">
  		<input type="hidden" value="" name='id_departamento' id='id_departamento_edit'>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar departamento</h4>
      </div>
      <div class="modal-body">
        <b>departamento</b><br>
        <input type="text" name="departamento" class="form-control" id="departamento_edit" required>
      </div>
      <div class="modal-footer">
      	<div class="row">
      		<div class="col-xs-4">
      			<button type="button" class="btn btn-default" data-dismiss="modal" style="width: 100%"><i class="fa fa-reply" aria-hidden="true"></i></button>
      		</div>
      		<div class="col-xs-4">
      			<button type="button" class="btn btn-danger btn_borrar_departamento" style="width: 100%"><i class="fa fa-trash" aria-hidden="true"></i></button>
      		</div>
      		<div class="col-xs-4">
      			<button type="submit" class="btn btn-success" style="width: 100%"><i class="fa fa-floppy-o" aria-hidden="true"></i></button>
      		</div>

      	</div>
        
      </div>
    </div>
	</form>

  </div>
</div>