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
            <li class="nav-item "><a class="nav-link" href="<?php echo base_url(). 'Welcome/homelogin'; ?>" >Menu</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(). 'Welcome/book'; ?>" >Birds</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(). 'Welcome/history'; ?>" >History</a></li>
            <li class="nav-item active"><a class="nav-link" href="<?php echo base_url(). 'Welcome/userprofile'; ?>">Profile</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(). 'LoginSignup/Logout'; ?>" >Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
   
     <section class="probootstrap-cover overflow-hidden relative"  style="background-image: url('<?php echo base_url().'assets/images/eat.jpg'; ?>');" data-stellar-background-ratio="0.5" id="section-home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row align-items-center text-center">
          <div class="col-md">
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate">Profile Panel</h2>
           
          </div> 
        </div>
      </div>
    
    </section>
    <!-- END section -->
    
    
    <section class="probootstrap_section bg-light" id="section-contact">
      <div class="container">
        
        <div class="row">
                <?php 
                    foreach($user as $u){ 
                ?>
          <div class="col-md-6 probootstrap-animate">
            <div class="col-md-6">
                  <img src="<?php echo base_url().$u->photo ?>" alt="profile image" height="150px" weight="150px"/>
                  <br/>
                <br/>
                <h4>Change Profile Picture</h4>
                  
                    <form action="<?php echo base_url(). 'User/updateprofilephoto'; ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="email" value="<?php echo $u->email ?>" required><br>
                                    <input type="file" name="filetoupload" id="filetoupload" required><br/>
                                    <input type="submit" value="Upload Photo" class="btn btn-primary" id="submit">
                    </form>
              </div>
               
            <div class="row">
               
               
                
            </div>
          </div>
          <div class="col-md-6  probootstrap-animate">
              <h4>Edit Profile</h4>
            <form action="<?php echo base_url(). 'User/updateprofile'; ?>" method="post" class="probootstrap-form probootstrap-form-box mb60">
          
                <div class="form-group">
                    <label for="lname" class="sr-only sr-only-focusable">Nama</label>
                    <input type="text" class="form-control" id="email" name="nama" value="<?php echo $u->nama ?>">
                </div>
              <div class="form-group">
                <label for="email" class="sr-only sr-only-focusable">Nomor Telepon</label>
                <input type="text" class="form-control" id="email" name="phone" value="<?php echo $u->phone ?>" >
              </div>
              <div class="form-group">
                <label for="message" class="sr-only sr-only-focusable">Alamat</label>
                <textarea cols="30" rows="10" class="form-control" id="message" name="address"><?php echo $u->address ?></textarea>
              </div>
              <div class="form-group">
                    <input type="hidden" name="email" value="<?php echo $u->email ?>" required>
                <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Submit">
              </div>
            </form>
              <h4>Change Password</h4>
              <form action="<?php echo base_url(). 'User/updatepassword'; ?>" method="post" class="probootstrap-form probootstrap-form-box mb60">
              <div class="row mb-3">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="fname" class="sr-only sr-only-focusable">New Password</label>
                    <input type="password" class="form-control" id="fname" name="password" placeholder="New Password">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="lname" class="sr-only sr-only-focusable">Re-Type Password</label>
                    <input type="password" class="form-control" id="lname" name="repass" placeholder="Re-Type Password">
                  </div>
                </div>
              </div>
              <div class="form-group">
                 <input type="hidden" name="email" value="<?php echo $u->email ?>" required>
                <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Change Password">
              </div>
            </form>
          </div>
        </div>
      </div>
        <?php } ?>
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