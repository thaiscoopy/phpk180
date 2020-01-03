<?php
// có 3 bước lấy dữ liệu từ database
// Bước 1: Kết nối database
$connect = mysqli_connect('localhost','root','','hocphpk180');
if($connect){
mysqli_query($connect, "SET NAMES 'utf8' ");
// print_r('Kết nối thành công');
}else{
echo 'Kết nối thất bại';
}
// Bước 2: Viết truy vấn và thực thi
$sql = 'SELECT * FROM thanh_vien';
$query = mysqli_query($connect, $sql);
// Bước 3: Lấy ra bản ghi row
// - Cách 1: Dùng hàm đếm kết quả truy vấn
// $num_rows = mysqli_num_rows($query);
// echo $num_rows;
// - Cách 2: Dùng hàm lấy ra tất cả số bản ghi
// $row = mysqli_fetch_assoc($query);
// trả về 1 mảng chứa toàn bộ dữ liệu
// echo $row['full']; cách này lấy được có 1 lần thôi nên cần dùng vòng lặp
// dùng vòng lặp lấy ra tất bản ghi - while
while($row = mysqli_fetch_assoc($query)){
 echo $row['id'].'<br/>'.$row['user'].'<br/>'.$row['pass'].'<br/>'.$row['full'].'<br/>'.$row['address'].'<br/>'.$row['phone'].'<br/>'.$row['level'];
 echo '<hr>';
}

?>