<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    //1.Phương thức Post
    //- Post và Get cùng gửi dữ liệu lên server
    //- Post không gửi dữ liệu lên url như Get
    //- Post gửi dữ liệu chậm hơn Get
    // cú pháp $POST['tham_so'];
    // if(isset($_POST['sbm'])){
    //     $user=$_POST['user'];
    //     $pass=$_POST['pass'];
    //     echo $user.'<br/>'.$pass;
    //}

    //2. file upload
    // cú pháp:
    // $_FILES['tham_so']['name'];//lấy được tên của file upload
    // $_FILES['tham_so']['size'];//lấy theo kích cỡ file
    // $_FILES['tham_so']['type'];//lấy theo kiểu file
    // //
    // $_FILES['tham_so']['error'];// lấy file lỗi
    // $_FILES['tham_so']['tmp_name'];//up lên thư mục tạm
    // move_uploaded_file($ten_bien_tmp_name,'upload/anhdep.jpg');
    if(isset($_POST['sbm'])){
        $file_name = $_FILES['file_name']['name'];
        $tmp_name = $_FILES['file_name']['tmp_name'];
        $file_error = $_FILES['file_name']['error'];
        if($file_error > 0){
            echo'File upload bị lỗi';
        }
        else{
            move_uploaded_file($tmp_name,'upload/'.$file_name);
            echo'Thông báo: upload thành công';
        }
    }
    ?>
    <!-- <img src="'upload/'.$file_name" alt="" style="max-width:30%;"> -->
    <form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="file_name">
    <input type="submit" name="sbm">
    </form>
    <!-- <form action="" method="POST">
    <input type="text" name="user">
    <input type="text" name="pass">
    <input type="submit"name="sbm"> -->
</body>
</html>