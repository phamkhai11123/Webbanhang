<?php
    $sql_lietke_sp = "SELECT * FROM tbl_baiviet,tbl_danhmucbaiviet WHERE tbl_baiviet.id_danhmuc=tbl_danhmucbaiviet.id_baiviet 
    ORDER BY tbl_baiviet.id ";
    $query_lietke_sp = mysqli_query($conn,$sql_lietke_sp);
?>
<p>Danh sách nghệ sĩ</p>
<table border="1" width="100%" style="border-collapse=collapse;">
    <tr class="border border-dark">
        <td>ID</td>
        <td>Tên nghệ sĩ</td>
        <td>Hình ảnh</td>
        <td>Danh mục</td>
        <td>Tóm tắt</td>
        <!-- <td>Trang thai</td> -->
        <td>Quản lý</td>
    </tr>
    <?php
        $i =0;
        while($row = mysqli_fetch_array($query_lietke_sp)){  $i++; ?>
            <tr>
        <td class="border border-dark"><?php echo $i ?></td>
        <td class="border border-dark"><?php echo $row['tenbaiviet'] ?></td> 
        <td class="border border-dark"><img style="width:150px; height:100px" src="modules/quanlybaiviet/upload_img/<?php echo $row['hinhanh'] ?>" alt=""> </td>
        <td class="border border-dark"><?php echo $row['tendanhmuc_baiviet'] ?></td>
        <td class="border border-dark"><?php echo $row['tomtat'] ?></td>
        <!-- <td><?php if( $row['tinhtrang']==1){
            echo "Kich hoat";
        }else{
            echo "An";
        } ?></td>   -->

        <td class="border border-dark"><a href="modules/quanlybaiviet/xuly.php?idbaiviet=<?php echo $row['id']?>"><i class="fa-solid fa-trash"></i></a>
         <a href="?action=quanlybaiviet&query=sua&idbaiviet=<?php echo $row['id']?>&iddanhmuc=<?php echo $row['id_danhmuc']?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
    </tr>
       <?php }

    ?>
    
</table>
