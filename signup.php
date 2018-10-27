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
	  		<a class="navbar-brand" href="#"><img src="assets/images/logo.png"></a>
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
	
	<div class="container container-signup">
		<div class="card w-50 mx-lg-auto my-5">
			<div class="card-header text-white rounded-0">
				<div class="text-center">
					<div class="row">
						<div class="col-md-8 text-left mt-2">
							<h4>Signup</h4>
							<p>Already have an account? <a href="signup.php">Log in here</a></p>
						</div>
						<div class="col-md-4 text-right pt-2">
							<i class="fas fa-pencil-alt fa-fw"></i>
						</div>
					</div>
				</div>
		  	</div>	
			<div class="card-body rounded-0 text-center">
			    <form role="form" action="includes/signup.inc.php" method="POST" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="first" class="sr-only">First Name</label>
                            <input type="text" name="first" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <label for="last" class="sr-only">Last Name</label>
                            <input type="text" name="last" class="form-control" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="pass" class="sr-only">Password</label>
                            <input type="password" name="pass" id="key" class="form-control" placeholder="Password">
                        </div>
                        <!-- <div class="form-group">
                            <label for="pwd" class="sr-only">Password</label>
                            <input type="password" name="pwd1" id="key1" class="form-control" placeholder="Enter Password Again">
                        </div> -->
                        <div id="divCheckPasswordMatch">
						</div>
                        <div class="form-group">
                            <input type="radio" name="type" value="Applicant"> Applicant  &nbsp; &nbsp; &nbsp;
        					<input type="radio" name="type" value="Employer"> Employer<br>
                        </div>                    
						 <br><p>By signing up, you agree to our <a href="privacy.php">Private Policy</a> and <a href="terms.php">Terms &amp; Conditions.</a></p>
                        <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Sign Up">
                    </form>
        	    </div>
		  	</div>
		</div>
	</div>


	<script src="node_modules\jquery\dist\jquery.slim.min.js"></script>
    <script src="node_modules\popper.js\dist\umd\popper.min.js"></script>
    <script src="node_modules\bootstrap\dist\js\bootstrap.min.js"></script>
</body>
</html>