<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        #middle {
            width: 80%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        img {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            height: auto;
        }

        p {
            color: #666;
            text-align: center;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <?php
    require_once 'admin/connect.php';
    $id = $_GET['id'];
    $sql = "select * from products where id ='$id'";
    $result = mysqli_query($connect,$sql);
    $each = mysqli_fetch_array($result);
    ?>
    <div id="middle">
        <h1>
            <?php  echo $each['name']?>
        </h1>
        <img src="admin/images/<?php echo $each['image'] ?>" alt="">
        <p> Giá : <?php echo $each['price'] ?> VND</p>
    </div>
</body>
</html>