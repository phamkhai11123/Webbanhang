<?php
    if(isset($_POST['timkiem'])){
        $tukhoa = $_POST['tukhoa'];
    }else{
        $tukhoa = "";
    }
    $sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc= tbl_danhmuc.id_danhmuc AND tensanpham LIKE '%".$tukhoa."%'  ";
    $query_pro = mysqli_query($conn,$sql_pro);
   
?>
<h3>Kết quả tìm kiếm</h3>
                <ul class="product-list">
                    <?php
                    while($row = mysqli_fetch_array($query_pro)){
                    ?>
                     <li>
                        <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">
                        <img style="width:180px;height:200px" src="admincp/modules/quanlysp/upload_img/<?php echo$row['hinhanh'] ?>" alt="">
                        <p class="title"><?php echo$row['tensanpham'] ?></p>
                        <p class="price">Giá vé : <?php echo number_format($row['giasp']).',000 vnd' ?></p>
                        <p class="cate_product">Danh mục: <?php echo($row['tendanhmuc']) ?></p>
                        </a>
                    </li>
                    <?php } ?>
                    
                </ul> 