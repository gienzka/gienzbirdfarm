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
              	  	
                  <li class="active" class="mt">
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
                      <a href="<?php echo base_url(). 'Welcome/addnews'; ?>" >
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
				            <form  style=”width:300px;” action="<?php echo base_url()."CrudAdmin/search_keyword"; ?>" method = "post">
                              <div class="row">
                                <div class="col">
                                  <input type="text" name="keyword" class="" placeholder="Enter Kode Booking">
                              
                               
                                  <input type="submit" value = "Search" class="btn btn-warning">
                                </div>
                              </div>
                            </form>

                            <br/><br/><br/><br/>		
				            <div>
                                <table class="table">
                                    <h4>Daftar History Penjualan</h4>
                                  <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kode Booking</th>
                                        <th scope="col">Tanggal Booking</th>
                                        <th scope="col">Jenis</th>
                                        <th scope="col">Catatan</th>
                                        <th scope="col">Harga</th>
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
                                        <td><?php echo $b->jenis ?></td>
                                      <td><?php echo $b->catatan ?></td>
                                      <td><?php echo $b->harga ?></td>
                                    </tr>
                                      <?php } ?>
                                  </tbody>
                                </table>
                                <?php 
                                    echo $this->pagination->create_links();
                                ?>
                    
                              </div>
                    <br/><br/>
                           <div class="row mt">
                      <!--CUSTOM CHART START -->
                      <div class="border-head">
                          <h3>Jumlah Penjualan per Bulan</h3>
                      </div>
                      <div class="custom-bar-chart">
                          <ul class="y-axis">
                              <li><span>100</span></li>
                              <li><span>80</span></li>
                              <li><span>60</span></li>
                              <li><span>40</span></li>
                              <li><span>20</span></li>
                              <li><span>0</span></li>
                          </ul>
                          <div class="bar">
                              <div class="title">JAN</div>
                              <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">62%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">FEB</div>
                              <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">MAR</div>
                              <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">APR</div>
                              <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
                          </div>
                          <div class="bar">
                              <div class="title">MAY</div>
                              <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">22%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">JUN</div>
                              <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">0%</div>
                          </div>
                          <div class="bar">
                              <div class="title">JUL</div>
                              <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">0%</div>
                          </div>
                      </div>
                      <!--custom chart end-->
					</div><!-- /row -->	
                    
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
    
    
    <!-- Welcome pop up -->s

	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
