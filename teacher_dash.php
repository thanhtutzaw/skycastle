<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">	
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Sky Castle E-learning</title>
	<link rel="shortcut icon" href="images/skycastle.png" type="image/x-icon" />

	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="library/fontawesome/fontawesome-all.min.css">
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="ets.css">
	<!-- <link rel="shourtcut icon" href="images/teacher.jpg">
 -->
 
</head>
<body>
	<!-- sidebar section -->
		<nav class="navbar navbar-expand-lg navbar-light">
		  <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="myNavbar">
		    <div class="container-fluid">
		    	<div class="row">
		    		<div class="col-xl-2 col-lg-3 sidebar fixed-top">
		    			<div class="teacher-info border-bottom py-3">
		    				<img src="images/teacher.jpg" alt="" width="60" class="rounded-circle mr-3">
		    				<a href="#" class="text-dark mr-3 font-me font-size-30">Merry</a>
		    			</div>
		    			<ul class="navbar-nav flex-column font-no">
		    				<li class="nav-item my-2"><a href="#" class="nav-link text-dark current"><i class="fas fa-home mr-4 "></i>Dashboard</a></li>
		    				<li class="nav-item my-2"><a href="Title.html" class="nav-link text-dark sidebar-link"><i class="fas fa-user text-dark fa-lg mr-4"></i>Create Course</a></li>
		    				<li class="nav-item my-2"><a href="Inbox.html" class="nav-link text-dark sidebar-link"><i class="fas fa-envelope text-dark fa-lg mr-4"></i>Inbox</a></li>
		    				<li class="nav-item my-2"><a href="My_lectures.html" class="nav-link text-dark sidebar-link"><i class="fas fa-school text-dark fa-lg mr-3"></i>My lectures</a></li>
		    				<li class="nav-item my-2"><a href="Assignment.html" class="nav-link text-dark sidebar-link"><i class="fas fa-book fa-lg mr-3"></i> Assignment</a></li>
		    				<li class="nav-item my-2"><a href="Online_Test.html" class="nav-link text-dark sidebar-link"><i class="fas fa-file-alt text-dark fa-lg mr-4"></i>Online Test</a></li>
		    				<li class="nav-item my-2"><a href="Notes.html" class="nav-link text-dark sidebar-link"><i class="fas fa-pencil-alt text-dark fa-lg mr-4"></i>Notes</a></li>
		    				<li class="nav-item my-2"><a href="logout.html" class="nav-link text-dark sidebar-link"><i class="fas fa-sign-out-alt text-dark fa-lg mr-3"></i>Logout</a></li>
		    			</ul>
		    		</div>
		    		<div class="col-xl-10 col-lg-9 bg-white fixed-top ml-auto top-navbar">
		    			<div class="row">
		    				<div class="col-md-6 py-3">
		    					<form>
		    						<div class="input-group">
		    							<input type="search" class="form-control search-input mr-3" placeholder="Search...">
		    							<button class="btn search-button"><i class="fas fa-search text-secondary"></i></button>
		    						</div>
		    					</form>
		    				</div>
		    				</div>
		    			</div>
		    		</div>
		    	</div>
		    </div>
		</nav>

	<!--dashboard section -->
	<section id="statistics">
		<div class="row mt-lg-5">
			<div class="col-xl-10 col-lg-9 ml-auto">
				<div class="row mt-lg-2">
					<div class="col-sm-6 col-md-3 mt-3">
						<div class="card card-common">
							<div class="card-body">
								<div class="d-flex justify-content-between">
										<i class="fas fa-book fa-3x text-info"></i>
									<div class="text-right text-secondary">
											<h1 class="text-center">4</h1>
											<h6>Classes</h6>
									</div>
								</div>			
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 mt-3">
						<div class="card card-common">
							<div class="card-body">
								<div class="d-flex justify-content-between">
										<i class="fas fa-question fa-3x text-info"></i>
									<div class="text-right text-secondary">
											<h1 class="text-center">15</h1>
											<h6>Questions</h6>
									</div>
								</div>			
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 mt-3">
						<div class="card card-common">
							<div class="card-body">
								<div class="d-flex justify-content-between">
										<i class="fas fa-user fa-3x text-info"></i>
									<div class="text-right text-secondary">
											<h1 class="text-center">20</h1>
											<h6>Students</h6>
									</div>
								</div>			
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 mt-3">
						<div class="card card-common">
							<div class="card-body">
								<div class="d-flex justify-content-between">
										<i class="fas fa-file-alt fa-3x text-info"></i>
									<div class="text-right text-secondary">
											<h1 class="text-center">5</h1>
											<h6>Reports</h6>
									</div>
								</div>			
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
	<!-- <script src="bootstrap 4/bootstrap.min.js"></script> -->
	<!-- <script src="library/bootstrap/jquery-3.4.1.slim.min.js"></script> -->
	<!-- <script src="library/bootstrap/popper.min.js"></script> -->
	<!-- <script src="library/bootstrap/bootstrap.min.js"></script> -->
	<!-- <script src="js/script.js"></script> -->
</body>
</html>