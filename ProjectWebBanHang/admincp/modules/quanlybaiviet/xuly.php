<?php
include('../../config/config.php');
    $tenbaiviet = $_POST['tenbaiviet'];
    
    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    $hinhanh = time().'_'.$hinhanh;

    $tomtat = $_POST['tomtat'];
    $noidung = $_POST['noidung'];
    $status = $_POST['status'];
    $danhmuc = $_POST['danhmuc'];
    if(isset($_POST['thembaiviet'])){
        $sql_them = "INSERT INTO `tbl_baiviet` 
                ( `tenbaiviet`, `hinhanh`,`tomtat`,`noidung`,`tinhtrang`,`id_danhmuc`) 
        VALUES ( '$tenbaiviet','$hinhanh','$tomtat','$noidung','$status','$danhmuc'); ";
        mysqli_query($conn,$sql_them);
        move_uploaded_file($hinhanh_tmp,'upload_img/'.$hinhanh);
        header('Location:../../index.php?action=quanlybaiviet&query=them');
    }elseif(isset($_POST['suabaiviet'])){
        // sua 
        if(!empty($_FILES['hinhanh']['name'])){
            move_uploaded_file($hinhanh_tmp,'upload_img/'.$hinhanh);
            $sql_sua = "UPDATE `tbl_baiviet`
             SET `tenbaiviet`='$tenbaiviet'
            ,`hinhanh`='$hinhanh' , `tomtat`='$tomtat' , `noidung`='$noidung' , `tinhtrang`='$status' , `id_danhmuc`='$danhmuc'
             WHERE `tbl_baiviet`.`id` = '$_GET[idbaiviet]'";
            
            // xoa hinh anh cu
            $sql = "SELECT * FROM `tbl_baiviet` WHERE  `tbl_baiviet`.`id` = '$_GET[idbaiviet]' LIMIT 1";
            $query = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($query)){
                unlink('upload_img/'.$row['hinhanh']);
            }
        }else{
            $sql_sua = "UPDATE `tbl_baiviet` 
            SET `tenbaiviet` = '$tenbaiviet', `tomtat` = '$tomtat', `noidung` = '$noidung', `id_danhmuc`='$danhmuc',`tinhtrang`='$status'
             WHERE `tbl_baiviet`.`id` = '$_GET[idbaiviet]'";
           
        }
        mysqli_query($conn,$sql_sua);
        header('Location:../../index.php?action=quanlybaiviet&query=them');
    }else{
        $id = $_GET['idbaiviet'];
        $sql = "SELECT * FROM tbl_baiviet WHERE  id = $id LIMIT 1";
        $query = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($query)){
        unlink('upload_img/'.$row['hinhanh']);
       }
        $sql_xoa = "DELETE FROM tbl_baiviet WHERE id = $id";
        mysqli_query($conn,$sql_xoa);
        header('Location:../../index.php?action=quanlybaiviet&query=them');
    }
?>