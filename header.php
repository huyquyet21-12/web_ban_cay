<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./font/fontawesome-free-6.4.2-web/css/all.min.css">
    <style type="text/css">
        
        #header {
            margin-left:5px;
            margin-right:10px;
            padding:0;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            width:100%;
            height:100px;
            background-color:#90EE90;
        }
        #header ul li  {
            
            display: inline-block;
            margin : 10px;
        }
        #header ul li a {
            text-decoration:none;
        }
    </style>
</head>
<body>
    <div id="header">
        <ul>
            <li>
                <a href="index.php">Trang chủ</a>
            </li>
            <?php if(empty($_SESSION['user'])){ ?>
            <li>
                <a href="login.php">Đăng nhập</a>
            </li>
            <li>
                <a href="register.php">Đăng kí</a>
            </li>
            <?php } else { ?>
                <li>
                    <a href="user.php">Trang thông tin</a>
                </li>
                <li>
                    <a href="logout.php">Đăng xuất</a>
                </li>
                <li>
                    <a href="view_cart.php">Giỏ hàng</a>
                </li>
            <?php } ?>  
            
            <li>
                <a href="polici.php">
                        Chính sách 
                </a>
            </li>
            <li>
                <a href="cart_show.php">
                      Đơn hàng
                </a>
            </li>
            <li>
                <a href="user.php">
                    <i class="fa-solid fa-user"></i>
                </a>
            </li>
        </ul>
</div>
</body>
</html>