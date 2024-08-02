<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Mini Market</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?php echo base_url('/public/landing/');?>css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="<?php echo base_url('/public/landing/');?>css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?php echo base_url('/public/landing/');?>css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="<?php echo base_url('/public/landing/');?>images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="<?php echo base_url('/public/landing/');?>css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/css/bootstrap-slider.min.css" rel="stylesheet"/>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/bootstrap-slider.min.js"></script>
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="<?php echo base_url('/public/landing/');?>images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="<?php echo base_url('/public/landing/');?>images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="<?php echo base_url('/');?>">Home</a>
                              </li>
                              <li class="nav-item d_none login_btn">
                                 <a class="nav-link" href="<?php echo base_url('/login');?>">Login</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            <!---->
            <?php $itm=0; foreach ($productos as $r) { ?>
               <div class="carousel-item <?php if($itm == 0) echo 'active';?>">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="text-bg">
                           <h1> <span class="blu"><?php echo $r["nombre"] ?><br></span></h1>
                           <figure><img src="<?php echo $r["imagen"] ?>" alt="#"/></figure>
                           <!--<a class="read_more" href="#">Shop Now</a>-->
                        </div>
                     </div>
                  </div>
               </div>
            <?php $itm++;} ?>
            <!---->
            </div>
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
         </div>
      </section>
      <!-- end banner -->
      <!-- Our  Glasses section -->
      <div class="glasses">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage">
                     <h2>Productos</h2>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">			
            <div class="row">
            <div class="col-md-3"> 
               <input id="base_url" type="hidden" value="<?php echo base_url('productos/landing');?>">                       
               <div class="list-group">
                  <h3>MARCA</h3>
                  <div class="marcaSection">
                     <?php
                     foreach($marca as $marcaDetails){	
                     ?>
                     <div class="list-group-item checkbox">
                     <label><input type="checkbox" class="productDetail marca" value="<?php echo $marcaDetails["marca"]; ?>"  > <?php echo $marcaDetails["marca"]; ?></label>
                     </div>
                     <?php }	?>
                  </div>
               </div>
               <div class="list-group">
                  <h3>TIPO</h3>
                  <?php
                  foreach($tipo as $tipoDetails){	
                  ?>
                  <div class="list-group-item checkbox">
                  <label><input type="checkbox" class="productDetail tipo" value="<?php echo $tipoDetails['tipo']; ?>" > <?php echo $tipoDetails['tipo']; ?></label>
                  </div>
                  <?php    
                  }
                  ?>
               </div>    
               <div class="list-group">
                  <h3>GRUPO</h3>
                  <?php
                  foreach($grupo as $grupoDetails){	
                  ?>
                  <div class="list-group-item checkbox">
                  <label><input type="checkbox" class="productDetail grupo" value="<?php echo $grupoDetails['grupo']; ?>"  > <?php echo $grupoDetails['grupo']; ?></label>
                  </div>
                  <?php
                  }
                  ?> 
               </div>
            </div>
            <div class="col-md-9">
            <br />
               <div class="row searchResult">
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                    <a href="#">
                        <figure><img src="<?php echo base_url('/public/landing/');?>images/glass1.png" alt="#"/></figure>
                        <h3><span class="blu">$</span>50</h3>
                        <p>Sunglasses</p>
                    </a>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                    <a href="#">
                        <figure><img src="<?php echo base_url('/public/landing/');?>images/glass2.png" alt="#"/></figure>
                        <h3><span class="blu">$</span>50</h3>
                        <p>Sunglasses</p>
                    </a>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                    <a href="#">
                        <figure><img src="<?php echo base_url('/public/landing/');?>images/glass3.png" alt="#"/></figure>
                        <h3><span class="blu">$</span>50</h3>
                        <p>Sunglasses</p>
                    </a>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                    <a href="#">
                        <figure><img src="<?php echo base_url('/public/landing/');?>images/glass4.png" alt="#"/></figure>
                        <h3><span class="blu">$</span>50</h3>
                        <p>Sunglasses</p>
                    </a>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                    <a href="#">
                        <figure><img src="<?php echo base_url('/public/landing/');?>images/glass5.png" alt="#"/></figure>
                        <h3><span class="blu">$</span>50</h3>
                        <p>Sunglasses</p>
                    </a>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                    <a href="#">
                        <figure><img src="<?php echo base_url('/public/landing/');?>images/glass6.png" alt="#"/></figure>
                        <h3><span class="blu">$</span>50</h3>
                        <p>Sunglasses</p>
                    </a>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                    <a href="#">
                        <figure><img src="<?php echo base_url('/public/landing/');?>images/glass7.png" alt="#"/></figure>
                        <h3><span class="blu">$</span>50</h3>
                        <p>Sunglasses</p>
                    </a>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                    <a href="#">
                    <figure><img src="<?php echo base_url('/public/landing/');?>images/glass8.png" alt="#"/></figure>
                    <h3><span class="blu">$</span>50</h3>
                    <p>Sunglasses</p>
                    </a>
                  </div>
               </div>
               <div class="col-md-12">
                  <a class="read_more" href="#">Read More</a>
               </div>
            </div>
         </div>
               </div>
            </div>
            </div>	
         </div>
      </div>
      <!-- end Our  Glasses section -->
      <!-- contact section -->
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12 ">
                           <h3>Contact Us</h3>
                        </div>
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Name" type="type" name="Name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="type" name="Email">                          
                        </div>
                        <div class="col-md-12">
                           <input class="contactusmess" placeholder="Message" type="type" Message="Name">
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="map_section">
               <div id="map">
               </div>
            </div>
         </div>
      </div>
      </div>
      <!-- end contact section -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <ul class="location_icon">
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a><br> Location</li>
                        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a><br> +01 1234567890</li>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a><br> demo@gmail.com</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2019 All Rights Reserved. Design by<a href="https://html.design/"> Free Html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="<?php echo base_url('/public/landing/');?>js/jquery.min.js"></script>
      <script src="<?php echo base_url('/public/landing/');?>js/popper.min.js"></script>
      <script src="<?php echo base_url('/public/landing/');?>js/bootstrap.bundle.min.js"></script>
      <script src="<?php echo base_url('/public/landing/');?>js/jquery-3.0.0.min.js"></script>
      <script src="<?php echo base_url('/public/landing/');?>js/search.js"></script>
      <!-- sidebar -->
      <script src="<?php echo base_url('/public/landing/');?>js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="<?php echo base_url('/public/landing/');?>js/custom.js"></script>
      <script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {lat: 40.645037, lng: -73.880224},
             });
         
         var image = 'images/maps-and-flags.png';
         var beachMarker = new google.maps.Marker({
             position: {lat: 40.645037, lng: -73.880224},
             map: map,
             icon: image
           });
         }
      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js --> 
   </body>
</html>

