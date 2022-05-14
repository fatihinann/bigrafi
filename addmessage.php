<?php


include("bag.php");

$name=$_POST["name"];
$email=$_POST["email"];
$message=$_POST["message"];

$veri=$veritabani->prepare("insert into messages(name,email,message) values(?,?,?)");

$veri->execute(array($name,$email,$message));

include("show.php");

?>