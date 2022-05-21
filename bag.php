<?php

try

    {
        $veritabani = new PDO("mysql:host=localhost;dbname=bigrafi_veritabani;charset=utf8;","root","");
    } 

    catch (PDOExpection $sorun)

    {
        echo $sorun->getMessage();
    }


?>