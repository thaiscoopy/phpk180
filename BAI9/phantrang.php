<?php
// thuật toán phân trang
// LIMIT
// SELECT * FROM product LIMIT 5

//trang1: 1-5 sản phẩm| key: 0->4 | SELECT * FROM LIMIT 0,5 (0 - key đầu tiên | 5 sản phẩm)
//trang2: 6-10 sản phẩm | key: 5->9 | SELECT * FROM LIMIT 5,5 
//trang n là: $page

//ví dụ: 
// 1 sản phẩm 0
// 2 sản phẩm 1
// 3 sản phẩm 2

// 4 sản phẩm 3
// 5 sản phẩm 4
// 6 sản phẩm 5

// 7 sản phẩm 6
// -----------------
// SELECT * FROM product LIMIT 3

// $rows_per_page =3
// $page = $_GET['page'];
// $per_row=$page*$rows_per_page-$rows_per_page
// trang1: 1*3-3=0 //ra được chỉ số key là 0
// trang2: 2*3-3=3 //ra được chỉ số key là 3
// trang3: 3*3-3=6 //ra được chỉ số key là 6

// trang1: LIMIT 0,3
// trang2: LITMIT 3,3
// trang3: LIMIT 6,3

?>