<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Gienz Bird Farm</title>
    
        <!-- Favicons -->
        <link href="<?php echo base_url(). 'assets/images/favicon.ico'; ?>" rel="icon"> 
        
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">
        
    <link rel="stylesheet" href="<?php echo base_url(). 'assets/css/bootstrap/bootstrap.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url(). 'assets/css/animate.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url(). 'assets/fonts/ionicons/css/ionicons.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url(). 'assets/css/owl.carousel.min.css'; ?>"> 
        
    <link rel="stylesheet" href="<?php echo base_url(). 'assets/fonts/flaticon/font/flaticon.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url(). 'assets/fonts/fontawesome/css/font-awesome.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url(). 'assets/css/bootstrap-datepicker.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url(). 'assets/css/select2.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url(). 'assets/css/helpers.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url(). 'assets/css/style.css'; ?>">
	</head>
    
	<body>
  

    <nav class="navbar navbar-expand-lg navbar-dark probootstrap_navbar" id="probootstrap-navbar">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url(); ?>"><img height="40px" width="80px" src="<?php echo base_url(). 'assets/images/logobar.png'; ?>"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-menu" aria-controls="probootstrap-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-menu">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(). 'Welcome/product'; ?>">Birds</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(). 'Welcome/profile'; ?>">Profile</a></li>
            <li class="nav-item active"><a class="nav-link" href="<?php echo base_url(). 'Welcome/login'; ?>">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(). 'Welcome/contact'; ?>">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
 
        <section class="probootstrap-cover overflow-hidden relative"  style="background-image: url(<?php echo base_url().'assets/images/lovebg.jpg'; ?>);" data-stellar-background-ratio="0.5"  id="section-home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md">
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate">Want to join us?</h2>
            <p class="lead mb-5 probootstrap-animate">Anda bisa bergabung bersama kami untuk membeli burung terbaik kami dan memiliki aksesoris keren GBF</p>
            <p class="probootstrap-animate">
              <a href="<?php echo base_url(). 'Welcome/signup'; ?>" role="button" class="btn btn-primary p-3 mr-3 pl-5 pr-5 text-uppercase d-lg-inline d-md-inline d-sm-block d-block mb-3">Sign Up</a> 
            </p>
          </div> 
          <div class="col-md probootstrap-animate">
            <form action="<?php echo base_url(). 'LoginSignup/do_login'; ?>" class="probootstrap-form" method="post">
              <div class="form-group">
                <div class="row mb-3">
                  <div class="col-md">
                      <h1>LOG IN</h1>
                    <div class="form-group">
                        
                      <label for="id_label_single">Email</label>
                            <input type="email"  name="email" class="form-control" placeholder="Enter email" required>
                    </div>
                      <div class="form-group">
                        
                      <label for="id_label_single">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                    </div>
                      <label>
                            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                      </label>
                      <div class="form-group">
                    <input type="submit" value="Submit" class="btn btn-primary btn-block">
                  </div>
                  </div>
                  </div>
                </div>
            </form>
          </div> 
        </div>
      </div>
    
    </section>
    <!-- END section -->
        
    <footer class="probootstrap_section probootstrap-border-top" style="padding-top: 10px; padding-bottom: 20px">
      <div class="container">
      
        <div class="row pt-5">
          <div class="col-md-12 text-center">
            <p class="probootstrap_font-14">&copy; 2018. All Rights Reserved. <br> Website for <a href="<?php echo base_url(); ?>" target="_blank">Gienz Bird Farm </a><br/><small><a href="<?php echo base_url(). 'Welcome/contact'; ?>">Contact Us</a> for more info </small></p>
        
          </div>
        </div>
      </div>
    </footer>

    
    <script src="<?php echo base_url(). 'assets/js/jquery.min.js'; ?>"></script>
    
    <script src="<?php echo base_url(). 'assets/js/popper.min.js'; ?>"></script>
    <script src="<?php echo base_url(). 'assets/js/bootstrap.min.js'; ?>"></script>
    <script src="<?php echo base_url(). 'assets/js/owl.carousel.min.js'; ?>"></script>

    <script src="<?php echo base_url(). 'assets/js/bootstrap-datepicker.js'; ?>"></script>
    <script src="<?php echo base_url(). 'assets/js/jquery.waypoints.min.js'; ?>"></script>
    <script src="<?php echo base_url(). 'assets/js/jquery.easing.1.3.js'; ?>"></script>

    <script src="<?php echo base_url(). 'assets/js/select2.min.js'; ?>"></script>

    <script src="<?php echo base_url(). 'assets/js/main.js'; ?>"></script>
	</body>
</html>