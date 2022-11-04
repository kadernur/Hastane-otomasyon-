<?php

try{
    $db=new PDO("mysql:host=localhost; dbname=hastane_otomasyon; charest=utf8", 'root','');
   // echo 'Veri tabanı Bağlantısı başarılı';

} catch(Exception $e){

    echo $e->getMessage();

}



?>