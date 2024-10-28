
<?php
    $sql_bv = "SELECT * FROM `tbl_baiviet` WHERE `tbl_baiviet`.`id` = '$_GET[id]' LIMIT 1";
    $query_bv = mysqli_query($conn,$sql_bv);
    $query_bv_all = mysqli_query($conn,$sql_bv);
    $row_title_bv = mysqli_fetch_array($query_bv);
?>
<h3>Nghệ sĩ:<?php echo $row_title_bv['tenbaiviet'] ?> </h3>
                <ul class="singer">
                    <?php
                    while($row_bv = mysqli_fetch_array($query_bv_all)){
                        ?>
                    <li>
                       <!-- <h4><?php echo$row_bv['tenbaiviet']; ?></h4> -->
                        <img src="admincp/modules/quanlybaiviet/upload_img/<?php echo$row_bv['hinhanh'] ?>" alt="">
                        <!-- <p class="title"> <?php echo$row_bv['tomtat']; ?></p> -->
                        <p class="title"> <?php echo$row_bv['noidung']; ?></p>
                    </li>
                    <?php } ?>
                        
                </ul> 