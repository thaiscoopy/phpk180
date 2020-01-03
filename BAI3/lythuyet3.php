<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
//1. Phương thức GET
    //$_GET['tham_so'];// đây là dạng bât tuần tự
    //truyền URL
    //vnexpress.net/index.php?tham_so1=gia_tri1&tham_so2=gia_tri2
    //Nếu làm việc với form thì phải kiểm tra isset($biến): kiểm tra biến có tồn tại không. 
    //Nếu có trả về TRUE/ Nếu không trả về FALSE
    // if(isset($_GET['sbm'])){
    //     $email=$_GET['email'];
    //     $pass=$_GET['pass'];
    //     echo $email.'<br/>'.$pass;
    // }
    //sửa thẳng tham số trên url vẫn được -> làm việc với phương thức GET không làm việc với form
    //phải khai báo các biến thì khi thay đổi tham số trên url mới chạy    
//vd 2
    // if(isset($_GET['ten']) && isset($_GET['address']) && isset($_GET['phone'])){
    //     $ten=$_GET['ten'];
    //     $address=$_GET['address'];
    //     $phone=$_GET['phone'];
    //     echo $ten.'<br/>'.$address.'<br/>'.$phone;}


// 2. MẢNG: Có 2 cách khai báo mảng
//cách 1
// $array = array(1,'hai',true,5.5); echo array chỉ echo được string -> dùng cú pháp print_r
//cách 2
// $array =[1,'hai',true,5.5];
//var_dump($array); để biết rõ type của value thuộc key
// echo'<pre>';
// print_r($array);
// echo '<pre/>';
// echo $array[1];
//foreach($array as $key => $value){echo $value;} dùng để lấy tất cả key hoặc value trong $array
//nếu gán key mới cho biến vd 'boolen'=>true thì stt của key bỏ qua key 'boolen' này và đếm tiếp key sau



//3.JSON trong PHP
//Phần 1: lấy file JSON và chuyển sang dạng mảng để lấy value/key
//bước đầu tiên đọc file JSON
$data_get_file=file_get_contents('data.json');
//chuyển sang dạng mảng
$data_de_json=json_decode($data_get_file,true);
foreach($data_de_json as $key =>$value){echo $value;}

//Phần 2: update data mới thay thế dữ liệu cũ vào json
//chuyển từ mảng vào json
$en_json=json_encode($data_de_json,JSON_UNESCAPED_UNICODE);
file_put_contents('data.json',$en_json);


    ?>
    <!-- <form action=""method="GET">
    <input type="email" placeholder="Nhập email của bạn" name="email">
    <input type="text" value="Nhập mật khẩu của bạn" name="pass">
    <input type="submit" value="Đăng nhập" name="sbm">
    </form> -->


</body>
</html>