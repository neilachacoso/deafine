<?php  
	session_start();
	require_once '..\config\dbh.php';

	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$type = $_POST['type'];
		$first = $_POST['first'];
		$last = $_POST['last'];

		$_SESSION['account_email'] = $email;
		$_SESSION['account_type'] = $type;
		$_SESSION['account_name'] = $first;

		$query = "INSERT INTO user_type(user_type_name) VALUES ('$type')";
		$result = mysqli_query($conn,$query) or die(mysql_error());

		if($result){
			$last_id = mysqli_insert_id($conn);
			$_SESSION['account_id'] = mysqli_insert_id($conn);

			$userquery = "INSERT INTO user_account(user_type_id, username, pass) VALUES ($last_id, '$email', '$pass')";
			$result1 = mysqli_query($conn,$userquery) or die(mysql_error());

			if($result1){
				$last_id1 = mysqli_insert_id($conn);
				$date = date("d-m-Y", strtotime("now"));

				$log = "INSERT INTO user_log(user_account_id, last_login_date, last_job_apply_date) VALUES ($last_id1, CURDATE(), NULL)";
				$result2 = mysqli_query($conn,$log) or die(mysql_error());

				if ($result2) {
					$addprofile = "INSERT INTO applicant_profile(user_account_id, first_name, last_name) VALUES ($last_id, '$first', '$last')";
					$result = mysqli_query($conn,$addprofile) or die(mysqli_error());
				}
				header('Location: ../profile.php');
			}
		}
	}

	mysqli_close($conn);
?>