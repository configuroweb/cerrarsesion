<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://configuroweb.com">ConfiguroWeb</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Simple Cierre de Sesión por Inactividad</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<button class="btn btn-primary" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Agregar Usuario</button>
		<br style="clear:both;" /><br /><br />
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="alert alert-info">Ingresar</div>
			
			<form method="POST" action="login.php">
				<div class="form-group">
					<label>Usuario</label>
					<input type="text" name="username" class="form-control"/>
				</div>
				<div class="form-group">
					<label>Contraseña</label>
					<input type="password" name="password" class="form-control"/>
				</div>
				<br />
				<button class="btn btn-primary form-control" name="login"><span class="glyphicon glyphicon-log-in"></span> Ingresar</button>
			</form>
		</div>
	</div>
	<div class="modal fade" id="form_modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<form action="save_query.php" method="POST">
				<div class="modal-content">
					<div class="modal-body">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class="form-group">
								<label>Usuario</label>
								<input class="form-control" type="text" name="username">
							</div>
							<div class="form-group">
								<label>Contraseña</label>
								<input class="form-control" type="password" name="password" />
							</div>
							<div class="form-group">
								<label>Nombre</label>
								<input class="form-control" type="text" name="name" />
							</div>
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cerrar</button>
						<button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</html>