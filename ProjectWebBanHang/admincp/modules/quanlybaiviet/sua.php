<?php
    $sql_sua_bv = "SELECT * FROM tbl_baiviet WHERE id = '$_GET[idbaiviet]' LIMIT 1";
    $query_sua_bv = mysqli_query($conn,$sql_sua_bv);
?>
<p>Sua bai viet</p>
<table border="1" width="100%" style="border-collapse=collapse;">
    <?php
        while($row = mysqli_fetch_array($query_sua_bv)){
    ?>
    <form method="post" action="modules/quanlybaiviet/xuly.php?idbaiviet=<?php echo $row['id'] ?>"  enctype="multipart/form-data">   
    <tr>
        <td>Tên nghệ sĩ</td>
        <td><input class="form-control" type="text" name="tenbaiviet" value="<?php echo$row['tenbaiviet'] ?>" width="100%"></td>
    </tr>
   
    <tr>
        <td>Hình ảnh</td>
        <td><input type="file" name="hinhanh" width="100%">
        <img style="width:150px; height:100px;" src="modules/quanlybaiviet/upload_img/<?php echo$row['hinhanh']?>" alt=""></td>
    </tr>
    <tr>
        <td>Tom tat</td>
        <td><textarea class="form-control" row="5" name="tomtat"><?php echo$row['tomtat'] ?></textarea></td>
    </tr>
    <tr>
        <td>Noi dung</td>
        <td><textarea class="form-control" row="5" name="noidung" ><?php echo$row['noidung'] ?></textarea></td>
    </tr>
    <tr>
        <td>Danh muc bai viet</td>
        <td><select class="form-control" name="danhmuc" id="">
            <?php 
            $sql_danhmuc = "SELECT * FROM tbl_danhmucbaiviet";
            $query_danhmuc = mysqli_query($conn,$sql_danhmuc);
            
            while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                if($row_danhmuc['id_baiviet'] == $row['id_danhmuc']){
            ?>
            <option selected value="<?php echo $row_danhmuc['id_baiviet'] ?>"><?php echo $row_danhmuc['tendanhmuc_baiviet'] ?></option>
           <?php }else{ ?>
             <option value="<?php echo $row_danhmuc['id_baiviet'] ?>"><?php echo $row_danhmuc['tendanhmuc_baiviet'] ?></option>
          <?php 
            } 
            ?> 
            <?php
            }
            ?>
        </select></td>
    </tr>
    <tr>
        <td>Tinh trang</td>
        <td><select class="form-control" name="status" id="">
            <?php 
            if($row['status']==1){ ?>
                <option value="1" selected>Còn show</option>
                <option value="0">Hết show</option>
           <?php }else{
 ?> 
    <option value="1" >Còn show</option>
    <option value="0" selected>Hết show</option>
    <?php       
     }
         ?>   
        </select></td>
    </tr>
    <tr>
        <td><input type="submit" class="btn btn-primary" name="suabaiviet" value="Sửa thông tin"></td>
    </tr>
    <?php }
    ?>
    </form> 
</table>