<?php
    $sql_lietke = "SELECT * FROM tbl_danhmucbaiviet ORDER BY thutu DESC";
    $query_lietke = mysqli_query($conn,$sql_lietke);
?>
<p></p>
<table border="1" width="50%" style="border-collapse=collapse;">
      
    <tr class="border border-dark">
        <td>ID</td>
        <td>Ten danh muc</td>
        <td>Quan ly</td>
    </tr>
    <?php
        $i =0;
        while($row = mysqli_fetch_array($query_lietke)){  $i++; ?>
            <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tendanhmuc_baiviet'] ?></td>   
        <td><a href="modules/quanlydanhmucbaiviet/xuly.php?idbaiviet=<?php echo $row['id_baiviet']?>"><i class="fa-solid fa-trash"></i></a>
         <a href="?action=quanlydanhmucbaiviet&query=sua&idbaiviet=<?php echo $row['id_baiviet']?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
    </tr>
       <?php }

    ?>
    
</table>
