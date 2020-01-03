<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lý Thuyết</title>
</head>
<body>
<?php
//1. session trong php
// là 1 phiên làm việc của người dùng trên 1 website
// 1 session bằng 1 tk người dùng
// session_start(); //khởi tạo session
// $_SESSION['name'] =gia_tri; //cú pháp

// // hủy session
// session_unset(); // xóa bỏ tất cả session sinh ra
// //trong cùng phiên với session bị chọn xóa bỏ - cách 1
// unset(name); // xóa bỏ dơn lẻ từng session - cách 2
// //
// session_destroy();//hủy tất cả các session

//cấu trúc thư mục sử dụng session:
//login: đăng nhập - cần khởi tạo và tạo cú pháp
//nếu login thành công: 1 là đến admin.php, 2 là đến index.php
//nếu login không thành công -> vẫn ở trang login

//logout: đăng xuất -> hủy tất cả session

//về tìm hiểu về cookie
// session_start();
// if(isset($_POST['sbm'])){
//     $_SESSION['ho_ten']=$_POST['ho_ten'];//đang làm việc với session 
//     //nên cần khai báo theo session
// };
// if(isset($_SESSION['ho_ten'])){
//     echo $_SESSION['ho_ten'];
// };

//2. hằng:
define('PI','Xin chào');
// echo PI;
if(defined('PI')){
    echo 'file của bạn bị khóa';
} // định nghĩa hằng

// hàm chuyển hướng
header('location:htttp://google.com');
// hàm báo lỗi:
die('bạn không có quyền truy cập file');

?>
<form action='' method="POST">
<input type='text' name='ho_ten'>
<input type='submit' name='sbm'>
</form> 
</body>
</html>
