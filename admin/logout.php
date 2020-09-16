<?php session_start();
if(isset($_COOKIE['c_user']) && isset($_SESSION['c_user'])){
session_destroy();
setcookie('c_user','', time()-(3600*25),'/');
header('location:../login.php');
}else{
session_destroy();
header('location:../login.php');
}


?>