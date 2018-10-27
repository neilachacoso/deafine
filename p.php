<?php 
	$validator 	= array('success' => false, 'messages' => array(), 'phone' => array(), 'website' => array(), 'email' => array());

	if($_POST){
		$validator['success'] = true;
		$validator['messages'] = "Successfully added";
		$validator['phone'] = '$phone';
		$validator['website'] = '$website';
		$validator['email'] = '$email';


		echo json_encode($validator);
	}
?>