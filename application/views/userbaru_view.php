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
    <body>
        <section id="contact" class="section-padding wow fadeIn delay-05s">
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                <div class="contact-sec text-center">
                    <h2>Anda harus mendaftar terlebih dahulu</h2>
                </div>
            </div>
        
        <div class="col-md-8 col-md-push-2">
            <div id="sendmessage">Akun anda telah dibuat. Selamat Berbelanja!</div>
            <div id="errormessage"></div>
            <?php echo validation_errors() ?>
            <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" data-rule="minlen:4" data-msg="Harap masukkan nama lengkap anda" />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <textarea name="alamat" class="form-control" id="name" placeholder="Alamat Anda" data-rule="minlen:4" data-msg="Harap masukkan alamat lengkap anda" ></textarea>
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" data-rule="email" data-msg="Harap masukkan email yang benar" />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="hp" id="email" placeholder="Nomor Handphone Anda" data-rule="email" data-msg="Harap masukkan nomor handphone yang benar" />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input type="text" name="username" class="form-control" id="name" placeholder="Username Anda" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" id="name" placeholder="Masukkan Password" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input type="password" name="konfirmasi" class="form-control" id="name" placeholder="Konfirmasi Password" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" class="btn btn-primary btn-lg">Buat Akun</button></div>
            </form>
       
        </div>
        
      </div>
    </div>
  </section>
    </body>
</html>