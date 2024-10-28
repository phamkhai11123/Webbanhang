<?php
    session_start();
    if(!isset($_SESSION['dangnhap'])){
        header("Location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admincp</title>
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
</head>
<body>
    <h3 class="title">Welcome to admin</h3>
    <div class="wrapper">
    <?php
            include('config/config.php');
            // include("modules/header.php");
            include("modules/menu.php");
            include("modules/main.php");
            // include("modules/footer.php");
        ?>
    </div>
    
</body>
</html>