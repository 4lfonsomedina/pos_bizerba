<div class="col-md-1"></div>
<div class="col-md-10">
	<div class="panel panel-primary">
		<div class="panel-heading">CATALOGO DE PRODUCTOS 
			<a class="pull-right btn btn-success btn-xs btn_alta_producto"> <i class="fa fa-plus" aria-hidden="true"></i> </a>
		</div>
		<div class="panel-body">
			<table class="table" id='tabla_catalogo_productos'>
				<thead>
					<tr>
						<th>PLU</th>
						<th>Descripcion</th>
						<th>Unidad</th>
						<th>Departamento</th>
						<th>Precio</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($productos as $p){?>
					<tr>
						<td>
							<a class='btn_editar_producto' 
								id_producto='<?= $p->id_producto ?>'
								plu='<?= $p->PLU ?>'
								descripcion='<?= $p->descripcion ?>'
								um='<?= $p->um ?>'
								departamento='<?= $p->departamento ?>'
								precio='<?= $p->precio ?>'
							><?= $p->PLU ?></a></td>
						<td><?= $p->descripcion ?></td>
						<td><?= $p->unidad2 ?></td>
						<td><?= $p->departamento2 ?></td>
						<td><?= $p->precio ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>




<!-- Modal Alta producto-->
<div id="alta_producto_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form action="<?= site_url('Catalogos_controller/alta_producto') ?>" method="POST">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Alta producto</h4>
      </div>
      <div class="modal-body">
        <b>PLU</b><br><input type="number" name="PLU" class="form-control" required>
        <b>Descripcion</b><br><input type="text" name="descripcion" class="form-control" required>
        <b>Precio</b><br><input type="number" name="precio" class="form-control" required>
        <b>Unidad</b><br>
        <select class="form-control" name="um">
        	<?php foreach($unidades as $u){ ?>
        		<option value='<?= $u->id_unidad ?>'><?= $u->unidad ?></option>
        	<?php } ?>
        </select>
        <b>Departamento</b><br>
        <select class="form-control" name="departamento">
        	<?php foreach($departamentos as $d){ ?>
        		<option value='<?= $d->id_departamento ?>'><?= $d->departamento ?></option>
        	<?php } ?>
        </select>
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
<div id="editar_producto_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
  	<form action="<?= site_url('Catalogos_controller/editar_producto') ?>" method="POST">
  		<input type="hidden" value="" name='id_producto' id='id_producto_edit'>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar producto</h4>
      </div>
      <div class="modal-body">
        <b>PLU</b><br><input type="number" name="PLU" class="form-control" id="plu_edit" required>
        <b>Descripcion</b><br><input type="text" name="descripcion" class="form-control" id="descripcion_edit" required>
        <b>Precio</b><br><input type="number" name="precio" class="form-control" id="precio_edit" required>
        <b>Unidad</b><br>
        <select class="form-control" name="um" id="um_edit">
        	<?php foreach($unidades as $u){ ?>
        		<option value='<?= $u->id_unidad ?>'><?= $u->unidad ?></option>
        	<?php } ?>
        </select>
        <b>Departamento</b><br>
        <select class="form-control" name="departamento" id="departamento_edit">
        	<?php foreach($departamentos as $d){ ?>
        		<option value='<?= $d->id_departamento ?>'><?= $d->departamento ?></option>
        	<?php } ?>
        </select>
      </div>
      <div class="modal-footer">
      	<div class="row">
      		<div class="col-xs-4">
      			<button type="button" class="btn btn-default" data-dismiss="modal" style="width: 100%"><i class="fa fa-reply" aria-hidden="true"></i></button>
      		</div>
      		<div class="col-xs-4">
      			<button type="button" class="btn btn-danger btn_borrar_producto" style="width: 100%"><i class="fa fa-trash" aria-hidden="true"></i></button>
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