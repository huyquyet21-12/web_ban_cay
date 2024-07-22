<?php 
require_once '../checkout_super_admin.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="../index.php">Trang chủ</a>
    <h1>Đây là trang phân loại</h1>
    <?php 
    require_once '../connect.php';
    $sql = "select * from classification";
    $result = mysqli_query($connect,$sql);
    ?>
    <a href="form_insert.php">Thêm</a>
    <br>
    <table border="1" width="50%">
        <tr>
            <th>Mã</th>
            <th>Tên</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
        <?php foreach ($result as $each) { ?>
            <tr>
                <td><?php echo $each['id']?></td>
                <td><?php echo $each['name']?></td>
                <td>
                    <a href="form_update.php?id=<?php echo $each['id']?>">
                        Sửa
                    </a>
                </td>
                <td>
                    <a href="delete.php?id=<?php echo $each['id']?>">
                        Xóa
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>