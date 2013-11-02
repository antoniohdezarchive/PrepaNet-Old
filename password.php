<?php
	include "DOMElements/view.php";
	validarSession("student");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>
        PrepaNet - Inscripciones
    </title>
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<?php
		printTopbar();
	?>
	<div class="container CScontenedor">
		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				<div class="content">
					<div class="centerText">
						<h3>Cambio de Contraseña</h3>
					</div>
					<form class="form-horizontal" role="form" action="SeleccionMaterias.php" method="get">
						<div class="form-group">
						    <label for="contraseñaVieja" class="col-md-3 control-label">Contraseña Actual:</label>
						    <div class="col-md-9">
						    	<input type="password" name="contraseñaVieja" class="form-control" id="contraseñaVieja" placeholder="Introduce tu Contraseña actual">
						    </div>
						</div>
						<div class="form-group">
						    <label for="contraseña" class="col-md-3 control-label">Nueva Contraseña:</label>
						    <div class="col-md-9">
						    	<input type="password" name="contraseña" class="form-control" id="contraseña" placeholder="Introduce tu nueva Contraseña">
						    </div>
						</div>
						<div class="form-group">
						    <label for="contraseña" class="col-md-3 control-label">Comfirma Contraseña:</label>
						    <div class="col-md-9">
						    	<input type="password" name="contraseña" class="form-control" id="contraseña" placeholder="Introduce tu nueva Contraseña">
						    </div>
						</div>
						<div class="form-group">
							<div class="col-md-offset-3 col-md-9">
						    	<button class="btn btn-primary signIn" type="submit">Guardar Contraseña</button>
						    </div>
						</div>
					</form>
				</div>
    		</div>
    	</div>
	</div>

	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
</body>
</html>