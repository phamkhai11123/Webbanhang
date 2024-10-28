<?php
include('../../config/config.php');
    $tensp = $_POST['tensp'];
    $masp = $_POST['masp'];
    $soluong = $_POST['soluong'];

    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    $hinhanh = time().'_'.$hinhanh;
    
    $giasp = $_POST['giasp'];
    $tomtat = $_POST['tomtat'];
    $noidung = $_POST['noidung'];
    $status = $_POST['status'];
    $danhmuc = $_POST['danhmuc'];
    if(isset($_POST['them-sp'])){
        $sql_them = "INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`,`giasp`,`soluong`,`hinhanh`,`tomtat`,`noidung`,`status`,`id_danhmuc`) 
        VALUES (NULL, '$tensp', '$masp','$giasp','$soluong','$hinhanh','$tomtat','$noidung','$status','$danhmuc'); ";
        mysqli_query($conn,$sql_them);
        move_uploaded_file($hinhanh_tmp,'upload_img/'.$hinhanh);
        header('Location:../../index.php?action=quanlysp&query=them');
    }elseif(isset($_POST['sua-sp'])){
        if(!empty($_FILES['hinhanh']['name'])){
            move_uploaded_file($hinhanh_tmp,'upload_img/'.$hinhanh);
            $sql_sua = "UPDATE `tbl_sanpham` SET tensanpham='$tensp',masp='$masp',
            giasp='$giasp',soluong='$soluong',hinhanh='$hinhanh',tomtat='$tomtat',noidung='$noidung',`status`='$status',id_danhmuc=$danhmuc
             WHERE id_sanpham = '$_GET[idsanpham]'";
             // xoa hinh anh cu
             $sql = "SELECT * FROM tbl_sanpham WHERE  id_sanpham = '$_GET[idsanpham]' LIMIT 1";
            $query = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($query)){
                unlink('upload_img/'.$row['hinhanh']);
            }
        }else{
            $sql_sua ="UPDATE `tbl_sanpham` SET `tensanpham` = '$tensp', `masp` = '$masp', `giasp` = '$giasp', `soluong` = '$soluong',
             `tomtat` = '$tomtat', `noidung` = '$noidung',`status`='$status',id_danhmuc=$danhmuc
             WHERE `tbl_sanpham`.`id_sanpham` = '$_GET[idsanpham]'  ";
           
        }
        mysqli_query($conn,$sql_sua);
        header('Location:../../index.php?action=quanlysp&query=them');
    }else{
        $id = $_GET['idsanpham'];
        $sql = "SELECT * FROM tbl_sanpham WHERE  id_sanpham = $id LIMIT 1";
       $query = mysqli_query($conn,$sql);
       while($row = mysqli_fetch_array($query)){
        unlink('upload_img/'.$row['hinhanh']);
       }
        $sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham = $id ";
        mysqli_query($conn,$sql_xoa);
        header('Location:../../index.php?action=quanlysp&query=them');
    }
?>