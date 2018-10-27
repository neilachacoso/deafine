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
	
	<div class="container container-contact">
		<div class="card w-50 mx-lg-auto my-5">
			<div class="card-header text-white rounded-0">
				<div class="text-center">
					<div class="row">
						<div class="col-md-8 text-left mt-2">
							<h4>Contact Us</h4>
							<p>Fill in the form below to send us a message</p>
						</div>
						<div class="col-md-4 text-right pt-2">
							<i class="fas fa-envelope fa-fw"></i>
						</div>
					</div>
				</div>
		  	</div>	
			<div class="card-body rounded-0 text-center">
			    <form role="form" action="../includes/signup.inc.php" method="POST" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="subject" class="sr-only">Subject</label>
                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <label for="message" class="sr-only">Subject</label>
                            <textarea name="message" class="form-control" rows="5" placeholder="Your message"></textarea>
                        </div>              
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Sign Up">
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