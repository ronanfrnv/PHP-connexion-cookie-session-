<?php 
$login = $_POST['login'];
$pass = $_POST['password'];
if $login = "ronan" && $pass ="ronan"{
    setcookie("C_autorisation", "ok", time()+3600);
    redirection("MaPage.php");
}else{
    setcookie("C_autorisation", "pas ok");
    redirection("pageErreur.html");
}
?>