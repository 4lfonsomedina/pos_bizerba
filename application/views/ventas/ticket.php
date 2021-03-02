<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="Panel Arkanari - Administración de Seguros y Recetas Médicas">
        <meta name="author" content="Arkanari">
        <link rel="shortcut icon" href="/images/favicon.png" type="image/png">
        <meta id="token" name="token" value="{{ csrf_token() }}">

        <title>Sistema Farmacias Angeles</title>

        <link href="/css/style.default.css" rel="stylesheet">
        <link href="/css/style.angeles.css" rel="stylesheet">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css">

        <style>
          @page { size: 65mm 200mm;  } /* output size */
          body.receipt .sheet { width: 65mm; height:auto; margin:0; } /* sheet size */
          @media print { body.receipt { width: 65mm; height: 200mm; } } /* fix for Chrome */
          p {
            font-size: 1rem; line-height: 12px; text-align: center; margin:0;
          }

          h5 {
            margin:0;
            padding:0;
          }

          table {
            font-size: .8rem;
            margin:0;
            width: 100%;
          }
        </style>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript">

          $( document ).ready(function() {
            
            window.print();
            setTimeout(window.close, 100);
          });

        </script>
        
    </head>

    <!--<body class="receipt" onload="window.print();">-->
    <body class="receipt">

      <section class="sheet padding-10mm">  
          
        <h5 align="center"><strong>FARMACIAS ANGELES DE BAJA CALIFORNIA</strong></h5>
          <p>
            FAB171018973 <br />
            {{ $almacen->direccion }} <br />
            {{ $almacen->colonia }}. Mexicali B.C. CP {{ $almacen->cp }} <br />
            {{ $almacen->almacen }}
          </p>
          <p>{{ date('d / M / Y h:i:s A', strtotime($nota_detalle->fecha)) }}</p>
					<p>CORTE: {{ $nota_detalle->folio_corte }}</p>
					<p>FOLIO: 0{{ $nota_detalle->folio }}</p>
          <br />
          <table>
            <thead>
              <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Importe</th>          
              </tr>
            </thead>
            <tbody>
              @foreach ($nota_productos as $detalle)
              <tr>
                <td>{{ $detalle->producto }}</td> 
                <td>{{ $detalle->cantidad }}</td> 
                <td>${{ number_format($detalle->precio, 2) }}</td> 
                <td>${{ number_format($detalle->subtotal, 2) }}</td> 
              <tr>  
              @endforeach
              <tr>
                <td></td> 
                <td></td> 
                <td>---------</td> 
                <td>---------</td> 
              <tr>
              <tr>
                <td></td> 
                <td></td> 
                <td>Subtotal</td> 
                <td>${{ number_format($nota_detalle->subtotal, 2) }}</td> 
              <tr>
              <tr>
                <td></td> 
                <td></td>
                <td>IVA 8%</td> 
                <td>${{ number_format($nota_detalle->iva, 2) }}</td> 
              <tr>  
              <tr>
                <td></td> 
                <td></td> 
                <td>IEPS 8%</td> 
                <td>${{ number_format($nota_detalle->ieps, 2) }}</td> 
              <tr>
              <tr>
                <td></td> 
                <td></td> 
                <td>---------</td> 
                <td>---------</td> 
              <tr>
              <tr>
                <td></td> 
                <td></td> 
                <td>TOTAL</td> 
                <td>${{ number_format($nota_detalle->total, 2) }}</td> 
               <tr> 
               <tr>
                <td></td> 
                <td></td> 
                <td>PAGO</td> 
                <td>${{ number_format(($nota_detalle->pesos + ($nota_detalle->dolares * $nota_detalle->tc) + $nota_detalle->tarjeta),2) }}</td> 
               <tr>
                <tr>
                <td></td> 
                <td></td> 
                <td>CAMBIO</td> 
                <td>${{ number_format((($nota_detalle->pesos + ($nota_detalle->dolares * $nota_detalle->tc) + $nota_detalle->tarjeta) - $nota_detalle->total),2) }}</td> 
               <tr>        

              </tbody>
            </table>
            <br />
            <p>GRACIAS POR SU COMPRA!</p>

    </section>  
  </body>
</html>