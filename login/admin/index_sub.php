<?php
  session_start();
  if(!isset($_SESSION['username'])){
    header("Location: login.php");
  }
  $conn = new PDO("mysql:host=localhost;dbname=kayit;charset=utf8", "root", "");

  
if(isset($_POST["guncelle"])){
  $baslik = $_POST["baslik"];
  $icerik = $_POST["icerik"];
  $sql = "UPDATE `anasayfa_sub` SET `baslik`='".$baslik."',`icerik`='".$icerik."' WHERE id = 1";
  $conn->exec($sql);


  echo "<script>alert('Güncelleme tamamlandı')</script>";
}
 

?>
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
      <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.html"><img class="logo_icon img-responsive" src="images/logo/logo_icon.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="images/layout_img/user_img.jpg" alt="#" /></div>
                        <div class="user_info">
                           <h6>QFit-Kütahya Spor Salonu</h6>
                           <p><span class="online_animation"></span>Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>Admin Paneli</h4>
                  <ul class="list-unstyled components">
                     <li><a href="index.php"><i class="fa fa-clock-o orange_color"></i> <span>Anasayfa</span></a></li>
                     <li><a href="index_sub.php"><i class="fa fa-clock-o orange_color"></i> <span>Anasayfa 2 </span></a></li>
                     <li><a href="hakkimizda.php"><i class="fa fa-clock-o orange_color"></i> <span>Hakkimizda</span></a></li>
                     <li><a href="sss.php"><i class="fa fa-clock-o orange_color"></i> <span>S.S.S</span></a></li>
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->


  <div class="wrapper d-flex flex-column min-vh-100 bg-light">
    <div class="body flex-grow-1 px-3">



<?php
$veri = $conn
          ->query("SELECT * FROM anasayfa_sub")
          ->fetchAll();

      
          ?>
   
   

<form action="" method="post" style="display: flex;
    flex-direction: column;
    width: 900px;
    margin: 0 auto;
    text-align: center;">
<label style="
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 3rem;
"> Anasayfa Paneli </label>


<label style="
    font-size: 1.2rem;
    font-weight: 500;
    margin-bottom: 1.2rem;
    text-align:left;
    text-decoration:underline">
     Başlık 
    </label>
<input style="border-color: #00000040;
    border-radius: 5px;
    height: 50px;
    font-family: monospace;
    letter-spacing: .5px;" type="text" name="baslik" value="<?php print_r($veri[0][1]) ?>" id="hakkimizda" cols="30" rows="2">
<label style="
    font-size: 1.2rem;
    font-weight: 500;
    margin: 3rem 0 1.2rem 0;
    text-align:left;
    text-decoration:underline" for="">İçerik</label>
<textarea style="border-color: #00000040;
    border-radius: 5px;
    font-family: monospace;
    letter-spacing: .5px;" name="icerik" id="icerik" cols="30" rows="10"><?php print_r($veri[0][2]) ?></textarea>


<input class="btn btn-success mt-4" style="width:200px; text-align:center; margin: 0 auto;" name="guncelle" type="submit" value="Güncelle">
</form>


























































            


               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="js/Chart.min.js"></script>
      <script src="js/Chart.bundle.min.js"></script>
      <script src="js/utils.js"></script>
      <script src="js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
      <script src="js/chart_custom_style1.js"></script>
   </body>
</html>