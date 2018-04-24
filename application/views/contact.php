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
            <li class="nav-item "><a class="nav-link" href="<?php echo base_url(); ?>">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(). 'Welcome/product'; ?>">Product</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(). 'Welcome/profile'; ?>">Profile</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(). 'Welcome/login'; ?>">Login</a></li>
            <li class="nav-item active"><a class="nav-link" href="<?php echo base_url(). 'Welcome/contact'; ?>">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    

    <section class="probootstrap-cover overflow-hidden relative"  style="background-image: url('<?php echo base_url().'assets/images/canarybg.jpeg'; ?>');" data-stellar-background-ratio="0.5" id="section-home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row align-items-center text-center">
          <div class="col-md">
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate">Get In Touch</h2>
            <p class="lead mb-5 probootstrap-animate">Do u like us? Want more information about us?</p>
            <p class="probootstrap-animate">
              <a href="#section-contact" class="btn btn-primary p-3 mr-3 pl-5 pr-5 text-uppercase d-lg-inline d-md-inline d-sm-block d-block mb-3">Contact us</a> 
            </p>
          </div> 
        </div>
      </div>
    
    </section>
    <!-- END section -->
    
    
    <section class="probootstrap_section bg-light" id="section-contact">
      <div class="container">
        
        <div class="row">
          <div class="col-md-6 probootstrap-animate">
            <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            <div class="row">
              <div class="col-md-6">
                <ul class="probootstrap-contact-details">
                  <li>
                    <span class="text-uppercase"><span class="ion-paper-airplane"></span> Email</span>
                    probootstrap@gmail.com
                  </li>
                  <li>
                    <span class="text-uppercase"><span class="ion-ios-telephone"></span> Phone</span>
                    +30 976 1382 9921
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="probootstrap-contact-details">
                  <li>
                    <span class="text-uppercase"><span class="ion-ios-telephone"></span> Fax</span>
                    +30 976 1382 9922
                  </li>
                  <li>
                    <span class="text-uppercase"><span class="ion-location"></span> Address</span>
                    San Francisco, CA <br>
                    4th Floor8 Lower  <br>
                    San Francisco street, M1 50F
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6  probootstrap-animate">
            <form action="<?php echo base_url(). 'Email/sendMail'; ?>" method="post" class="probootstrap-form probootstrap-form-box mb60">
              <div class="row mb-3">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="fname" class="sr-only sr-only-focusable">Name</label>
                    <input type="text" class="form-control" id="fname" name="name" placeholder="First Name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="lname" class="sr-only sr-only-focusable">Subject</label>
                    <input type="text" class="form-control" id="lname" name="subject" placeholder="Last Name">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="sr-only sr-only-focusable">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="message" class="sr-only sr-only-focusable">Message</label>
                <textarea cols="30" rows="10" class="form-control" id="message" name="message" placeholder="Write your message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Send Message">
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