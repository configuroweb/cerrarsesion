<?php
	$conn = new mysqli('localhost', 'root', '', 'cerrarsesion');
	
	if(!$conn){
		die("Error: Can't connect to database!");
	}
?>