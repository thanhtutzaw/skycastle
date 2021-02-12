<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="../library/fontawesome/fontawesome-all.min.css">
    
	<link rel="stylesheet" href="../hwy css/style.css">
</head>
<body>
	<div class="container-fluid  mx-auto mt-4">
    <!-- px-1 px-md-5 px-lg-1 px-xl-5 py-5  -->
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row"> <img src="../images/logo.png" class="logo"></div>
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="../images/login-phpto.jpg" class="image"> </div>
                </div>
            </div>
            <div class="col-lg-4">
                <form action="../signincontrol.php" method="post">
                    <div class="card2 card border-0 px-4 py-5">
                        <div class="row mb-4 px-3">
                            <h2 class="card-title text-center">Login</h2>                    
                        </div>

                        <div class="row px-3"> 
                            <label class="mb-1">
                                <h6 class="mb-0 text-sm" for="email">Email Address</h6>
                            </label> <input class="mb-4" id="email" type="text" name="email" placeholder="Enter a valid email address"> 
                        </div>

                        <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm" for="pass">Password</h6>
                            </label> <input type="password" id="pass" name="pass" placeholder="Enter password"> 
                        </div>

                        <div class="row px-3 mb-4"><!-- forget pass part -->
                            <div class="custom-control custom-checkbox custom-control-inline"> 
                                <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> 
                                <label for="chk1" class="custom-control-label text-sm">Remember me</label>
                            </div> 
                            <a href="#" class="ml-auto mb-0 text-sm text-danger font-weight-bold">Forgot Password?</a>
                        </div>

                        <div class="row mb-3 px-3"> <!-- login button -->
                            <button type="submit" name="submit" class="login btn btn-blue text-light text-center">Login</button> 
                        </div>

                        <hr class="my-4">

                        <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
                        <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="bg-blue py-4">
            <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2021. All rights reserved.</small>
                <div class="social-contact ml-4 ml-sm-auto"> <span class="fab fa-facebook-f mr-4 text-lg"></span> <span class="fab fa-google-plus mr-4 text-lg"></span> <span class="fab fa-linkedin mr-4 text-lg"></span> <span class="fab fa-twitter mr-4 mr-sm-5 text-lg"></span> </div>
            </div>
        </div>
    </div>
</div>
              




	<!-- <script src="library/bootstrap/jquery-3.5.1.slim.min.js"></script> -->
	<!-- <script src="library/bootstrap/popper.min.js"></script> -->
	<!-- <script src="library/bootstrap/bootstrap.min.js"></script> -->
	<!-- <script src="library/fontawesome/fontawesome-all.min.css"></script> -->
	<!-- <script src="js/script.js"></script> -->
</body>
</html>

<!-- bootstrap.css
jquery.js
popper.js
bootstrap.js -->