<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <li>
        <a href="index.php">Trang chủ</a>
    </li>
    <?php
    if(isset($_GET['error'])){
        echo($_GET['error']);
    }
    ?>
    <h1>Form Đăng Kí</h1>
    <br>
    <form action="process_register.php" method="POST">
    Tên 
    <input type="text" name ="name">
    <br>
    Số điện thoại 
    <input type="text" name ="phone">
    <br>
    Địa chỉ 
    <textarea name="address" id="" cols="30" rows="7"></textarea>
    <br>
    Email 
    <input type="text" name="email">
    <br>
    Mật khẩu
    <input type="text" name="password">
    <br>
    <button>Đăng kí</button>
    </form>
</body>
</html>