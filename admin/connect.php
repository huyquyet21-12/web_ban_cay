<?php 

$server = 'localhost';
$user = 'root';
$password = '';
$database = 'web_ban_cay';

$connect = mysqli_connect($server,$user,$password,$database);
mysqli_set_charset($connect,'utf8');

?>