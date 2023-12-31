<?php
session_start();
require_once "database/dbhelper.php";

if(isset($_POST["submit"]) && isset($_POST["username"]) && isset($_POST["password"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM user WHERE username=? AND password=? ";
    $params = [$username,$password];
    $data = executeResult($sql,$params);
    if($data){
        header('location: admin/admin.php');
    }
}

?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOAN THAY NGUYEN</title>
    <link rel="stylesheet" href="style.css" >
</head>
<body>
    <header>
        <h2 class="logo">Logo</h2>
        <nav class="navigation">
            <a href="#" >Fanpage</a>
            <a href="#" >Thông tin</a>
            <a href="#" >Liên hệ</a>
            <a href="#" >Khóa học</a>
            <button class="btnLogin-popup">Đăng nhập</button>
        </nav>
    </header>

    <div class="wrapper">
        <span class="icon-close"><ion-icon name="close"></ion-icon>
        </span>

        <div class="form-box login">
            <h2>Đăng nhập</h2> 
<form action="#" method="POST">
    <div class="input-box">
        <span class="icon"><ion-icon name="person"></ion-icon></span>
        <input type="username" required>
        <label>Username</label>
    </div>
    <div class="input-box">
        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
        <input type="password" required>
        <label>Password</label>
    </div>
    <div class="remember-forgot">
        <label><input type="checkbox">Nhớ mật khẩu</label>
        <a href="#">Quên mật khẩu?</a>
    </div>
    <button type="submit" class="btn login-link">Đăng nhập</button>
    <div class="login-register">
        <p>bạn chưa có tài khoản?<a href="#" class="register-link">Đăng ký ngay</a></p>
    </div>
</form>
    </div>

    <div class="form-box register">
        <h2>Đăng ký</h2> 
<form action="#">
<div class="input-box">
    <span class="icon"><ion-icon name="person"></ion-icon></span>
    <input type="text" required>
    <label>Tên người dùng</label>
</div>
<div class="input-box">
    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
    <input type="password" required>
    <label>Mật khẩu</label>
</div>
<div class="remember-forgot">
    <label><input type="checkbox">Đồng ý với nội dung & chính sách của Toán thầy Nguyện</label>
</div>
<button type="submit" class="btn">register</button>
<div class="login-register">
    <p>Bạn có tài khoản để đăng nhập?<a href="#" class="login-link">Đăng nhập</a></p>
</div>
</form>
</div>

    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="script.js"></script>
</body>
</html>