<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>About</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content=""> 
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body>
    <!-- header section start -->
    <div class="header_section">
      <div class="mobile_menu">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="logo_mobile"><a href="index.php"><img src="images/logo.png"></a></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Anasayfa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">Hakkımızda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="classes.php">Hizmetler</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="news.php">S.S.S.</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="contact.php">Iletişim</a>
                <li class="nav-item">
                <a class="nav-link " href="loginn.php">Giriş Yap</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="kayit.php">Kayıt Ol</a>
              </li>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="container">
        <div class="logo"><a href="index.php"><img src="images/logo.png"></a></div>
        <div class="menu_main" style="display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
    width: 90%;
    text-align: center;
    margin: 0 auto;
    background-color: #fff;
    border-radius: 30px;
    align-items: center;">
          <ul>
            <li><a href="index.php">Anasayfa</a></li>
            <li><a href="about.php">Hakkımızda</a></li>
            <li><a href="classes.php">Hizmetler</a></li>
            <li><a href="news.php">S.S.S.</a></li>
            <li><a href="contact.php">Iletişim</a></li>
            <li style="color:white;"><a href="loginn.php" style="background-color: #353593;
    padding: 9px;
    border-radius: 15px;
    color:white;">Giriş Yap</a></li>
            <li style="color:white;"><a href="kayit.php" style="background-color: #353593;
    padding: 9px;
    border-radius: 15px;
    color:white;">Bize Katıl</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- header section end -->
    <!-- about section start -->
    <div class="about_section layout_padding">
      <div class="container">
        <div class="row">



        <?php

                $conn = new PDO("mysql:host=localhost;dbname=kayit;charset=utf8", "root", "");


                //echo $username;
                $veri = $conn
                    ->query("SELECT * FROM hakkimizda")
                    ->fetchAll();

                foreach ($veri as $key => $value) {

                ?>

                      <div class="col-md-6">
                        <div class="image_1"><img src="images/<?php echo DIRECTORY_SEPARATOR.$value['gorsel']?>"></div>
                      </div>
                      <div class="col-md-6">
                        <h1 class="live_text"><?php echo $value['baslik']?></h1>
                        <p class="lorem_text"><li><?php echo $value['icerik']?></li></p>
                      </div>
                <?php
                }

                ?>
        </div>
      </div>
    </div>
    <!-- about section end --> 
    <!-- footer section start -->
    <div class="footer_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-6">
            <h1 class="customer_text">Hakkımızda</h1>
            <p class="footer_lorem_text">En yeni teknolojiler ve spor ekipmanlarıyla, spor deneyimini bir adım ileri taşı! Profesyonel eğitmenler ile birlikte antrenman yap, maksimum verim al. İster kulüpte ister açık havada hayalindeki sağlıklı ve fit yaşam için Kütahya Athletic her zaman seninle.</p>
          </div>
          <div class="col-lg-4 col-sm-6">
            <h1 class="customer_text">Adres</h1>
            <p class="footer_lorem_text1">Adres:Karadeniz Sokak , Andız , Kütahya</p>
            <p class="footer_lorem_text2">Tel: +90 5356541178</p>
            <p class="footer_lorem_text2">Fax: +90 2743334343 </p>
            <p class="footer_lorem_text2">Email:qfit@gmail.com</p>
            <div class="social_icon">
            <ul>
              <li><a href="#"><img src="images/fb-icon.png"></a></li>
              <li><a href="#"><img src="images/twitter-icon.png"></a></li>
              <li><a href="#"><img src="images/google-icon.png"></a></li>
              <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
              <li><a href="#"><img src="images/youtub-icon.png"></a></li>
            </ul>
          </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <h1 class="customer_text">Çalışma Saatleri</h1>
            <div class="time_main">
              <div class="footer_lorem_text">Pazartesi <span class="monday_text">8:00 - 23:00 </span></div>
              <div class="footer_lorem_text">Salı <span class="monday_text1">    8:00  - 23:00 </span></div>
              <div class="footer_lorem_text">Çarşamba <span class="monday_text2">8:00  - 23:00 </span></div>
              <div class="footer_lorem_text">Perşembe <span class="monday_text3">8:00  - 23:00 </span></div>
              <div class="footer_lorem_text">Cuma <span class="monday_text4">    8:00  - 23:00 </span></div>
              <div class="footer_lorem_text">Cumartesi <span class="monday_text5">KAPALI</span></div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <!--  footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
      <div class="container">
        <p class="copyright_text">2023 All Rights Reserved. Design by <a href="#">Alihan Dalgıç</a></p>
      </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript --> 
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
</body>
</html>