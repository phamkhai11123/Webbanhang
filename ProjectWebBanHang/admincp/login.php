<?php
    session_start();
    include("config/config.php");
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM tbl_admin WHERE `username` = '$username' AND `password` = '$password' LIMIT 1";
        $row = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($row);
        if($count > 0){
            $_SESSION['dangnhap'] = $username;
            header("Location:index.php");
        }else{
            echo "('Tai khoan mat khau khong dung .')";
            // header("Location:login.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: #f2f2f2;
        }
        .wrapper-login{
            width: 15%;
            margin: 0 auto;
        }
        table.table-login{
            width: 100%;
        }
        table.table-login tr td{
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class="wrapper-login">
        <form action=""  method="post">
        <table class="table-login" border="1" style="text-align: center; border-collapse:collapse ;">
            <tr>
                <td colspan="2"><h3>Dang nhap admin</h3></td>
            </tr>
            <tr>
                <td>Tai khoan</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Mat khau</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                
                <td colspan="2"><input type="submit" name="login" value="Dang nhap"></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>