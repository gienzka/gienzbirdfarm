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
            <li class="nav-item active"><a class="nav-link" href="<?php echo base_url(). 'Welcome/profile'; ?>">Profile</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(). 'Welcome/login'; ?>">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(). 'Welcome/contact'; ?>">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
        
    <section class="probootstrap-cover overflow-hidden relative"  style="background-image: url(<?php echo base_url().'assets/images/bgprof.jpg'; ?>);" data-stellar-background-ratio="0.5" id="section-home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row align-items-center text-center">
          <div class="col-md">
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate">Gienz Bird Farm</h2>
              <br/>
              <br/>
              <h3 style="color:white;" class="probootstrap-animate">“New friends are like new adventures. You never know what lessons they will teach you.”</h3>
              <br/>
              <br/>
              <br/>
            <p class="probootstrap-animate">
                <a href="#section-feature-testimonial" class="btn btn-primary p-3 mr-3 pl-5 pr-5 text-uppercase d-lg-inline d-md-inline d-sm-block d-block mb-3">Profil GBF</a>
                <a href="#prestasi" class="btn btn-primary p-3 mr-3 pl-5 pr-5 text-uppercase d-lg-inline d-md-inline d-sm-block d-block mb-3">Prestasi GBF</a>
            </p>
          </div> 
        </div>
      </div>
    
    </section>
    <!-- END section -->
    
    <section class="probootstrap_section" id="section-feature-testimonial">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-12 text-center mb-5 probootstrap-animate">
            <h2 class="display-4 border-bottom probootstrap-section-heading"><img height="300px" width="300px" src="<?php echo base_url(). 'assets/images/gbf1.png'; ?>"></h2>
            <blockquote class="">
              <p class="lead mb-4"><em>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</em></p>
              <p class="probootstrap-author">
               
                  <span class="probootstrap-name">Gienz Bird Farm</span>
                  <span class="probootstrap-title">The best bird breeder</span>
            
              </p>
            </blockquote>

          </div>
        </div>
        
      </div>
    </section>
        
    <section class="probootstrap_section bg-light" id="prestasi">
      <div class="container">
        <div class="row text-center mb-5 probootstrap-animate">
          <div class="col-md-12">
            <h2 class="display-4 border-bottom probootstrap-section-heading">Prestasi</h2>
          </div>
        </div>
        <div class="row">
         
            <?php 
                 $no = 1;
                 foreach($trophy as $t){ 
             ?>
            
            <div class="col-md-6">

            <div class="media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate">
              <div class="probootstrap-media-image" style="background-image: url(<?php echo base_url().$t->photo ?>)">
              </div>
              <div class="media-body">
                <h5 class="mb-3"><?php echo $t->judul ?></h5>
                <p><?php echo $t->deskripsi ?></p>
              </div>
            </div>
          </div>
            
            <?php } ?>
            <?php 
                echo $this->pagination->create_links();
            ?>
        </div>
      </div>
    </section>
    
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