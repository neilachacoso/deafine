<?php 
	session_start();
	require_once '..\config\dbh.php';

	if (isset($_POST['submit'])) {
		$email = $_POST['uid'];
		$pass = $_POST['pwd'];

		$query = "SELECT * FROM user_account a, user_type t, applicant_profile p WHERE a.user_type_id = t.user_type_id AND a.user_account_id = p.user_account_id AND a.username = '$email' AND a.pass = '$pass'";
		$result = mysqli_query($conn,$query) or die(mysql_error());

		$rows = mysqli_num_rows($result);

		if($rows==1){

			while($row = mysqli_fetch_array($result)){
				// $_SESSION['account_email'] = $row['username'];
				$_SESSION['account_type'] = $row['user_type_name'];
				$_SESSION['account_name'] = $row['first_name'];
				$_SESSION['account_id'] = $row['user_account_id'];
				// $_SESSION['account_last_name'] = $row['last_name'];
				$id = $row['user_account_id'];	
				$_SESSION['logged'] = true;			
			}
			header('Location: ../index.php');
			exit;
		} else {
			echo "string";
		}
	}	
?>