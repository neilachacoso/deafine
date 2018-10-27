<?php 
	$validator 	= array('success' => false, 'messages' => array(), 'phone' => array(), 'website' => array(), 'email' => array());

	if($_POST){
		$phone = $_POST['phoneEdit'];
		$website = $_POST['websiteEdit'];
		$email = $_POST['emailEdit'];
		$success = true;

		$validator['success'] = true;
		$validator['messages'] = "Successfully added";
		$validator['phone'] = $phone;
		$validator['website'] = $website;
		$validator['email'] = $email;


		echo json_encode($validator);
	}
?>