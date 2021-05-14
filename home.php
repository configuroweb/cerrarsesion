<!DOCTYPE html>
	<?php
		session_start();
		if(!ISSET($_SESSION['user_id'])){
			header('location:index.php');
		}else{
			if((time() - $_SESSION['time']) > 60){
				header('location: logout_page.php');
			}
		}
	?>
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
		<?php
			require 'conn.php';
			$query = $conn->query("SELECT * FROM `user` WHERE `user_id` = '$_SESSION[user_id]'");
			$fetch = $query->fetch_array();
		?>
		<h2 class="text-success">Bienvenid@!</h2>
		<br />
		<center><h1><?php echo $fetch['name']?></h1></center>
		<a href="logout.php">Cerrar Sesión</a>
	</div>
</body>
</html>