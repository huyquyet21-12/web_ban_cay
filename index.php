<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./font/fontawesome-free-6.4.2-web/css/all.min.css">
    <style type="text/css">
        #general{
            margin: 0;
            padding: 0;
            box-sizing: border-box; 
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            scroll-behavior: smooth;
        }
        #header {
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
    
    <div id="general">
        <?php require_once 'header.php'; ?>

        <?php require_once 'middle.php';?>

        
    </div>
</body>
</html>