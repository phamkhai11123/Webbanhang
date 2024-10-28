<?php
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM tbl_dangky WHERE `email` = '$email' AND `matkhau` = '$password' LIMIT 1";
        $row = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($row);
        if($count > 0){
            $row_data = mysqli_fetch_array($row);
            $_SESSION['dangky'] = $row_data['tenkhachhang'];
            $_SESSION['id_khachhang']= $row_data['id_dangky'];
            header("Location:index.php?quanly=giohang");
        }else{
            echo "('Tai khoan mat khau khong dung .')";
            // header("Location:login.php");
        }
    }
?>
<form class="login-form"  method="post">
        <table class="table-login" border="1" style="text-align: center; border-collapse:collapse ;">
            <tr>
                <td colspan="2"><h3>Đăng nhập</h3></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input class="form-control" type="text" name="email" Placeholder="Email..."></td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td><input class="form-control" type="password" name="password"></td>
            </tr>
            <tr>
                
                <td colspan="2"><input type="submit" class="btn btn-danger log-btn1" name="login" value="Đăng nhập"></td>
            </tr>
        </table>
    </form>