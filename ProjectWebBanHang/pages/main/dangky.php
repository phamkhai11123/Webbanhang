<?php
    if(isset($_POST['dangky'])){
        $hovaten = $_POST['hovaten'];
        $email = $_POST['email'];
        $dienthoai = $_POST['dienthoai'];
        $diachi = $_POST['diachi'];
        $matkhau = $_POST['matkhau'];
        $sql_dangky = mysqli_query($conn,"INSERT INTO `tbl_dangky` (`id_dangky`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `sodienthoai`)
         VALUES (NULL, '$hovaten', '$email', '$diachi', '$matkhau', '$dienthoai') ");
         if($sql_dangky){
            echo "Ban da dang ky thanh cong";
            $_SESSION['dangky']= $hovaten;
            $_SESSION['id_khachhang'] = mysqli_insert_id($conn);
            header("Location:index.php?quanly=giohang");
         }
    }
?>
<p class="qwe">Đăng ký</p>
<form class="register-form" method="post">
<table  style="width:100%;">
    <tr>
        <td>Họ và tên</td>
        <td><input class="form-control" type="text" size="80" name="hovaten"></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input class="form-control" type="text" size="80" name="email"></td>
    </tr>
    <tr>
        <td>Điện thoại</td>
        <td><input class="form-control" type="text" size="80" name="dienthoai"></td>
    </tr>
    <tr>
        <td>Địa chỉ</td>
        <td><input class="form-control" type="text" size="80" name="diachi"></td>
    </tr>
    <tr>
        <td>Mật khẩu</td>
        <td><input class="form-control" type="text" size="80" name="matkhau"></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" id="dangky" class="btn btn-danger"
         name="dangky" value="Đăng ký">
         <a class="btn btn-primary" href="index.php?quanly=dangnhap">Đăng nhập</a>
        </td>
       
    </tr>
</table>
</form>