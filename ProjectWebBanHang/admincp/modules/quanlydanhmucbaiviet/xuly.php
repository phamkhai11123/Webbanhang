<?php
include('../../config/config.php');
    $tenloaisp = $_POST['tendanhmucbaiviet'];
    $thutu = $_POST['thutu'];
    if(isset($_POST['themdanhmucbaiviet'])){
        $sql_them = "INSERT INTO `tbl_danhmucbaiviet` ( `tendanhmuc_baiviet`, `thutu`) 
        VALUES ( '$tenloaisp', '$thutu'); ";
        mysqli_query($conn,$sql_them);
        header('Location:../../index.php?action=quanlydanhmucbaiviet&query=them');
    }elseif(isset($_POST['suadanhmuc'])){
        $sql_sua = "UPDATE `tbl_danhmucbaiviet` SET tendanhmuc_baiviet='$tenloaisp',thutu='$thutu' WHERE id_baiviet = '$_GET[idbaiviet]'  ";
        mysqli_query($conn,$sql_sua);
        header('Location:../../index.php?action=quanlydanhmucbaiviet&query=them');
    }else{
        $id = $_GET['idbaiviet'];
        $sql_xoa = "DELETE FROM tbl_danhmucbaiviet WHERE id_baiviet = '$id' ";
        mysqli_query($conn,$sql_xoa);
        header('Location:../../index.php?action=quanlydanhmucbaiviet&query=them');
    }
?>