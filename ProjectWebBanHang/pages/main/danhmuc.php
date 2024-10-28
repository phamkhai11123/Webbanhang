<?php
    $sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc= $_GET[id] ORDER BY tbl_sanpham.id_sanpham DESC";
    $query_pro = mysqli_query($conn,$sql_pro);
    $sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc= $_GET[id] LIMIT 1";
    $query_cate = mysqli_query($conn,$sql_cate);
    $row_tit = mysqli_fetch_array($query_cate);
?>
<h3>Danh mục: <?php echo $row_tit['tendanhmuc'] ?> </h3>
                <ul class="product-list">
                    <?php
                    while($row_pro = mysqli_fetch_array($query_pro)){
                        ?>
                    <li>
                        <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham']?>">
                        <img style="width:180px;height:200px" src="admincp/modules/quanlysp/upload_img/<?php echo$row_pro['hinhanh'] ?>" alt="">
                        <p class="title"> <?php echo$row_pro['tensanpham'] ?></p>
                        <p class="price">Giá: <?php echo number_format($row_pro['giasp'] ).'vnd' ?></p>
                        <p class="">Số lượng: <?php echo $row_pro['soluong'] ?></p>
                        </a>
                        
                    </li>
                    <?php } ?>
                        
                </ul> 