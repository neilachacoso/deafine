<!DOCTYPE html>
<html>
<head>
	<title></title>    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="..\node_modules\bootstrap\dist\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="..\css\style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>
<body>
	
	<!-- <div>
		<div class="topnav">
			<div class="container">
				<div class="float-sm-right">
					<a href="signup.php">Sign Up</a>
					<a href="login.php">Log In</a>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
			<div class="container">
		  		<a class="navbar-brand" href="#"><img src="../assets/images/logo.png"></a>
		  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    			<span class="navbar-toggler-icon"></span>
		  			</button>

		  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    		<ul class="navbar-nav ml-auto">
		      			<li class="nav-item">
		        			<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
		      			</li>
		      			<li class="nav-item">
		        			<a class="nav-link" href="about.php">About</a>
		      			</li>   
		      			<li class="nav-item">
		        			<a class="nav-link" href="tutorials.php">Tutorials</a>
		      			</li>   
		      			<li class="nav-item">
		        			<a class="nav-link" href="portfolio.php">Portfolio</a>
		      			</li>   
		      			<li class="nav-item">
		        			<a class="nav-link" href="jobs.php">Jobs</a>
		      			</li>   
		      			<li class="nav-item">
		        			<a class="nav-link" href="contact.php">Contact</a>
		      			</li>    
		    		</ul>
		  		</div>
	  		</div>
		</nav>
		
		<div class="container container-login">
			<div class="card w-50 mx-lg-auto mt-5">
				<div class="card-header text-white rounded-0">
					<div class="text-center">
						<div class="row">
							<div class="col-md-8 text-left mt-2">
								<h4>Login</h4>
								<p>Don't have an account yet? <a href="signup.php">Sign up here</a></p>
							</div>
							<div class="col-md-4 text-right pt-2">
								<i class="fas fa-key fa-fw"></i>
							</div>
						</div>
					</div>
			  	</div>	
				<div class="card-body rounded-0 text-center">
				    <form role="form" action="login.inc.php" method="POST" id="login-form" autocomplete="off">
	                    <div class="form-group">
	                        <input type="email" name="uid" id="email" class="form-control" placeholder="Email">
	                    </div>
	                    <div class="form-group">
	                        <input type="password" name="pwd" id="key" class="form-control" placeholder="Password">
	                    </div>
	                    <a href="forgotpass.php">Forgot Password?</a>
	                    <br><br>
	                    <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Log in">
	                </form>
			  	</div>
			</div>
		</div>
	</div> -->

	<div id="div2">
		<div id="div1"><h2>Let jQuery AJAX Change This Text</h2></div>
		<a href="#" class="btn btn-success btn-sm mb-3" data-toggle="modal" data-target="#exampleModal">
			<i class="fas fa-user-edit fa-fw mr-3"></i>
			Edit Profile
		</a>

	  	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-edit-profile" role="document">
		    	<div class="modal-content">
		      		<div class="modal-header">
		        	<h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          		<span aria-hidden="true">&times;</span>
		        	</button>
		      		</div>
			      	<div class="modal-body">
			      		<form action="edit.php" method="POST" enctype="multipart/form-data" id="editForm" autocomplete="off">
							<div class="form-group">
							<label for="phoneEdit">Phone</label>
							<input type="text" class="form-control" id="phoneEdit" name="phoneEdit" placeholder="Enter phone number">
							</div>
							<div class="form-group">
							<label for="websiteEdit">Website</label>
							<input type="text" class="form-control" id="websiteEdit" name="websiteEdit" placeholder="Enter personal website">
							</div>
							<div class="form-group">
							<label for="emailEdit">Email</label>
							<input type="text" class="form-control" id="emailEdit" name="emailEdit" placeholder="Enter email">
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
			      	</div>
		    	</div>
		  	</div>
		</div>
	</div>

	<script src="..\node_modules\jquery\dist\jquery.min.js"></script>
    <script src="..\node_modules\popper.js\dist\umd\popper.min.js"></script>
    <script src="..\node_modules\bootstrap\dist\js\bootstrap.min.js"></script>
   <!--  <script type="text/javascript">
		$(document).ready(function(){
		    $("button").click(function(){
		        $("#div1").load("demo_test.php");
		    });
		});
	</script> -->

	<script type="text/javascript">
		$(document).ready(function(){
			$("#div1").load("demo_test.php");


			$("#editForm").unbind('submit').bind('submit', function(){
				$.ajax({
					url : 'edit.php',
					type : 'POST',
					async: true,
					data : $('#editForm').serialize(),
					dataType : 'json',
					success : function(response) {
						if (response['success'] == true) {
							// $("#div1").html("<strong>Phone: </strong>"+response.phone+"<br><strong>Website: </strong>"+response.website+"<br><strong>Email: </strong>"+response.email);
							$("#div2").load("demo_test1.php");
							$('#exampleModal').modal('hide');
							$('body').removeClass('modal-open');
							$('.modal-backdrop').remove();
						} else {
							alert('Error');
						}
						console.log(response);
					}
				});
				return false;
			});
		});
	</script>
</body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Loading Data from External File using Ajax in jQuery</title>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("button").click(function(){
        $("#box").load("demo_test.php");
    });
});
</script>
</head>
<body>
    <div id="box">
        <h2>Click button to load new content inside DIV box</h2>
    </div>
    <button type="button">Load Content</button>
</body>
</html>     -->                        