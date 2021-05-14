<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['save'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		
		$conn = $conn->query("INSERT INTO `user` VALUES('', '$username', '$password', '$name')");
		
		header('location: index.php');
	}
?>