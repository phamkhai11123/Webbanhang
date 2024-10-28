<p>Liet ke don hang</p>
<?php
    $sql_lietke_dh = "SELECT * FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang=tbl_dangky.id_dangky
     ORDER BY tbl_cart.id_cart DESC";
    $query_lietke_dh = mysqli_query($conn,$sql_lietke_dh);
?>
<table border="1" width="100%" style="border-collapse=collapse;">
      
    <tr class="border border-dark">
        <td>ID</td>
        <td>Mã đơn hàng</td>
        <td>Tên khách hàng</td>
        <td>Địa chỉ</td>
        <td>Email</td>
        <td>Số điện thoại</td>
        <td>Quản lý</td>
    </tr>
    <?php
        $i =0;
        while($row = mysqli_fetch_array($query_lietke_dh)){  $i++; ?>
            <tr>
        <td class="border border-dark"><?php echo $i ?></td>
        <td class="border border-dark"><?php echo $row['code_cart'] ?></td>  
        <td class="border border-dark"><?php echo $row['tenkhachhang'] ?></td> 
        <td class="border border-dark"><?php echo $row['diachi'] ?></td> 
        <td class="border border-dark"><?php echo $row['email'] ?></td> 
        <td class="border border-dark"><?php echo $row['sodienthoai'] ?></td> 
        <td class="border border-dark">
            <?php
            if($row['cart_status']==1){
            echo '<a href="modules/quanlydonhang/xuly.php?code='.$row['code_cart'].' ">Đơn hàng mới</a>';
            }else{
                echo "Đã xử lý";
            }
            ?>
        </td>
        <td>
            <a class="btn btn-primary" href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart']?>">Xem đơn hàng</a>
        </td>
    </tr>
       <?php }

    ?>
    
</table>
