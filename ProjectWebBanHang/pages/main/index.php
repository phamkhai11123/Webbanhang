<?php
    $sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc
     WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT 25";
    $query_pro = mysqli_query($conn,$sql_pro);
   
?>
<h3>Sản phẩm mới nhất </h3>
                <ul class="product-list">
                    <?php
                    while($row = mysqli_fetch_array($query_pro)){
                    ?>
                     <li>
                        <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">
                        <img src="admincp/modules/quanlysp/upload_img/<?php echo$row['hinhanh'] ?>" alt="">
                        <p class="title"> <?php echo$row['tensanpham'] ?></p>
                        <p class="price">Giá : <?php echo number_format($row['giasp']).' vnd' ?></p>
                        <p class="cate_product">Danh mục: <?php echo($row['tendanhmuc']) ?></p>
                        </a>
                    </li>
                    <?php } ?>
                    
                </ul> 