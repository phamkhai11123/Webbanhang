<?php
include('../../config/config.php');
    $tenloaisp = $_POST['tendanhmuc'];
    $thutu = $_POST['thutu'];
    if(isset($_POST['btn-them'])){
        $sql_them = "INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) 
        VALUES (NULL, '$tenloaisp', '$thutu'); ";
        mysqli_query($conn,$sql_them);
        header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
    }elseif(isset($_POST['suadanhmuc'])){
        $sql_sua = "UPDATE `tbl_danhmuc` SET tendanhmuc='$tenloaisp',thutu='$thutu' WHERE id_danhmuc = '$_GET[iddanhmuc]'  ";
        mysqli_query($conn,$sql_sua);
        header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
    }else{
        $id = $_GET['iddanhmuc'];
        $sql_xoa = "DELETE FROM tbl_danhmuc WHERE id_danhmuc = '$id' ";
        mysqli_query($conn,$sql_xoa);
        header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
    }
?>