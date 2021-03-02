<!--DIV DE IMPRESION-->

@extends ('layouts.master')

@section ('styles')

@endsection

@section ('pageheader')

<h2>
  <span>
    <div class="col-sm-1">
      <a href="/corte">
        <img src="{{ url('/images/arkanari/icons/terminal.svg') }}" width="30px" height="30px" />
      </a>
    </div>

    <div class="col-sm-1">
      <a href="{{ url('/listado_ventas') }}" target="_blank">
        <img src="{{ url('/images/arkanari/icons/listado.svg') }}" width="30px" height="30px" />
      </a>
    </div>  

    <div class="col-sm-1">
      <a href="{{ url('/recetas') }}" target="_blank">
        <img src="{{ url('/images/arkanari/icons/receta.svg') }}" width="30px" height="30px" />
      </a>
    </div>

    <div class="col-sm-1">
      <a href="{{ url('/compras') }}" target="_blank">
        <img src="{{ url('/images/arkanari/icons/compras.svg') }}" width="30px" height="30px" />
      </a>
    </div>

    <div class="col-sm-1">
      <a href="{{ url('/ordenes_compras') }}" target="_blank">
        <i class="fa fa-truck" style="font-size: 30px; border: none; padding: 0; color: black;"></i>
      </a>
    </div>

    <div class="col-sm-1">
      <a href="{{ url('/retiros') }}" target="_blank">
        <img src="{{ url('/images/arkanari/icons/extraccion.svg') }}" width="30px" height="30px" />
      </a>
    </div>

  </span>
</h2>
    
<div class="breadcrumb-wrapper">
  <span class="label" id="nombre_usuario">
    @if( auth()->check() )
      {{ auth()->user()->nombre }} :
    @else
    return redirect()->route('login')  
    @endif
  </span>

  <ol class="breadcrumb">
    <li><a href="">SUCURSAL</a></li>
    <li class="active">{{ session()->get('almacen') }}</li>
  </ol>
</div>

@endsection

@section ('contentpanel')

@include('layouts.errors')

<!-- Busquedas -->
<div class="col-sm-12">
  <div class="panel panel-default">
    <div class="panel-body">
      <form id="envio_total">

        {{ csrf_field() }}

          <div class="col-sm-6">
            <input type="text" class="form-control" name="codigo" placeholder="Ingresa Código Barras / Interno o Palabra" id="input_barcode" disabled />
          </div>

          <div class="col-sm-3">
           <select class="select2" id="cliente_id" name="cliente_id" data-placeholder="Elije Cliente Crédito" disabled required>
              <option value="2" selected>[000] PÚBLICO GENERAL</option>
              @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id }}">[{{ $cliente->clave }}] {{ $cliente->empresa }}</option>
              @endforeach
            </select>
          </div>

          <div class="col-sm-2">
            <input type="text" class="form-control" id="folio_receta" name="folio_receta" placeholder="Ingresa Fólio Receta" disabled />
          </div>

          <div class="col-sm-1">
           <button class="btn btn-default">AGREGAR</button>
         </div>

      </form>
    </div>
  </div>
</div>
<!--Inicio de form-->
<form action="/venta" method="POST" enctype="multipart/form-data" target="_blank" onsubmit="window.location.reload();">

  {{ csrf_field() }}

<!-- Tabla de Articulos de venta -->
<div class="col-sm-9">
  <div class="panel panel-default">
    <div class="panel-body" style="height: 600px; overflow-y: auto;">
      <div class="table-responsive">
        <table class="table mb30" id="farmacias">
          <thead>
            <tr>
              <th>CLAVE</th>
              <th>DESCRIPCIÓN</th>
              <th>CANTIDAD</th>
              <th>DISPONIBLES</th>
              <th>PRECIO PÚBLICO</th>
              <th>DESCUENTOS</th>
              <th>IMPORTE</th>
              <th></th>
            </tr>
          </thead>
          <!-- Llenado de articulos Jquery -->
          <tbody id="articles_boddy"></tbody>
        </table>
      </div><!-- table-responsive -->
    </div>
  </div>
</div>

<!-- Importes y Ticket -->
  <div class="col-sm-3">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="table table-invoice">
          <table class="table mb30">
            <tbody>
              <tr class="folio">
                <td>FOLIO: </td>
                <td><p>{{ $folio }}</p></td>
              </tr>
              <tr>
                <td>Subtotal:</td>
                <td><i id="rsubtotal">0.00</i></td>
              </tr>
              <tr>
                <td>IVA 8%:</td>
                <td><i id="riva">0.00</i></td>
              </tr>
              <tr>
                <td>IEPS 8%:</td>
                <td><i id="rieps">0.00</i></td>
              </tr>
              <tr class="total">
                <td>TOTAL:</td>
                <td><i id="total">0.00</i></td>
              </tr>
              
            </tbody>
          </table>
          <a data-toggle="modal" data-target=".modal_venta" class="btn btn-block btn-black" id="btn_cobrar" disabled>GENERAR VENTA
          </a>
          <button  class="btn btn-block btn-black" id="btn_receta" disabled>SURTIR RECETA</button>
          <a class="btn btn-block btn-warning" id="btn_cancelar_venta"> CANCELAR</i></a>
         
        </div>
      </div>
    </div>
  </div>

<!-- Datos de la venta -->
<input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
<input type="hidden" name="sucursal" id="fsucursal" value="{{ $cortes->almacen_id }}">
<input type="hidden" name="corte" id="fcorte" value="{{ $cortes->id }}">
<input type="hidden" name="tc" value="{{ $tc }}" id="tipo_cambio">
<input type="hidden" name="fcliente_id" id="fcliente_id">
<input type="hidden" name="freceta" id="freceta">
<input type="hidden" name="receta_id" id="freceta_id">
<input type="hidden" name="clave" id="fclave">

<!-- Totales de la venta -->
<input type="hidden" name="subtotal" id="fsubtotal">
<input type="hidden" name="iva" id="fiva">
<input type="hidden" name="ieps" id="fieps">
<input type="hidden" name="total" id="ftotal">
<input type="hidden" name="metodopago" id="fmetodopago"> <!-- 4 para credito-->
<input type="hidden" name="pesos" id="fpesos">
<input type="hidden" name="dlls" id="fdlls">
<input type="hidden" name="tarjeta" id="pesos_tarjeta">
<input type="hidden" name="baucher" id="fbaucher">
<!--cierre de form-->

<!-- Modal window para ingresa factura de compra -->
@include('modals.venta')
@include('modals.articulos')

<tipo-cambio pestatus="{{ $cortes->estatus_id }}" ptipo_cambio="{{ $cortes->tc }}"></tipo-cambio>

</form>

@endsection

@section ('scripts')

<!-- Functional Scripts -->

<script src="/js/jquery.datatables.min.js"></script>
<script src="/js/bootstrap-wizard.min.js"></script>
<script src="/js/select2.min.js"></script>
<script src="/js/jquery.validate.min.js"></script>
<script src="/js/jquery.maskedinput.min.js"></script>

<script src="/js/custom.js"></script>

@endsection

@section ('jquery')
<!--Funciones propias del sistema-->
<!--<script src="/pos/printer/printElement.js"></script>-->
<script src="/pos/function.js"></script>

<script>
jQuery(document).ready(function() {

    "use strict";

    // Select2
    jQuery(".select2").select2({
      width: '100%'
    });

    // Input Masks
    jQuery("#emision").mask("99/99/9999");

    $("#articles_boddy, .modal").on("keyup keypress", function (e) {
      var keyCode = e.keyCode || e.which;
      if (keyCode === 13) {
        e.preventDefault();
        return false;
      }
    });

  });
</script>
@endsection

@section('vue')
<script>
	const app = new Vue({
		el: "#app"
	});
</script>
@endsection