<?php
//download và xem file
//Bước 1:
$ten_bien=$_GET['tham_so'];//hứng tham số
$ten_bien2='upload/'.$ten_bien; //mở file

//Bước 2: Thông báo tải file
header("Content-Disposition: attachment; filename = $ten_bien");//tải xuống

//Bước 3: Trình duyệt trả về định dạng file
header("Content-Type: application/pdf, png, jpeg");//muốn tải file về định dạng gì thì đổi tên định dạng đó

//Bước 4: Đọc file
readfile($ten_bien2);

?>