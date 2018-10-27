<?php  
	session_start();
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css\style.css">
</head>
<body>
	<?php if(isset($_SESSION['logged']) && !empty($_SESSION['logged'])){ 
		if (isset($_SESSION['account_type'])) {
			if ($_SESSION['account_type'] == 'Applicant') {
				include('home-applicant.php');
			} elseif ($_SESSION['account_type'] == 'Employer'){
				include('home-employer.php');
			}
		}		
	} else { 
		include('homedefault.php');
	} ?>

	<script src="node_modules\jquery\dist\jquery.slim.min.js"></script>
    <script src="node_modules\popper.js\dist\umd\popper.min.js"></script>
    <script src="node_modules\bootstrap\dist\js\bootstrap.min.js"></script>
</body>
</html>