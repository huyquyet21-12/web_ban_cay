<?php 
session_start();

if(isset($_COOKIE['remember'])){
    $token = $_COOKIE['remember'];
    require 'admin/connect.php';
    $sql = "select * from users where token ='$token' limit 1";
    
    $result = mysqli_query($connect,$sql);
    $number_rows = mysqli_num_rows($result);
    if($number_rows == 1){
        $each = mysqli_fetch_array($result);
        $_SESSION['user'] = $each['id'];
        $_SESSION['name'] = $each['name'];
    }
    
}
if(isset($_SESSION['user'])){
    header('location:user.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Trang đăng nhập</h1>
    <form action="process_login.php" method= "POST">
        Email
        <input type="text" name="email">
        <br>
        Mật khẩu
        <input type="password" name="password" autocomplete="false">
        <br>
        Ghi nhớ đăng nhập
        <input type="checkbox" name="remember">
        <br>
        <button>Đăng nhập</button>
        
    </form>
</body>
</html>