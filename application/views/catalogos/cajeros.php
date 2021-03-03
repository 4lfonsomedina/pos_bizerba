<div class="col-md-1"></div>
<div class="col-md-10">
	<div class="panel panel-default">
		<div class="panel-heading">CATALOGO DE CAJEROS 
			<a class="pull-right btn btn-success btn-xs btn_alta_cajero"> <i class="fa fa-plus" aria-hidden="true"></i> </a>
		</div>
		<div class="panel-body">
			<table class="table" id='tabla_catalogo'>
				<thead>
					<tr>
						<th>#</th>
						<th>NOMBRE</th>
						<th>USUARIO</th>
						<th>CLAVE</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($cajeros as $c){?>
					<tr>
						<td><?= $c->id_usuario ?></td>
						<td><a class='btn_editar_cajero' 
                id_usuario='<?= $c->id_usuario ?>'
                nombre='<?= $c->nombre ?>'
                usuario='<?= $c->usuario ?>'
                clave='<?= $c->clave ?>'
              ><?= $c->nombre ?></a></td>
						<td><?= $c->usuario ?></td>
            <td>*******</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>




<!-- Modal Alta producto-->
<div id="alta_cajero_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form action="<?= site_url('Catalogos_controller/alta_cajero') ?>" method="POST">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Alta cajero</h4>
      </div>
      <div class="modal-body">
        <b>Nombre</b><br><input type="text" name="nombre" class="form-control" required>
        <b>Usuario</b><br><input type="text" name="usuario" class="form-control" required>
        <b>Clave</b><br><input type="password" name="clave" class="form-control" required>
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
<div id="editar_cajero_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
  	<form action="<?= site_url('Catalogos_controller/editar_cajero') ?>" method="POST">
  		<input type="hidden" value="" name='id_usuario' id='id_usuario_edit'>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar cajero</h4>
      </div>
      <div class="modal-body">
        <b>Nombre</b><br><input type="text" name="nombre" class="form-control" id="nombre_edit" required>
        <b>Usuario</b><br><input type="text" name="usuario" class="form-control" id="usuario_edit" required>
        <b>Clave</b><br><input type="password" name="clave" class="form-control" id="clave_edit" required>
      </div>
      <div class="modal-footer">
      	<div class="row">
      		<div class="col-xs-4">
      			<button type="button" class="btn btn-default" data-dismiss="modal" style="width: 100%"><i class="fa fa-reply" aria-hidden="true"></i></button>
      		</div>
      		<div class="col-xs-4">
      			<button type="button" class="btn btn-danger btn_borrar_cajero" style="width: 100%"><i class="fa fa-trash" aria-hidden="true"></i></button>
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