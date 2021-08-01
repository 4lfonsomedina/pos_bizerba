<form id="form_cierre">
<input type="hidden" value="<?= $caja->tipo_cambio ?>" id="tipo_cambio">
<input type="hidden" value="<?= $caja->id_cajas ?>" name="id_cajas">
<div class="col-md-2"></div>
<div class="col-md-4">
  <div class="panel panel-default">
  <div class="panel-heading">Pesos</div>
  <div class="panel-body">
    <div class="col-xs-12" style="font-weight: bold; text-align: center;">
      Desgloce:
    </div>
    <div class="col-xs-8">
    	Moneda MXN:
    	<input type="number" class="form-control billete" value="0"  multiplo="1">
    </div>
    <div class="col-xs-4">
    	<br>
    	<input type="number" class="form-control mxn" readonly value="0">
    </div>
    <div class="col-xs-8">
    	Billete 20 MXN:
    	<input type="number" class="form-control billete" value="0" multiplo="20">
    </div>
    <div class="col-xs-4">
    	<br>
    	<input type="number" class="form-control mxn" readonly value="0">
    </div>
    <div class="col-xs-8">
    	Billete 50 MXN:
    	<input type="number" class="form-control billete" value="0" multiplo="50">
    </div>
    <div class="col-xs-4">
    	<br>
    	<input type="number" class="form-control mxn" readonly value="0">
    </div>
    <div class="col-xs-8">
    	Billete 100 MXN:
    	<input type="number" class="form-control billete" value="0"  multiplo="100">
    </div>
    <div class="col-xs-4">
    	<br>
    	<input type="number" class="form-control mxn" readonly value="0">
    </div>
    <div class="col-xs-8">
    	Billete 200 MXN:
    	<input type="number" class="form-control billete" value="0" multiplo="200">
    </div>
    <div class="col-xs-4">
    	<br>
    	<input type="number" class="form-control mxn" readonly value="0">
    </div>
    <div class="col-xs-8">
    	Billete 500 MXN:
    	<input type="number" class="form-control billete" value="0" multiplo="500">
    </div>
    <div class="col-xs-4">
    	<br>
    	<input type="number" class="form-control mxn" readonly value="0">
    </div>
    <div class="col-xs-8">
    	Billete 1000 MXN:
    	<input type="number" class="form-control billete" value="0" multiplo="1000">
    </div>
    <div class="col-xs-4">
    	<br>
    	<input type="number" class="form-control mxn" readonly value="0">
    </div>
  </div>
  </div>
</div>



<div class="col-md-4">
  <div class="panel panel-default">
  <div class="panel-heading">Dolares</div>
  <div class="panel-body">
    <div class="col-xs-12" style="font-weight: bold; text-align: center;">
      Desgloce:
    </div>
    <div class="col-xs-8">
    	Moneda DLLS:
    	<input type="number" class="form-control billete" value="0" multiplo="1">
    </div>
    <div class="col-xs-4">
    	<br>
    	<input type="number" class="form-control dlls" readonly value="0">
    </div>
    <div class="col-xs-8">
    	Billete 1 DLLS:
    	<input type="number" class="form-control billete" value="0" multiplo="1">
    </div>
    <div class="col-xs-4">
    	<br>
    	<input type="number" class="form-control dlls" readonly value="0">
    </div>
    <div class="col-xs-8">
    	Billete 5 DLLS:
    	<input type="number" class="form-control billete" value="0" multiplo="5">
    </div>
    <div class="col-xs-4">
    	<br>
    	<input type="number" class="form-control dlls" readonly value="0">
    </div>
    <div class="col-xs-8">
    	Billete 10 DLLS:
    	<input type="number" class="form-control billete" value="0" multiplo="10">
    </div>
    <div class="col-xs-4">
    	<br>
    	<input type="number" class="form-control dlls" readonly value="0">
    </div>
    <div class="col-xs-8">
    	Billete 20 DLLS:
    	<input type="number" class="form-control billete" value="0" multiplo="20">
    </div>
    <div class="col-xs-4">
    	<br>
    	<input type="number" class="form-control dlls" readonly value="0">
    </div>
    <div class="col-xs-8">
    	Billete 50 DLLS:
    	<input type="number" class="form-control billete" value="0" multiplo="50">
    </div>
    <div class="col-xs-4">
    	<br>
    	<input type="number" class="form-control dlls" readonly value="0">
    </div>
    <div class="col-xs-8">
    	Billete 100 DLLS:
    	<input type="number" class="form-control billete" value="0" multiplo="100">
    </div>
    <div class="col-xs-4">
    	<br>
    	<input type="number" class="form-control dlls" readonly value="0">
    </div>
  </div>
  </div>
</div>
<div class="row">
	<div class="col-xs-12"></div>
</div>
<div class="col-md-2"></div>
<div class="col-md-8">
	<div class="panel panel-default">
  	<div class="panel-heading">Totales efectivo</div>
  		<div class="panel-body">
        <div class="col-md-3">
          Total en retiros:
          <input type="number" class="form-control form_important" readonly value="0" name="total_retiros" readonly>
        </div>
  			<div class="col-md-3">
  				Total en caja:
  				<input type="number" class="form-control form_important" readonly value="0" name="efectivo" id="total_cajero">
  			</div>
  			<div class="col-md-3">
  				Tarjeta:
  				<input type="number" class="form-control form_important" value="0" name="tarjeta">
  			</div>
  			<div class="col-md-3" style="text-align: right;">
  				<br>
  				<button class="btn btn-warning" id="finalizar_cierre">Finalizar cierre</button>
  			</div>
  		</div>
		</div>
	</div>
</div>
</form>