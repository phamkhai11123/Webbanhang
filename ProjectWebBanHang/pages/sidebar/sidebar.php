<div class="sidebar">
    <h4 style="text-align:center;">Danh mục sản phẩm</h4>
                <ul class="list-sidebar">
                     <?php
                      $sql_cate = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                      $query_cate = mysqli_query($conn,$sql_cate);
                      while($row = mysqli_fetch_array($query_cate)){
                     ?>
                    <li style="text-transform:uppercase;"><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>">
                        <?php echo $row['tendanhmuc'] ?></a></li>
                    <?php } ?>
                </ul>
                <!-- <h4 style="text-align:center;">Danh mục nghệ sĩ</h4> -->
                <!-- <ul class="list-sidebar">
                     <?php
                      $sql_cate = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
                      $query_cate = mysqli_query($conn,$sql_cate);
                      while($row = mysqli_fetch_array($query_cate)){
                     ?>
                    <li style="text-transform:uppercase;"><a href="index.php?quanly=danhmucbaiviet&id=<?php echo $row['id_baiviet'] ?>">
                        <?php echo $row['tendanhmuc_baiviet'] ?></a></li>
                    <?php } ?>
                </ul> -->
            </div>