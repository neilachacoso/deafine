<div id="applicant">
	<div class="topnav">
		<div class="container">
			<div class="float-sm-right">
				<a href="profile.php">Hello, <strong><?php echo $_SESSION['account_name']; ?></strong>!</a>
				<a href="#">Settings</a>
				<a href="includes/logout.inc.php">Logout</a>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark <?php echo 'navbar-'.$_SESSION['account_type']; ?> mb-3">
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
	        			<a class="nav-link" href="#">Employers</a>
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

	<div class="container">
		<div class="jumbotron mb-0 rounded-0 bg-secondary text-white py-5 mb-5">
			<h2 class="px-4"><strong>Search for Jobs</strong></h2>
			<form class="mt-3">
			  <div class="row px-4">
			    <div class="col-md-4">
			    	<label for="inputEmail4">Keyword</label>
			      	<input type="text" class="form-control" placeholder="Keyword">
			    </div>
			    <div class="col-3">
			    	<label for="inputEmail4">Category</label>
			      	<select class="form-control" id="exampleFormControlSelect1">
			      		<option value="">Category</option>
      					<option>1</option>
      					<option>2</option>
      					<option>3</option>
						<option>4</option>
      					<option>5</option>
    				</select>
			    </div>
			    <div class="col-3">
			    	<label for="inputEmail4">Location</label>
			      	<input type="text" class="form-control" placeholder="Location">
			    </div>
			    <div class="col-md-2">
			    	<button type="submit" class="btn btn-primary btn-block btn-success" style="margin-top: 2rem;">Search</button>
			    </div>
			  </div>
			</form>
		</div>				

		<div class="row mb-4">
			<div class="col-md-8">
				<div class="card">
					<div class="card-body">
						<h5><strong>Featured Employers</strong></h5>
						<hr>
						<div class="row">
							<div class="col-md-3">
								<a href="#"><img src="assets/images/cn.png" class="img-fluid"></a>
							</div>
							<div class="col-md-3">
								<a href="#"><img src="assets/images/cn.png" class="img-fluid"></a>
							</div>
							<div class="col-md-3">
								<a href="#"><img src="assets/images/cn.png" class="img-fluid"></a>
							</div>
							<div class="col-md-3">
								<a href="#"><img src="assets/images/cn.png" class="img-fluid"></a>
							</div>
							<div class="col-md-3">
								<a href="#"><img src="assets/images/cn.png" class="img-fluid"></a>
							</div>
							<div class="col-md-3">
								<a href="#"><img src="assets/images/cn.png" class="img-fluid"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-8">
								<h5><strong>Latest Jobs</strong></h5>
							</div>
							<div class="col-md-4 text-right">
								<a href="#"><small>View All</small></a>
							</div>						
						</div>
						<hr class="mt-2">
						<div class="job-link mb-3">
							<a href="#">Job Title</a>
							<br>
							<small>
								<strong>Company Name</strong> - PHP 5000 - PHP20,000
								<br>
								5 mins ago - Location
							</small>
						</div>
						<div class="job-link mb-3">
							<a href="#">Job Title</a>
							<br>
							<small>
								<strong>Company Name</strong> - PHP 5000 - PHP20,000
								<br>
								15 mins ago - Location
							</small>
						</div>
						<div class="job-link mb-3">
							<a href="#">Job Title</a>
							<br>
							<small>
								<strong>Company Name</strong> - PHP 5000 - PHP20,000
								<br>
								30 mins ago - Location
							</small>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>