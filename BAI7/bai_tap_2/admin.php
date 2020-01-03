<?php
session_start();
if($_SESSION["user"] or $_COOKIE["user"]){
	echo "Xin chao Admin da dang nhap thanh cong! <a href=\"logout.php\">Logout</a>";
}
else{
	header("location:login.php");
}
?>
