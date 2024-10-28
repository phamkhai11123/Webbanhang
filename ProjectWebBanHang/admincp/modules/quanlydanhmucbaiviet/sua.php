<?php
    $sql_sua_danhmuc = "SELECT * FROM tbl_danhmucbaiviet WHERE id_baiviet = '$_GET[idbaiviet]' LIMIT 1";
    $query_sua_danhmuc = mysqli_query($conn,$sql_sua_danhmuc);
?>
<p>Sua danh muc bai viet</p>
<table border="1" width="50%" style="border-collapse=collapse;">
    <form action="modules/quanlydanhmucbaiviet/xuly.php?idbaiviet=<?php echo $_GET['idbaiviet'] ?>" method="post">  
        <?php
            while($dong = mysqli_fetch_array($query_sua_danhmuc)){
                ?>
    <tr>
        <td>
            Ten danh muc
        </td>
        <td><input class="form-control" type="text" value="<?php echo$dong['tendanhmuc_baiviet']?>" name="tendanhmucbaiviet" width="100%"></td>
    </tr>
    <tr>
        <td>Thu tu</td>
        <td><input class="form-control" type="text" value="<?php echo$dong['thutu']?>" name="thutu"></td>
    </tr>
    <tr>
        <td><input class="btn btn-primary" type="submit" name="suadanhmuc" value="Sua danh muc bai viet"></td>
    </tr>
           <?php }
        ?> 
    
    </form> 
</table>