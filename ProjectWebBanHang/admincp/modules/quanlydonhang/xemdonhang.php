<p>Xem don hang</p>
<?php
    $code = $_GET['code'];
    $sql_lietke_dh = "SELECT * FROM tbl_cart_details,tbl_sanpham 
    WHERE tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham AND tbl_cart_details.code_cart = '$code'
     ORDER BY tbl_cart_details.id_cart_details  DESC";
    $query_lietke_dh = mysqli_query($conn,$sql_lietke_dh);
?>
<table border="1" width="100%" style="border-collapse=collapse;">
      
    <tr>
        <td>ID</td>
        <td>Ma don hang</td>
        <td>Ten san pham</td>
        <td>So luong</td>
        <td>Don gia</td>
        <td>Thanh tien</td>
 
    </tr>
    <?php
        $i =0;
        $tontien =0;
        while($row = mysqli_fetch_array($query_lietke_dh)){ 
            $tontien += $row['giasp']*$row['soluong'];
             $i++; ?>
            <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['code_cart'] ?></td>  
        <td><?php echo $row['tensanpham'] ?></td> 
        <td><?php echo $row['soluong'] ?></td> 
        <td><?php echo $row['giasp'] ?></td> 
        <td><?php echo $row['giasp']*$row['soluong']." vnd" ?></td> 
        
    </tr>
       <?php }

    ?>
    <tr>
    <td coldspan="6">
            <p>Tong tien: <?php echo $tontien." vnd"; ?></p>
        </td>
    </tr>
</table>
