<p>Thêm sản phẩm</p>
<table border="1" width="50%" style="border-collapse:collapse;">
    <form action="modules/quanlysp/xuly.php" method="post" enctype="multipart/form-data">   
    <tr>
        <td>Tên sản phẩm</td>
        <td><input class="form-control" type="text" name="tensp" width="100%"></td>
    </tr>
    <tr>
        <td>Mã sản phẩm </td>
        <td><input class="form-control" type="text" name="masp" width="100%"></td>
    </tr>
    <tr>
        <td>Hình ảnh</td>
        <td><input class="form-control" type="file" name="hinhanh" width="100%"></td>
    </tr>
    <tr>
        <td>Số lượng </td>
        <td><input class="form-control" type="text" name="soluong" width="100%"></td>
    </tr>
    <tr>
        <td>Giá </td>
        <td><input class="form-control" type="text" name="giasp" width="100%"></td>
    </tr>
    <tr>
        <td>Năm sản xuất:</td>
        <td><input class="form-control" type="text" name="tomtat"></input></td>
    </tr>
    <tr>
        <td>Thông tin</td>
        <td><textarea class="form-control" row="5" name="noidung"></textarea></td>
    </tr>
    <tr>
        <td>Danh mục </td>
        <td><select class="form-control" name="danhmuc" id="">
            <?php 
            $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
            $query_danhmuc = mysqli_query($conn,$sql_danhmuc);
            while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
            ?>
            <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
           <?php } ?>
        </select></td>
    </tr>
    <tr>
        <td>Tinh trang</td>
        <td><select class="form-control" name="status" id="">
            <option value="1">Còn hàng</option>
            <option value="0">Hết hàng</option>
        </select></td>
    </tr>
    <tr>
        <td><input type="submit" class="btn btn-primary" name="them-sp" value="Thêm sản phẩm"></td>
    </tr>
    </form> 
</table>