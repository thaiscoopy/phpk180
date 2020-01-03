<?php
//khởi tạo session
session_start();
define('SECURITY',true);// cần bảo mật file - bắt người dùng đi từ index.php
include_once('../config/connect.php');//..vì đang từ index đi ra admin rồi vào config rồi vào connect
if(isset($_SESSION['mail'])&& isset($_SESSION['pass'])){
    include_once('admin.php');
}else{
    include_once('login.php');
}

?>