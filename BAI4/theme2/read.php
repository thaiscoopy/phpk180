<?php
//download và xem file
//Bước 1:
$file_upload=$_GET['file_upload'];//hứng tham số
$file_path='upload/'.$file_upload; //mở file

//Bước 2: Thông báo tải file
//header("Content-Disposition: attachment; filename = $file_upload");
//tải xuống (tắt đi để xem được trước)

//Bước 3: Trình duyệt trả về định dạng file
header("Content-Type: application/pdf");//muốn tải file về định dạng gì thì đổi tên định dạng đó

//Bước 4: Đọc file
readfile($file_path);

?>