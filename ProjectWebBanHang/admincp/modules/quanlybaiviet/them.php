<p>Thêm nghệ sĩ </p>
<table border="1" width="50%" style="border-collapse=collapse;">
    <form action="modules/quanlybaiviet/xuly.php" method="post" enctype="multipart/form-data">   
    <tr>
        <td>Tên nghệ sĩ</td>
        <td><input class="form-control" type="text" name="tenbaiviet" width="100%"></td>
    </tr>
    <tr>
        <td>Hình ảnh</td>
        <td><input class="form-control" type="file" name="hinhanh" width="100%"></td>
    </tr>
    <tr>
        <td>Tóm tắt</td>
        <td><textarea class="form-control" row="5" name="tomtat"></textarea></td>
    </tr>
    <tr>
        <td>Nội dung</td>
        <td><textarea class="form-control" row="5" name="noidung"></textarea></td>
    </tr>
    <tr>
        <td>Danh mục nghệ sĩ</td>
        <td><select class="form-control" name="danhmuc" id="">
            <?php 
            $sql_danhmuc = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
            $query_danhmuc = mysqli_query($conn,$sql_danhmuc);
            while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
            ?>
            <option value="<?php echo $row_danhmuc['id_baiviet'] ?>"><?php echo $row_danhmuc['tendanhmuc_baiviet'] ?></option>
           <?php } ?>
        </select></td>
    </tr>
    <tr>
        <td>Tinh trang</td>
        <td><select class="form-control" name="status" id="">
            <option value="1">Còn show</option>
            <option value="0">Hết show</option>
        </select></td>
    </tr>
    <tr>
        <td><input class="btn btn-primary" type="submit" name="thembaiviet" value="Thêm nghệ sĩ"></td>
    </tr>
    </form> 
</table>