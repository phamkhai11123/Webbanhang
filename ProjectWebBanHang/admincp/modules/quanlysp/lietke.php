<?php
    $sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ";
    $query_lietke_sp = mysqli_query($conn,$sql_lietke_sp);
?>
<p>Danh sách sản phẩm</p>
<table border="1" width="100%" style=" border-collapse: collapse;">
    <tr class="border border-dark">
        <td class="border border-dark">ID</td>
        <td class="border border-dark">Tên sản phẩm</td>
        <td class="border border-dark">Hình ảnh</td>
        <td class="border border-dark">Giá sản phẩm</td>
        <td class="border border-dark">Số lượng</td>
        <td class="border border-dark">Danh mục</td>
        <td class="border border-dark">Ngày nhập</td>
        <td class="border border-dark">Địa điểm</td>
        <td class="border border-dark">Trạng thái</td>
        <td class="border border-dark">Quản lý</td>
    </tr>
    <?php
        $i =0;
        while($row = mysqli_fetch_array($query_lietke_sp)){  $i++; ?>
            <tr>
        <td class="border border-dark"><?php echo $i ?></td>
        <td class="border border-dark"><?php echo $row['tensanpham'] ?></td> 
        <td class="border border-dark"><img style="width:150px; height:100px" src="modules/quanlysp/upload_img/<?php echo $row['hinhanh'] ?>" alt=""> </td>
        <td class="border border-dark"><?php echo $row['giasp'] ?></td>
        <td class="border border-dark"><?php echo $row['soluong'] ?></td>
        <td class="border border-dark"><?php echo $row['tendanhmuc'] ?></td>
        <td class="border border-dark"><?php echo $row['tomtat'] ?></td>
        <td class="border border-dark"><?php echo $row['noidung'] ?></td>
        <td class="border border-dark"><?php if( $row['status']==1){
            echo "Còn hàng";
        }else{
            echo "Hết hàng";
        } ?></td>  

        <td class="border border-dark"><a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>"><i class="fa-solid fa-trash"></i></a>
         <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham']?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
    </tr>
       <?php }

    ?>
    
</table>
