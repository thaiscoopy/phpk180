<?php
ob_start();
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>
<body>
<?php
if($_POST["submit_name"]){
	if($_POST["user"] == "admin" && $_POST["pass"] == "admin"){
		if($_POST["check"] == "ok"){
			setcookie("user", "admin", time()+3600);
		}
		else{
			$_SESSION["user"] = "admin";
			header("location:admin.php");
		}
	}
	else{
		echo "<center style=\"color:red;\">Tài khoản không hợp lệ</center>";
	}
}

if(!$_SESSION["user"] or !$_COOKIE["user"]){
?>
<form method="post">
<table align="center" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <td align="center" colspan="2">Đăng nhập hệ thống quản trị</td>
  </tr>
  <tr>
    <td>Tài khoản</td>
    <td><input type="text" name="user" /></td>
  </tr>
  <tr>
    <td>Mật khẩu</td>
    <td><input type="password" name="pass" /></td>
  </tr>
  <tr>
  	<td>Ghi nhớ tài khoản</td>
    <td><input type="checkbox" name="check" value="ok" /></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="submit_name" value="Đăng nhập" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
  </tr>
</table>
</form>
<?php
}
else{
	header("location:admin.php");
}
?>
</body>
</html>
