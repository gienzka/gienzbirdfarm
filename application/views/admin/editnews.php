<!DOCTYPE html>
<html lang="en">
  <head>
      
    <title>Gienz Bird Farm</title>
    
    <!-- Favicons -->
        <link href="<?php echo base_url(). 'assets/images/favicon.ico'; ?>" rel="icon"> 

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(). 'assets/admin/css/bootstrap.css'; ?>" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url(). 'assets/admin/font-awesome/css/font-awesome.css'; ?>" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/admin/css/zabuto_calendar.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/admin/js/gritter/css/jquery.gritter.css'; ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/admin/lineicons/style.css'; ?>">    
    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(). 'assets/admin/css/style.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url(). 'assets/admin/css/style-responsive.css'; ?>" rel="stylesheet">

    <script src="<?php echo base_url(). 'assets/admin/js/chart-master/Chart.js'; ?>"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
       <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="<?php echo base_url(). 'Welcome/admin'; ?>" class="logo"><b>GIENZ BIRD FARM</b></a>
            <!--logo end-->
          <!--
            <div class="nav notify-row" id="top_menu">
                
                <ul class="nav top-menu">
                     //settings start
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">DashGum Admin Panel</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Product Development</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Payments Sent</div>
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete (Important)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    
                     //settings end
                    //inbox dropdown start
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Zac Snider</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-divya.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     Hi, I need your help with this.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-danro.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Love your new Dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-sherman.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Please, answer asap.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    //inbox dropdown end
                </ul>
                //notification end
            </div> -->
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?php echo base_url(). 'LoginSignup/logout'; ?>">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start -->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	 <p class="centered"><a href="profile.html"><img height="100px" width="100px" src="<?php echo base_url(). 'assets/images/gbf1.png'; ?>"></a></p>
              	  <h5 class="centered">GBF Crew</h5>
              	  	
                  <li class="mt">
                      <a href="<?php echo base_url(). 'Welcome/admin'; ?>">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a  href="<?php echo base_url(). 'Welcome/userdata'; ?>" >
                          <i class="fa fa-desktop"></i>
                          <span>GBF User</span>
                      </a>
                  </li>

                <li class="sub-menu">
                      <a  href="<?php echo base_url(). 'Welcome/adminbook'; ?>">
                          <i class="fa fa-cogs"></i>
                          <span>GBF Booking</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a  class="active" href="<?php echo base_url(). 'Welcome/addnews'; ?>" >
                          <i class="fa fa-book"></i>
                          <span>GBF News</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a  href="<?php echo base_url(). 'Welcome/trophy'; ?>" >
                          <i class="fa fa-tasks"></i>
                          <span>GBF Trophy</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a  href="<?php echo base_url(). 'Welcome/gallery'; ?>" >
                          <i class="fa fa-th"></i>
                          <span>GBF Gallery</span>
                      </a>
                  </li>
                  

              </ul>
              <!-- sidebar menu end -->
          </div>
      </aside>
      <!-- sidebar end -->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<div class="row mt">
          		<div class="col-lg-12">
                              <div class="col-lg-5 col-md-8">
                                <div class="form">

                                <a class="logout" href="<?php echo base_url(). 'Welcome/addnews'; ?>">Back</a>
                                <br/> 
                                <h4>Edit News</h4>
                                <form action="<?php echo base_url(). 'CrudAdmin/updatenews'; ?>" method="post">
                                    <?php 
                                        foreach($news as $n){ 
                                    ?>
                                    ID : <input type="text" name="id" value="<?php echo $n->id ?>" class="form-control" readonly><br>
                                    Judul : <input type="text" name="judul" value="<?php echo $n->judul ?>" class="form-control" required><br>
                                    Berita : <textarea name="berita" cols="30" rows="20" class="form-control" required><?php echo $n->berita ?></textarea>
                                    
                                    <?php } ?>
                                    <br/>
                                    <input type="submit" value="Update" class="btn btn-warning">
                                </form>

                                <br/>
                                <h4>Change Foto</h4>
                                <form action="<?php echo base_url(). 'CrudAdmin/updatefotonews'; ?>" method="post" enctype="multipart/form-data">  
                                    <?php 
                                        foreach($news as $n){ 
                                    ?>
                                    <input type="hidden" name="id" value="<?php echo $n->id ?>" class="form-control" required>
                                    <?php } ?>
                                    <input type="file" name="filetoupload" id="filetoupload" required>
                                    <br/>
                                    <input type="submit" value="Upload" class="btn btn-warning">
                                </form>
                                <br/>
                                </div>
                              </div>
                    
				</div><! --/col-md-4 -->
            </div><!-- /END 6TH ROW OF PANELS -->
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2018 - Gienz Bird Farm
              <a href="<?php echo base_url()?>" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(). 'assets/admin/js/jquery.js'; ?>"></script>
    <script src="<?php echo base_url(). 'assets/admin/js/jquery-1.8.3.min.js'; ?>"></script>
    <script src="<?php echo base_url(). 'assets/admin/js/bootstrap.min.js'; ?>"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url(). 'assets/admin/js/jquery.dcjqaccordion.2.7.js'; ?>"></script>
    <script src="<?php echo base_url(). 'assets/admin/js/jquery.scrollTo.min.js'; ?>"></script>
    <script src="<?php echo base_url(). 'assets/admin/js/jquery.nicescroll.js'; ?>" type="text/javascript"></script>
    <script src="<?php echo base_url(). 'assets/admin/js/jquery.sparkline.js'; ?>"></script>


    <!--common script for all pages-->
    <script src="<?php echo base_url(). 'assets/admin/js/common-scripts.js'; ?>"></script>
    
    <script type="text/javascript" src="<?php echo base_url(). 'assets/admin/js/gritter/js/jquery.gritter.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url(). 'assets/admin/js/gritter-conf.js'; ?>"></script>

    <!--script for this page-->
    <script src="<?php echo base_url(). 'assets/admin/js/sparkline-chart.js'; ?>"></script>    
	<script src="<?php echo base_url(). 'assets/admin/js/zabuto_calendar.js'; ?>"></script>	 
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
