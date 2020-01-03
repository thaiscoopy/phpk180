<?php
// Bước 1: Kết nối database
if(!defined('SECURITY')){
	die('Bạn không có quyền truy cập vào file');
}
$connect = mysqli_connect('localhost','root','','phpk180');
if($connect){
mysqli_query($connect, "SET NAMES 'utf8' ");
// print_r('Kết nối thành công');
}else{
echo 'Kết nối thất bại';
}
?>