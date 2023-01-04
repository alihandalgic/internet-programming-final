<?php
ob_start();
session_start();

require 'baglan.php';

if(isset($_POST['kayit']))
{
   $username = $_POST['username'];
   $password = $_POST['password'];
   $password_again = @$_POST['password_again'];

    if(!$username)
    {
        echo "Lütfen Kullanıcı adınızı giriniz";
        

    }
    elseif(!$password || !$password_again)
    {
        echo "Lütfen şifrenizi giriniz.";
        
    }
    elseif($password != $password_again)
    {
        echo "Şifreler uyuşmuyor.";
    }

    else
    {
        //veritabanı kayıt işlemi
        $sorgu = $db->prepare('INSERT INTO users SET user_name = ?, user_password = ?');
        $ekle = $sorgu->execute
        ([
            $username , $password
        ]);
        if($ekle)
        {
            echo "Kayıt başarıyla gerçekleştirildi,Yönlendiriliyorsunuz";
            header('Refresh:2; loginn.php');
        }
        else{
            echo "Bir hata oluştu , Lütfen tekrar kontrol edin.";
        }
    }
}


if(isset($_POST['giris'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!$username)
    {
        echo "Kullanıcı adınızı giriniz.";
    }
    elseif(!$password)
    {
        echo "Şifrenizi giriniz";
    }
    else
    {
        $kullanici_sor = $db->prepare('SELECT * FROM users WHERE user_name = ? || user_password = ?');
        $kullanici_sor->execute([
            $username, $password
        ]);

        $say = $kullanici_sor->rowCount();
        if($say == 1)
        {
            $_SESSION['username']=$username;
            echo "Başarıyla giriş yapıldı,yönlendiriliyorsunuz";
            header('Refresh:2; admin/index.php');
        }
        else
        {
            echo "Bir hata oluştu tekrar kontrol ediniz.";
        }
    }

}


?>