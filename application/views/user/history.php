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
            <li class="nav-item active"><a class="nav-link" href="<?php echo base_url(). 'Welcome/history'; ?>" >History</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(). 'Welcome/userprofile'; ?>">Profile</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(). 'LoginSignup/Logout'; ?>" >Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
   <section class="probootstrap-cover overflow-hidden relative"  style="background-image: url('<?php echo base_url().'assets/images/hihi.jpg'; ?>');" data-stellar-background-ratio="0.5" id="section-home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row align-items-center text-center">
          <div class="col-md">
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate">Booking History</h2>
           
          </div> 
        </div>
      </div>
    
    </section>
  <section class="probootstrap_section" id="section-feature-testimonial">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-12 text-center mb-5 probootstrap-animate">
              <h2 class="display-4 border-bottom probootstrap-section-heading">Tagihan Pembayaran</h2>
                                    <?php 
                                        $no = 1;
                                        foreach($data2 as $c){ 
                                    ?>
                                        <h4>Jumlah tagihan dengan kode booking <b><?php echo $c->kode ?></b> sebesar Rp.<?php echo $c->harga ?>,00</h4>
                                        <br/>
                                    <?php } ?>
                                        <br/><br/>
              
              
                                <div>
                                <table class="table">
                                    <h2 class="display-4 border-bottom probootstrap-section-heading">Booking Status</h2>
                                  <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kode Booking</th>
                                        <th scope="col">Tanggal Booking</th>
                                        <th scope="col">Catatan</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                       <?php 
                                        $no = 1;
                                        foreach($data as $b){ 
                                    ?>
                                    <tr>
                                      <th scope="row"><?php echo $no++ ?></th>
                                      <td><?php echo $b->kode ?></td>
                                      <td><?php echo $b->tanggal ?></td>
                                      <td><?php echo $b->catatan ?></td>
                                      <td><?php echo $b->status ?></td>
                                      <td><form action="<?php echo base_url(). 'User/cancelbook'; ?>" method="post"><input type="hidden" name="kode" value="<?php echo $b->kode ?>"  required><input type="submit" value="Cancel Booking" class="btn btn-primary"></form></td>
                                    </tr>
                                      <?php } ?>
                                  </tbody>
                                </table>
                    
                              </div>
           
            

          </div>
        </div>
        
      </div>
    </section>
    
         <section class="probootstrap_section" id="section-feature-testimonial">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-12 text-center mb-5 probootstrap-animate">
        
           
               <div>
                                <table class="table">
                                    <h2 class="display-4 border-bottom probootstrap-section-heading">Booking History</h2>
                                  <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kode Booking</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Catatan</th>
                    
                                    </tr>
                                  </thead>
                                  <tbody>
                                       <?php 
                                        $no = 1;
                                        foreach($data1 as $h){ 
                                        ?>
                                    <tr>
                                      <th scope="row"><?php echo $no++ ?></th>
                                      <td><?php echo $h->kode ?></td>
                                      <td><?php echo $h->tanggal ?></td>
                                      <td><?php echo $h->catatan ?></td>
                                    </tr>
                                      <?php } ?>
                                  </tbody>
                                </table>
                                <?php 
                                    echo $this->pagination->create_links();
                                ?>
                               
                              </div>
           
            

          </div>
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