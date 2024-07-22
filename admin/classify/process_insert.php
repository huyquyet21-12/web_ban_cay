<?php 
require_once '../checkout_super_admin.php';
require_once '../connect.php';

$name = $_POST['name'];
$sql = "insert into classification(name) values('$name')";

mysqli_query($connect,$sql);
mysqli_close($connect);

header('location:index.php');
?>