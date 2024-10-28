<?php
    $sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
    $query_sua_sp = mysqli_query($conn,$sql_sua_sp);
?>
<p>Sửa sản phẩm</p>
<table border="1" width="100%" style="border-collapse:collapse;">
    <?php
        while($row = mysqli_fetch_array($query_sua_sp)){
    ?>
    <form method="post" action="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>"  enctype="multipart/form-data">   
    <tr>
        <td>Tên sản phẩm</td>
        <td><input class="form-control" type="text" name="tensp" value="<?php echo$row['tensanpham'] ?>" width="100%"></td>
    </tr>
    <tr>
        <td>Mã sản phẩm</td>
        <td><input type="text"  class="form-control" name="masp" value="<?php echo$row['masp'] ?>" width="100%"></td>
    </tr>
    <tr>
        <td>Hình ảnh</td>
        <td><input type="file"  name="hinhanh" width="100%">
        <img style="width:150px; height:100px;" src="modules/quanlysp/upload_img/<?php echo$row['hinhanh']?>" alt=""></td>
       
    </tr>
    <tr>
        <td>Số lượng</td>
        <td><input  class="form-control" type="text" name="soluong" value="<?php echo$row['soluong'] ?>" width="100%"></td>
    </tr>
    <tr>
        <td>Giá sản phẩm</td>
        <td><input  class="form-control" type="text" name="giasp" width="100%" value="<?php echo$row['giasp'] ?>" ></td>
    </tr>
    <tr>
        <td>Năm sản xuất:</td>
        <td><input  class="form-control" type="text" name="tomtat"><?php echo$row['tomtat'] ?></input></td>
    </tr>
    <tr>
        <td>Thông tin</td>
        <td><textarea  class="form-control" row="5" name="noidung" ><?php echo$row['noidung'] ?></textarea></td>
    </tr>
    <tr>
        <td>Danh mục </td>
        <td><select  class="form-control" name="danhmuc" id="">
            <?php 
            $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
            $query_danhmuc = mysqli_query($conn,$sql_danhmuc);
            while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                if($row_danhmuc['id_danhmuc']==$row['id_danhmuc']){
            ?>
            <option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
           <?php }else{ ?>
             <option  value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
          <?php 
            } 
            ?> 
            <?php
            }
            ?>
        </select></td>
    </tr>
    <tr>
        <td>Tình trạng</td>
        <td><select  class="form-control" name="status" id="">
            <?php 
            if($row['status']==1){ ?>
                <option value="1" selected>Còn vé</option>
                <option value="0">Hết vé</option>
           <?php }else{
 ?> 
    <option value="1" >Còn vé</option>
    <option value="0" selected>Hết vé</option>
    <?php       
     }
         ?>   
        </select></td>
    </tr>
    <tr>
        <td><input type="submit"  class="btn btn-primary" name="sua-sp" value="Sửa liveshow"></td>
    </tr>
    <?php }
    ?>
    </form> 
</table>