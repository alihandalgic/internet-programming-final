<?php 

require 'baglan.php';

?>



<!DOCTYPE html>
<head>
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
        body{
            background-color:#717d85;
        }
    </style>
<body>

<div class="container" style="width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    display: flex; 
    margin-top:6rem;">
<div class="image" style="width: 50%;">
    <img src="images/login.jpg" style=" width: 100%;
    border-radius: 10px;" alt="">
</div>


    <div class="login" style="width: 400px;
    margin: 10px;
    margin-left:2rem;">
        <div class="login-screen">
            <div class="app-title">
                <h1>Kayıt Ol</h1>
            </div>
            <form action="islem.php" method="post">
            <div class="login-form">
                <div class="control-group">
                    <input type="text"name="username" class="login-field" placeholder="Kullanıcı Adı" id="login-name">
                    <label class="login-field-icon fui-user" for="login-name"></label>
                </div>
                <div class="control-group">
                    <input type="password" name="password" class="login-field" placeholder="Şifre" id="login-pass">
                    <label class="login-field-icon fui-user" for="login-pass"></label>
                </div>
                <div class="control-group">
                    <input type="password" name="password_again" class="login-field" placeholder="Tekrar Şifre" id="login-pass">
                    <label class="login-field-icon fui-user" for="login-pass"></label>
                </div>  
                <button href="kayit.php" name="kayit" class="btn btn-primary btn-large btn-click">Kayıt Ol</button>      
            </div>
        </form>
        <a href="loginn.php"><button href="" class="btn btn-primary btn-large btn-click">Giriş Yap</button></a>
        </div>
    </div>
</div>
    
</body>
</html>