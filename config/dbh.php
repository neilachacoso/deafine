<?php 
	$conn = mysqli_connect('localhost', 'root', '', 'dpdatabase2');

	if (!$conn){
		die("Connection failed: ".mysqli_connect_error());	
	}
?>