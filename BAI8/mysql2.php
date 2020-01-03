<?php
// thêm 5 câu lệnh nâng cao
//1. WHERE (điều kiện)
// vd: SELECT * FROM thanh_vien WHERE level = '1'

//2&3. AND - OR
// vd: lấy ra tất cả các thành viên ở hanoi VÀ sinh năm 2000
// SELECT * FROM thanh_vien WHERE address = 'Hà Nội' 
// AND birthday>= '2000-01-01' AND birthday<= '2000-12-31' 
// vd: lấy ra tất cả các thành viên ở hanoi HOẶC sinh năm 2000
// SELECT * FROM thanh_vien WHERE address = 'Hà Nội' 
// OR birthday>= '2000-01-01' AND birthday<= '2000-12-31'

//4. ORDER BY (sắp xếp theo thứ tự): tăng dần ASC - giảm dần DESC
// lấy ra tất cả các sản phẩm theo tứ tự giảm dần
// $sql= "SELECT * FROM product ORDER BY prd_id DESC"

//5. LIMIT: giới hạn số bản ghi hiển thị
// lấy ra 5 sản phẩm mới nhất
// SELECT * FROM product ORDER BY prd_id DESC LITMIT 5

//Kết nối bảng : mysql
// SELECT * FROM product INNER JOIN category ON product.cat_id = categor.cat_id

?>