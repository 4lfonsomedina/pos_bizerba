<!DOCTYPE html>
<html>
<head>
	<title>POS bizerba</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?= base_url('assets/css') ?>/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url('assets/css') ?>/general.css">
	<link rel="stylesheet" href="<?= base_url('assets/css') ?>/font-awesome.min.css">
</head>
<body>

<div style="width: 100%; height: 100px;"></div>
<div class="col-sm-4"></div>
<div class="col-sm-4" >
  <div class="panel panel-primary">
    <div class="panel-body">
      <div class="col-xs-1"></div><div class="col-xs-10">
        <div style="padding: 20px; text-align: center;"><img src="<?= base_url('assets/img/logo.jpg') ?>" style="width: 100%;max-width: 200px"></div>
        <form method="POST" action="<?= site_url('Welcome/validar') ?>">
            <input type="text" class="form-control" name="usuario"> <b style="position: absolute; font-size: 10px;">Usuario</b>
            <br>
            <input type="password" class="form-control" name="clave"><b style="position: absolute;font-size: 10px;">Clave</b>
            <br><br>
            <button class="btn btn-primary" style="width: 100%;">Acceder</button>
          </form>
      </div>
    </div>
  </div>
    <div class="alert alert-danger" style="margin-top: 20px" id="mensaje_error" hidden>
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Usuario o clave incorrectos!</strong>.
    </div>
</div>
</body>
<footer>
  <script src="<?= base_url('assets/js') ?>/jquery.js"></script>
  <script src="<?= base_url('assets/js') ?>/bootstrap.js"></script>
  <?php if(isset($_GET['e'])){ ?>
    <script type="text/javascript">
      $("#mensaje_error").show(500,function(){
        setTimeout(function() { $("#mensaje_error").hide(500); }, 5000);
      });
    </script>
  <?php } ?>
</footer>