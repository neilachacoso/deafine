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
    <link rel="stylesheet" href="..\node_modules\bootstrap\dist\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="..\css\style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>
<body>
	
	<?php echo $_GET['name']; ?>

	<script src="..\node_modules\jquery\dist\jquery.slim.min.js"></script>
    <script src="..\node_modules\popper.js\dist\umd\popper.min.js"></script>
    <script src="..\node_modules\bootstrap\dist\js\bootstrap.min.js"></script>
    <script type="text/javascript">
    	$(function () {
			$('[data-toggle="popover"]').popover()
		})
    </script>
</body>
</html>