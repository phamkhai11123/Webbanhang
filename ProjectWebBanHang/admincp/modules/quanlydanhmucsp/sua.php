<?php
    $sql_sua = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc = '$_GET[iddanhmuc]' LIMIT 1";
    $query_sua = mysqli_query($conn,$sql_sua);
?>
<p>Sửa danh mục</p>
<table border="1" width="50%" style="border-collapse=collapse;">
    <form action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>" method="post">  
        <?php
            while($dong = mysqli_fetch_array($query_sua)){
                ?>
    <tr>
        <td>
            Ten danh muc
        </td>
        <td><input type="text" value="<?php echo$dong['tendanhmuc']?>" name="tendanhmuc" width="100%"></td>
    </tr>
    <tr>
        <td>Thu tu</td>
        <td><input type="text" value="<?php echo$dong['thutu']?>" name="thutu"></td>
    </tr>
    <tr>
        <td><input type="submit" name="suadanhmuc" value="Sua danh muc"></td>
    </tr>
           <?php }
        ?> 
    
    </form> 
</table>