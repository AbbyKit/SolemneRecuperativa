<?php
session_start();
if (!empty($_SESSION["name"])) {
    $_SESSION=array();
    session_destroy();
    header("Location:home.html");
}
?>