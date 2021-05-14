<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['login'])){
		if(!empty($_POST['username']) && !empty($_POST['password'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			$query = $conn->query("SELECT * FROM `user` WHERE `username` = '$username' && `password` = '$password' ") or die(mysqli_errno());
			$row = $query->num_rows;
			$fetch = $query->fetch_array();
			if($row > 0){
				session_start();
				$_SESSION['user_id'] = $fetch['user_id'];
				$_SESSION['time'] = time();
				echo "<script>alert('Acceso confirmado!')</script>";
				echo "<script>window.location='home.php'</script>";
			}else{
				echo "<script>alert('Usuario o Contraseña Inválida')</script>";
				echo "<script>window.location='index.php'</script>";
			}
		}else{
			echo "<script>alert('Por favor complete el campo requerido!')</script>";
				echo "<script>window.location='index.php'</script>";
		}
		
	};
?>