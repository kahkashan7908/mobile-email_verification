<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success page</title>
    <style>
        h1{
            text-align: center;
            margin-top: 200px;
            color: green;
        }
        body{
            background-color:lightcyan;
        }
    </style>
</head>
<body>
<?php
    session_start();
    if (isset($_SESSION['IS_LOGIN'])){
        echo "<h1>Log in success..</h1>";

    }else{
        header('index.php');
        die();
    }
?>
</body>
</html>
