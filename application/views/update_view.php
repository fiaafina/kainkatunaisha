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
                    <h2>Masukkan data kain yang akan anda update</h2>
                </div>
            </div>
        
        <div class="col-md-8 col-md-push-2">
            <div id="sendmessage">Akun anda telah dibuat. Selamat Berbelanja!</div>
            <div id="errormessage"></div>
            <?php echo validation_errors() ?>
            <form action="<?php echo base_url().'index.php/admin/update/'.$katalog->idk?>" method="post" role="form" class="contactForm" enctype="multipart/form-data">
                <div class="form-group">
                    <input value="<?php echo $katalog->nomor ?>"type="text" name="nomorkain" class="form-control" id="name" placeholder="Nomor Kain" data-rule="minlen:4" data-msg="Harap masukkan nama lengkap anda" />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input value="<?php echo $katalog->namakain ?>"type="text" name="namakain" class="form-control" id="name" placeholder="Nama Kain" data-rule="minlen:4" data-msg="Harap masukkan alamat lengkap anda" ></textarea>
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input value="<?php echo $katalog->jumlah ?>"type="text" class="form-control" name="jumlah" id="email" placeholder="Jumlah Kain" data-rule="email" data-msg="Harap masukkan email yang benar" />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input value="<?php echo $katalog->harga ?>"type="text" class="form-control" name="harga" id="email" placeholder="Harga Kain per Meter" data-rule="email" data-msg="Harap masukkan nomor handphone yang benar" />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input type="file" class="form-control" name="gambar" id="email" placeholder="Upload Gambar" data-rule="email" data-msg="Harap masukkan nomor handphone yang benar" />
                    <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" class="btn btn-primary btn-lg">Update</button></div>
            </form>
       
        </div>
        
      </div>
    </div>
  </section>
    </body>
</html>