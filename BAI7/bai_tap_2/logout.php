<?php
if($_SESSION["user"]){
	session_start();
	session_destroy();
	header("location:login.php");
}
elseif($_COOKIE["user"]){
	setcookie("user");
	header("location:login.php");
}
else{
	header("location:login.php");
}
?>