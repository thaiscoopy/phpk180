<?php
session_start();
// session_unset();
// unset($_SESSION['ho_ten']);
session_destroy();
// vì session là xóa trên trình duyệt nên không cần gọi file này
// vào file kia mà nó sẽ tự động xóa dữ liệu trên trình duyệt
?>
