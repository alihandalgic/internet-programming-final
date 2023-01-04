




<!DOCTYPE html>
<head>
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="style.css">


    <style>
        body{
            background-color:#717d85;
        }
    </style>
</head>
    <body>
    <div class="container" style="width: 100%;
    max-width: 1000px;
    margin: 0 auto;
    display: flex; 
    margin-top:6rem;">
<div class="image" style="width: 50%;">
    <img src="images/login.jpg" style=" width: 100%;
    border-radius: 10px;" alt="">
</div>


    <div class="login" style="  margin:0;  margin-left: 2rem;
    width: 400px; ">
        <div class="login-screen">
            <div class="app-title" style="text-align: center; color: black;">
                <h1>Giriş Yap</h1>
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
                <button href="loginn.php" name="giris" class="btn btn-primary btn-large btn-click">Giriş Yap</button>
            </div>
        </form>
        <a href="kayit.php"><button href="" class="btn btn-primary btn-large btn-click">Kayıt Ol</button>      
        </a>
        </div>
    </div>


    </div>
</body>
</html>