
<?php
    $sql_bv = "SELECT * FROM `tbl_baiviet` WHERE `tbl_baiviet`.`id_danhmuc` = '$_GET[id]' ORDER BY `tbl_baiviet`.`id` DESC";
    $query_bv = mysqli_query($conn,$sql_bv);
    $sql_cate = "SELECT * FROM `tbl_danhmucbaiviet` WHERE `tbl_danhmucbaiviet`.`id_baiviet` = '$_GET[id]' LIMIT 1";
    $query_cate = mysqli_query($conn,$sql_cate);
    $row_tit = mysqli_fetch_array($query_cate);
?>
<h3><?php echo $row_tit['tendanhmuc_baiviet'] ?> </h3>
                <ul class="cate-singer">
                    <?php
                    while($row_pro = mysqli_fetch_array($query_bv)){
                        ?>
                    <li>
                        <a href="index.php?quanly=baiviet&id=<?php echo $row_pro['id']; ?>">
                        <img  src="admincp/modules/quanlybaiviet/upload_img/<?php echo$row_pro['hinhanh'] ?>" alt="">
                        <p class="name"> <?php echo$row_pro['tenbaiviet'] ?></p>
                        <!-- <p class="title"> <?php echo$row_pro['tomtat'] ?></p> -->
                        <p class="title">Danh mục: <?php echo $row_tit['tendanhmuc_baiviet'] ?></p>
                        </a>
                        
                    </li>
                    <?php } ?>
                        
                </ul> 