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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>
<body>
	
	<?php if ($_SESSION['account_type']=='Applicant') { ?>
		<div id="applicant">

		</div>	
	<?php } elseif ($_SESSION['account_type']=='Employer') { ?>
		<div id="employer"></div>
	<?php } ?>

	<script src="node_modules\jquery\dist\jquery.min.js"></script>
    <script src="node_modules\popper.js\dist\umd\popper.min.js"></script>
    <script src="node_modules\bootstrap\dist\js\bootstrap.min.js"></script>
    <script type="text/javascript" src="js\custom.js"></script>

<!--     <script type="text/javascript">
		$(document).ready(function(){
			var i_resp = 1;
			var i_skill = 1;

			$('#add_resp').click(function(event){
				i_resp++;
				$('#dynamic_field_resp').append('<div class="form-group row" id="row_resp'+i_resp+'"><label for="inputAddress" class="col-sm-2 col-form-label col-form-label-sm text-right"></label><div class="col-sm-9"><input type="text" class="form-control form-control-sm" id="inputResponsibility" name="inputResponsibility[]" placeholder="Enter Responsibility"></div><div class="col-sm-1 pl-0"><button class="btn btn-danger btn-sm btn-block btn_remove_resp" name="remove_resp" id="'+i_resp+'"><i class="fas fa-times"></i></button></div></div>'); 
				event.preventDefault();
			});
			$(document).on('click', '.btn_remove_resp', function(){
				var button_id_resp = $(this).attr("id");
				$('#row_resp'+button_id_resp+'').remove();
			});

			$('#add_skill').click(function(event){
				i_skill++;
				$('#dynamic_field_skill').append('<div class="form-group row" id="row_skill'+i_skill+'"><label for="inputSkills" class="col-sm-2 col-form-label col-form-label-sm text-right"></label><div class="col-sm-9"><select class="form-control form-control-sm" id="inputSkills" name="inputSkills[]"><option value="">Select Skill</option><option value="PHP">PHP</option><option value="C#">C#</option><option value="JavaScript">JavaScript</option><option value="HTML5">HTML5</option></select></div><div class="col-sm-1 pl-0"><button class="btn btn-danger btn-sm btn-block btn_remove_skill" name="remove_skill" id="'+i_skill+'"><i class="fas fa-times"></i></button></div></div>'); 
				event.preventDefault();
			});
			$(document).on('click', '.btn_remove_skill', function(){
				var button_id_skill = $(this).attr("id");
				$('#row_skill'+button_id+'').remove();
			});
		});
	</script> -->
</body>
</html>