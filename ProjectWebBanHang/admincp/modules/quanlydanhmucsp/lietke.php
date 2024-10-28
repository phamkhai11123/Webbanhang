<?php
    $sql_lietke = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
    $query_lietke = mysqli_query($conn,$sql_lietke);
?>
<p>Danh sách danh mục</p>
<table border="1" width="50%" style="border-collapse:collapse;">
      
    <tr class="border border-dark">
        <td>ID</td>
        <td>Tên danh mục</td>
        <td>Quản lý</td>
    </tr>
    <?php
        $i =0;
        while($row = mysqli_fetch_array($query_lietke)){  $i++; ?>
            <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tendanhmuc'] ?></td>   
        <td><a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc']?>"><i class="fa-solid fa-trash"></i></a>
         <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc']?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
    </tr>
       <?php }

    ?>
    
</table>
