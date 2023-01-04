
  <?php

  $conn = new PDO("mysql:host=localhost;dbname=kayit;charset=utf8", "root", "");



if(isset($_POST['delete'])){
  $id = $_POST['select'];
  $conn->prepare("DELETE FROM anasayfa WHERE id = ?")->execute([$id]);
}

if(isset($_POST['submitHizmet'])){
  $no = $_POST['no'];
  $baslik = $_POST['baslik'];
  $aciklama = $_POST['aciklama'];

  $guncelle = $conn->prepare("UPDATE anasayfa SET no=:no,baslik=:baslik, aciklama=:aciklama WHERE id=:id");
  $kontrol = $guncelle->execute(array(
      'no' => $no,
      'baslik' => $baslik,
      'aciklama' => $aciklama,
      'id' => $_GET['duzenle']
  ));

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








               <div class="secc"  style="display: flex; width:770px" >
    <div class="body flex-grow-1 px-3" style="width: 900px; border-right: 1px solid #0000003b;">
    <h2 style="margin: 20px 5px;">Anasayfa Düzenle / Sil</h2>
    <hr>
    <?php
    $veri = $conn
        ->query("SELECT * FROM anasayfa")
        ->fetchAll();
    ?>
    <?php

    foreach ($veri as $row) {

    ?>
    <div class="user-content" style="display: flex;
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    justify-content: space-between;
    align-items:center;">
        <div class="user-name">
        <h6>Numara</h6>
        <textarea name="no" id="isim" cols="5" rows="2">  <?php echo $row['no'] ?></textarea>
        </div>
        <div class="user-nick">
        <h6>Başlık</h6>
        <textarea name="baslik" id="fiyat" cols="15" rows="2">  <?php echo $row['baslik'] ?></textarea>
        </div>
        <div class="user-nick">
        <h6>Açıklama</h6>
        <textarea name="aciklama" id="fiyat" cols="25" rows="2">  <?php echo $row['aciklama'] ?></textarea>
        </div>
        <a href="index.php?duzenle=<?php echo $row['id'] ?>" class="btn btn-info" style="width:90px; text-align: center;
    height: 40px;">Düzenle</a>  

        <a href="index.php?sil=<?php echo $row['id'] ?>" class="btn btn-danger" style="width: 90px;
    text-align: center;
    height: 40px;">Sil</a>
    </div>
    <hr>
    <?php
    }
    ?>
</div>






<div class="body flex-grow-1 px-3" style="width: 400px;
    /* border-right: 1px solid #0000003b; */
    position: fixed;
    right: 20px;
    top: 150px;
    padding-bottom:5px">

<h2 style="margin: 20px 5px;">Düzenle</h2>


<?php


if (isset($_GET['sil'])) {
    $sil = $conn->prepare("DELETE FROM anasayfa WHERE id=:id");
    $kontrol = $sil->execute(array(
        'id' => $_GET['sil']
    ));

}


if (isset($_GET['duzenle'])) {
    $duzenle = $conn->prepare("SELECT * FROM anasayfa WHERE id=:id");
    $duzenle->execute(array(
        'id' => $_GET['duzenle']
    ));

    $row = $duzenle->fetch(PDO::FETCH_ASSOC);
    
    ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group" style="    margin-bottom:5px;">
            <label for="isim">Numara</label>
            <input type="text" class="form-control" name="no" id="isim" value="<?php echo $row['no'] ?>">
        </div>
        <div class="form-group" style="    margin-bottom: 5px;">
            <label for="unvan">Başlık</label>
            <input type="text" class="form-control" name="baslik" id="fiyat" value="<?php echo $row['baslik'] ?>">
        </div>
        <div class="form-group" style="    margin-bottom: 5px;">
            <label for="unvan">İçerik</label>
            <input type="text" class="form-control" name="aciklama" id="fiyat" value="<?php echo $row['aciklama'] ?>">
        </div>
        <button type="submit" name="submitHizmet" class="btn btn-primary">Güncelle</button>
    </form>
    
    <?php
}
?>

<div class="body flex-grow-1 px-3" style="width: 400px;
    border-top: 1px solid #0000003b;
;">

<h2 style="margin: 20px 5px;">Ekle</h2>


<?php


if (isset($_GET['sil'])) {
    $sil = $conn->prepare("DELETE FROM anasayfa WHERE id=:id");
    $kontrol = $sil->execute(array(
        'id' => $_GET['sil']
    ));

}


if (isset($_GET['duzenle'])) {
    $duzenle = $conn->prepare("SELECT * FROM anasayfa WHERE id=:id");
    $duzenle->execute(array(
        'id' => $_GET['duzenle']
    ));

    $row = $duzenle->fetch(PDO::FETCH_ASSOC);

    if(isset($_POST['submitEkle'])){
  $no= $_POST['no'];
  $baslik = $_POST['baslik'];
  $aciklama = $_POST['aciklama'];

  $conn->prepare("INSERT INTO `anasayfa`(`no`,`baslik`,`aciklama`) VALUES (?,?,?)")->execute([$no,$baslik,$aciklama]);

}
    ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group" style="    margin-bottom: 5px;">
            <label for="isim">Numara</label>
            <input type="text" class="form-control" name="no" id="isim" value="" placeholder="Numara Ekleyiniz">
        </div>
        <div class="form-group" style="    margin-bottom: 5px;">
            <label for="unvan">Başlık</label>
            <input type="text" class="form-control" name="baslik" id="fiyat" value="" placeholder="Başlık Ekleyiniz">
        </div>
        <div class="form-group" style="    margin-bottom: 5px;">
            <label for="unvan">Açıklama</label>
            <input type="text" class="form-control" name="aciklama" id="fiyat" value="" placeholder="Açıklama Ekleyiniz">
        </div>
        <button type="submit" name="submitEkle" class="btn btn-success" style="width: 90px;">Ekle</button>
    </form>
    
    <?php
}
?>
</div>
</div>
</div>
</div>
























































            


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