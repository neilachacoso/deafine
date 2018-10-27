<?php  
	session_start();
	require_once '..\config\dbh.php';

	if (isset($_POST['submit'])) {
		$first = $_POST['first'];
		$last = $_POST['last'];
		$id = $_SESSION['account_id'];

		$query = "INSERT INTO applicant_profile(user_account_id, first_name, last_name) VALUES ($id, '$first', '$last')";
		$result = mysqli_query($conn,$query) or die(mysqli_error());

		if($result){
			header('Location: ../profile.php');
		}
	}

	mysqli_close($conn);
?>