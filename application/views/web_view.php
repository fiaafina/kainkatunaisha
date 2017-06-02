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
                <li><a href="<?php echo base_url().'index.php/web/logout'?>">Logout</a></li>
              </ul>
            </div>
          </div>
        </nav>
            
        </header>
          <div class="wrapper">
                <div class="container" style="height:100%;">
                  
          <div class="col-md-6 col-md-offset-3 text-center" style="margin-top:300px;"> 
                <form method="post" action="<?php echo base_url().'index.php/login'?>">
        <table>
            <tr>
                <td><span>Username</span></td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="LOGIN"></td>
            </tr>
            <tr>
                <td></td>
                <td><a href=<?php echo base_url()."index.php/web/userbaru_view"?>><input type="button" value="BUAT AKUN"></a></td>
            </tr>
            <tr>
                <td colspan="2"><?php echo $err_message;?></td>
            </tr>
        </table>
        
    </form>
            </div>
                 
                </div>
          </div>
        </div>
            
    </body>
</html>