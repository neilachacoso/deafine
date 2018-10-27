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
	      			<li class="nav-ite">
	        			<a class="nav-link" href="about.php">About</a>
	      			</li>   
	      			<li class="nav-itemm">
	        			<a class="nav-link" href="tutorials.php">Tutorials</a>
	      			</li>   
	      			<li class="nav-item active">
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
	
	<div class="container container-portfolio">
		<div class="jumbotron jumbotron-about mb-md-5 text-center">
			<h1>Art Station</h1>
		</div>
		<!-- <?php

		    $numberOfColumns = 3;
		    $bootstrapColWidth = 12 / $numberOfColumns ;

		    $arrayChunks = array_chunk($items, $numberOfColumns);
		    
		    foreach($arrayChunks as $items) {
		        echo '<div class="row">';
		        foreach($items as $item) {
		            echo '<div class="col-md-'.$bootstrapColWidth.'">';
		            // your item
		            echo '</div>';
		        }
		        echo '</div>';
		    }  
		?> -->
		<div class="row">
			<div class="col-md-3 mb-3">
				<a href="#" data-toggle="modal" data-target="#exampleModalCenter"><img src="https://i.ytimg.com/vi/6MOSic_1GKU/hqdefault.jpg"></a>
			</div>
			<div class="col-md-3 mb-3">
				<a href="#" data-toggle="modal" data-target="#exampleModalCenter"><img src="https://i.ytimg.com/vi/6MOSic_1GKU/hqdefault.jpg"></a>
			</div>
			<div class="col-md-3 mb-3">
				<a href="#" data-toggle="modal" data-target="#exampleModalCenter"><img src="https://i.ytimg.com/vi/6MOSic_1GKU/hqdefault.jpg"></a>
			</div>
			<div class="col-md-3 mb-3">
				<a href="#" data-toggle="modal" data-target="#exampleModalCenter"><img src="https://i.ytimg.com/vi/6MOSic_1GKU/hqdefault.jpg"></a>
			</div>
		</div>
	</div>

	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	    	<div class="modal-content">
      			<div class="modal-header bg-info text-light py-2">
        			<h5 class="modal-title" id="exampleModalCenterTitle">About The Artwork</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
        			</button>
      			</div>
      			<div class="modal-body">
        			<div class="row">
        				<div class="col-md-8">
        					<img src="https://i.ytimg.com/vi/6MOSic_1GKU/hqdefault.jpg">
        				</div>
        				<div class="col-md-4">
        					<h3>Artwork Title</h3>
        					by Artwrok Artist
        					<br>
        					<br>
        					<h4>Artist Profile</h4>
        					blablabla
        				</div>
        			</div>
      			</div>
      			<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      			</div>
    		</div>
  		</div>
	</div>
</div>

	<script src="node_modules\jquery\dist\jquery.slim.min.js"></script>
    <script src="node_modules\popper.js\dist\umd\popper.min.js"></script>
    <script src="node_modules\bootstrap\dist\js\bootstrap.min.js"></script>
</body>
</html>