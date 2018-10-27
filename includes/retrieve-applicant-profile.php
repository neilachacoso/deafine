<?php session_start(); ?>
<div class="topnav">
	<div class="container">
		<div class="float-sm-right">
			<a href="#">Hello, <strong><?php echo $_SESSION['account_name']; ?></strong>!</a>
			<a href="#">Settings</a>
			<a href="index.php">Logout</a>
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
        			<a class="nav-link" href="#">Jobs</a>
      			</li>   
      			<li class="nav-item">
        			<a class="nav-link" href="jobs.php">Jobs</a>
      			</li>   
      			<li class="nav-item">
        			<a class="nav-link" href="contact.php">Contact</a>
      			</li>    
    		</ul>
    		 <form class="form-inline ml-5 my-lg-0">
		      	<!-- <input class="form-control mr-sm-2 form-control-sm" type="search" placeholder="Search" aria-label="Search">
  				<button class="btn btn-success my-2 my-sm-0 btn-sm" type="submit">Search</button> -->
  				<div class="input-group">
						<input type="text" class="form-control form-control-sm" placeholder="Search Jobs" aria-label="Search Jobs" aria-describedby="button-addon2">
						<div class="input-group-append">
						<button class="btn btn-success btn-sm" type="button" id="button-addon2">Search</button>
						</div>
				</div>
			</form>
  		</div>
		</div>
</nav>

<div class="container container-profile">		
	<div class="jumbotron mb-0 rounded-0 text-center">			
	</div>
	<div class="card rounded-0 border-top-0 mb-5">
		<div class="card-body">
			<div class="row">
				<div class="col-md-4">
					<div class="card bg-contact-details">						  	
					  	<div class="card-body">
					  		<div class="text-center">
					  			<img class="rounded-circle mb-5" src="https://scontent.fmnl9-1.fna.fbcdn.net/v/t1.0-9/26904061_1818421621502743_381615301218543167_n.jpg?_nc_cat=100&_nc_eui2=AeEq0cvOtqXKbgy4wWD7gSG_HHpu1ByoIM8w1-aVvXEKiDS0zBfCd4nv_uJYf2hR3ehJKbJRkXpTPw98y9xsNnAjWylXP5DL_jBWizf8ql124Q&_nc_ht=scontent.fmnl9-1.fna&oh=53565cff1003d36882aa14671e19e666&oe=5C884D15" />
					    		<h6><strong>Personal Details</strong></h6>
					  		</div>
					  		<hr>
					  		<div class="div-contact-details" id="detailsDiv">
						  		<div class="row">
						  			<div class="col-md-5"><small><strong>Date of Birth</strong></small></div>
						  			<div class="col-md-7"><small>8 Nov 1993</small></div>
						  		</div>
						  		<div class="row">
						  			<div class="col-md-5"><small><strong>Age</strong></small></div>
						  			<div class="col-md-7"><small>24 Years Old</small></div>
						  		</div>
						  		<div class="row mb-4">
						  			<div class="col-md-5"><small><strong>Location</strong></small></div>
						  			<div class="col-md-7"><small>Dasma, Cavite</small></div>
						  		</div>
						  		<h6 class="text-center"><strong>Contact Details</strong></h6>
						  		<hr>
						  		<div class="row">
						  			<div class="col-md-5"><small><strong>Phone</strong></small></div>
						  			<div class="col-md-7"><small>(046) 484-3577</small></div>
						  		</div>
						  		<div class="row">
						  			<div class="col-md-5"><small><strong>Website</strong></small></div>
						  			<div class="col-md-7"><small>google.com</small></div>
						  		</div>
						  		<div class="row">
						  			<div class="col-md-5"><small><strong>E-mail</strong></small></div>
						  			<div class="col-md-7"><small>neil@gmail.com</small></div>
						  		</div>
						  	</div>
					  	</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="text-right">
						<!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
							<input type="hidden" name="edit_id" value="<?php echo $_SESSION['account_id']; ?>">
							<button type="submit" class="btn btn-success btn-sm mb-3"><i class="fas fa-user-edit fa-fw mr-3"></i>Edit Profile</button>
						</form> -->
						
					</div>
			  		<nav class="mt-0">
							<div class="nav nav-tabs justify-content-end" id="nav-tab" role="tablist">
								<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><small><strong>Overview</strong></small></a>
								<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><small><strong>Education</strong></small></a>
								<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><small><strong>My Portfolio</strong></small></a>
							</div>
					</nav>
					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active pt-3" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
					  		<div class="row mb-4">
					  			<div class="col-md-8">
					  				<h1 class="font-weight-bold">
					  					NEIL ACHACOSO				  				
						  			</h1>
						  			<a href="#" class="mb-2" data-toggle="modal" data-target="#exampleModal" id="editProfileBtn"><small>EDIT PROFILE</small></a>
					  			</div>
					  			<div class="col-md-4 text-right">
					  				<a href="#" class="btn btn-success btn-sm my-2">
						  				<i class="fas fa-file-download fa-fw mr-2"></i>
						  				View Resume
					  				</a>
					  			</div>
					  		</div>
					  		<h6 class="font-weight-bold">Profile Description</h6>
					  		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					  		<h6 class="font-weight-bold">Responsibilities</h6>
					  		<ul>
					  			<li>Lorem ipsum dolor sit amet</li>
					  			<li>consectetur adipisicing elit</li>
					  			<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</li>
					  			<li>Ut enim ad minim veniam</li>
					  			<li>Excepteur sint occaecat cupidatat</li>
					  		</ul>
					  		<h6 class="font-weight-bold">Skills</h6>
					  		<div class="div-skills mb-3">
						  		<a href="#" class="btn btn-secondary">C#</a>
						  		<a href="#" class="btn btn-secondary">PHP</a>
						  		<a href="#" class="btn btn-secondary">HTML</a>
						  	</div>
					  		<h6 class="font-weight-bold">Work Experience</h6>
					  		<ul>
					  			<li>Lorem ipsum dolor sit amet</li>
					  			<li>consectetur adipisicing elit</li>
					  			<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</li>
					  			<li>Ut enim ad minim veniam</li>
					  			<li>Excepteur sint occaecat cupidatat</li>
					  		</ul>
					  	</div>
						<div class="tab-pane fade pt-3" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
							<div class="row my-2">
								<div class="col-md-3"><small>November 2017</small></div>
								<div class="col-md-7">
									<h5 class="mb-0"><strong>Mapua University</strong></h5>
									<small>Bachelor's Degree in Information Technology</small>
								</div>
								<div class="col-md-2 text-right">
									<a href="#" class="btn btn-light"><i class="fas fa-pencil-alt"></i></a>
									<a href="#" class="btn btn-light"><i class="fas fa-times"></i></a>
								</div>
							</div>
							<div class="row my-2">
								<div class="col-md-3"><small>April 2010</small></div>
								<div class="col-md-7">
									<h5 class="mb-0"><strong>Saint Jude College - Dasmariñas</strong></h5>
									<small>Secondary</small>
								</div>
								<div class="col-md-2 text-right">
									<a href="#" class="btn btn-light"><i class="fas fa-pencil-alt"></i></a>
									<a href="#" class="btn btn-light"><i class="fas fa-times"></i></a>
								</div>
							</div>
						</div>
						<div class="tab-pane fade pt-3" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
							<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
								    <div class="carousel-item active">
								      	<img class="d-block w-100" src="https://i.ytimg.com/vi/6MOSic_1GKU/hqdefault.jpg" alt="First slide">
								    </div>
								    <div class="carousel-item">
								    	<img class="d-block w-100" src="https://i.ytimg.com/vi/6MOSic_1GKU/hqdefault.jpg" alt="Second slide">
								    </div>
								    <div class="carousel-item">
								    	<img class="d-block w-100" src="https://i.ytimg.com/vi/6MOSic_1GKU/hqdefault.jpg" alt="Third slide">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
	</div>		
</div>