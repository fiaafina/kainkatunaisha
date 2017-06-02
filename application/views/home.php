<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kain Katun Aisha</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fira+Sans|Roboto:300,400|Questrial|Satisfy">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
    
  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" onload="myFunction()">
  <div class="header">
      <div class="bg-color">
        <header id="main-header">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#lauraMenu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Kain Katun Aisha</a>
            </div>
            <div class="collapse navbar-collapse" id="lauraMenu">
              <ul class="nav navbar-nav navbar-right navbar-border">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="#portfolio">Produk</a></li>
                <li><a href="#testimonial">Tentang</a></li>
                <li><a href="index.php/web/web_view">Masuk</a></li>
              </ul>
            </div>
          </div>
        </nav>
        </header>
        <div class="wrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-12 wow fadeIn delay-05s">
              <div class="banner-text">
                  <h2>Create The Style By Yours</h2>
                  <h2><span>Realize Your Imagination With High Quality Textile</span></h2>
              </div>
              <div class="overlay-detail text-center">
                  <a href="#about"><i class="fa fa-angle-down"></i></a>
              </div>
            </div>
          </div>
          </div>
        </div>
        </div>
      </div>
  <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
    <div class="row">
        <div class="text-center">
            <h1>Kategori Kain</h1>
        </div>
        <div class="row">
            <?php foreach($kategori as $k){ ?>
            <div class="col-md-6">
                <div class="well">
                    <a href="<?= base_url().'index.php/web/detail/'.$k->id?>">
                        <img width='200px' height='250px' class="thumbnail img-responsive" alt="Bootstrap template" 
                        src="<?php echo base_url()?><?=$k->foto?>"/>
                    </a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    </div>

  </section>
  <section id="testimonial" class="section-padding wow fadeInUp">
    <div class="container">
      <div class="row">
          <h2 class="title text-center"><span>Tentang</span> Kain Katun Aisha</h2>
        <div class="test-sec">
          <div class="col-sm-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d246.97983472766495!2d112.61497559834818!3d-7.928727415898472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788206095b40a1%3A0xa7c783ee9f6e32fa!2sBumi+Tunggul+Wulung+Indah!5e0!3m2!1sid!2sid!4v1496343871048" width="1200" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            <div class="carousel-info">
              <div class="pull-left"> <span class="testimonials-name"></span> </div>
            </div>
          </div>
    
        </div>
      </div>
    </div>
  </section>
  
  <footer class="footer-2 text-center-xs bg--white">
    <div class="container">
      <!--end row-->
      <div class="row">
          <div class="col-md-6">
              <div class="footer">
                  © Copyright Laura Theme. All Rights Reserved
                    <div class="credits">
                        <!-- 
                            All the links in the footer should remain intact. 
                            You can delete the links only if you purchased the pro version.
                            Licensing information: https://bootstrapmade.com/license/
                            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Laura
                        -->
                        Made by <a href="https://www.linkedin.com/in/fia-afina-yusviana-9752b2136/">Fia Afina Yusviana</a>
                    </div>
              </div>
          </div>
          <div class="col-md-6 text-right">
              <ul class="social-list">
                  <li>Contact Us</li>
                  <li>
                      <a href="https://www.facebook.com/kainkatunaisha">
                          <i class="fa fa-facebook"></i>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.instagram.com/kainkatunaisha/">
                          <i class="fa fa-instagram"></i>
                      </a>
                  </li>
                  <li>
                      <a href="#">
                          <i class="fa fa-whatsapp"></i>
                      </a>
                  </li>
                  
              </ul>
          </div>
          
      </div>
      <!--end row-->
    </div>
  </footer>
  
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.easing.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.bxslider.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/wow.js"></script>
    <script src="<?php echo base_url();?>assets/js/custom.js"></script>
    <script src="<?php echo base_url();?>assets/contactform/contactform.js"></script>
    
  </body>
</html>