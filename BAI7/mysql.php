<?php
// 1. SQL có cấu trúc
// a. SQL server: C#, ASPX.net
// b. mySQL: php tuần, php framework laravel, php cms(wordpress, joomla), nodejs, ruby, python
// mySQL: php cũ 5/6
// mysqli: dùng bộ php mới: php7
// PDO: thường doanh nghiệp nước ngoài mới hay dùng 

// 2. No SQL: SQL không có cấu trúc: monggo - quá nhiều dữ liệu như ngân hàng mới dùng

// Học MYSQLi
// chia thành 4 tầng:
// Tầng 1:database (cơ sở dữ liệu)
// Tầng 2:table (bảng dữ liệu)
// mỗi database có nhiều table
// Tầng 3:column (trường thông tin)
// mỗi table có rất nhiều column - column luôn đi kèm ID
// Tầng 4:thêm bản ghi ( các chi tiết row id, user....)

// 4 câu lệnh cần thiết trong MYSQL
// 1. SELECT: lấy ra toàn bộ thông tin trong database
// SELECT * FROM thanh_vien - câu lệnh
// 2. INSERT: thực thi chức năng thêm
// INSERT INTO thanh_vien(id, user, pass, full, address,phone, level) VALUES ('','huynq','888888','Nguyễn Quốc Huy','Hà Nội','0966666666','1')
// 3. UPDATE: thay đổi thông tin đã có
// UPDATE thanh_vien SET pass='000000',phone='09123456789', WHERE id = '3' (3 ở đây là số ID)
// 4. DELETE: thực thi chức năng xóa - xóa id cũ id kế tiếp không chèn vào
// DELETE FROM thanh_vien WHERE id ='2'
?>