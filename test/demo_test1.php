<?php 
	require_once '..\config\dbh.php';

	$query = "SELECT * FROM user_account WHERE username = 'achacoso.neil@gmail.com'";
	$result = mysqli_query($conn,$query) or die(mysql_error());

	while($row = mysqli_fetch_array($result)){
		$id = $row['user_account_id'];	
		echo $id;	
	}

?>