<div id="Employer">
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
	</div>