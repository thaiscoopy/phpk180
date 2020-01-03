<?php
// biểu thức điều kiện: if - if else - else if
// if:
//    $soNguyen = 10;
//    if($soNguyen > 0){
//        echo 'đây là số nguyên dương';
//    }
//     dạng boolean là kết quả true/false


// if - else
//    $soNguyen = -10;
//    if($soNguyen > 0){
//        echo 'đây là số nguyên dương';
//    }
//    else{echo 'đây là số nguyên âm';}


// else -if
    // $soNguyen=-10;
    // if($soNguyen >0){echo'đây là số nguyên dương';}
    // else if($soNguyen<0){echo'đây là số nguyên âm';}
    // else{'echo đây là số 0';}


// Vòng lặp WHITE
// while(biểu thức){thực thi hành động}
// bài tập: in ra các số từ 5 đến 9, và cho mỗi số tương ứng với 1 dòng
// $so = 5;
// while($so <10){echo $so.'<br/>';
// $so++;}

//in ra các số từ 10 - 1 và có dấu phảy, dấu chấm sau số 1
// $a = 10;
// while($a > 0){if($a >1){echo $a.',';}
// else {echo $a.'.';}$a--;}

//vòng lặp for
// for(khởi tạo biểu thức; kiểm tra biểu thức; tăng/giảm bt){#code... thực thi hành động}
//ví dụ: dùng vòng lặp for để lấy ra các số chẵn từ 10 đến 0
// for($i=10; $i>=0; $i-=2){echo $i;}

//bài tập: tính tổng của dãy số từ 0 - 10 dùng for
// $a= 0;
// $tong= 0;
// for($a=0;$a<=10;$a++){$tong+=$a;}
// echo $tong;

//bài tập về tích
for($a=2;$a<=9;$a++){for($b=1;$b<=10;$b++){echo $a.'x'.$b.'='.$a*$b.',';}
echo'<br>';}
?>
