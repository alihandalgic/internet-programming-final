<?php

try{
    $db = new PDO("mysql:host=localhost; dbname=kayit; charset=utf8" , 'root' , '' );
    //echo "Veritabanı Bağlantısı Başarılı";
}
catch(Exception $e)
{
    echo $e->getMessage();
}

?>