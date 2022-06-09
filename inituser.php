<?php
session_start();
include 'users.php';
$name=$_REQUEST["nombre"];
$email=$_REQUEST["correo"];
$pass=$_REQUEST["contra"];
$bdpasscomp=(include 'users.php');
$_SESSION["name"]=$name;
$_SESSION["email"]=$email;
$_SESSION["pass"]=$pass;
$passcomp=$email.$pass;

if (strcmp($passcomp,$bdpasscomp) == 0 ){ 
    header ("Location:session.php");
}
else {
    session_destroy();
    header ("Location:errpass.html");}
?>