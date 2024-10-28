
<?php
    $sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc AND 
    tbl_sanpham.id_sanpham = '$_GET[id]' LIMIT 1";
    $query_chitiet = mysqli_query($conn,$sql_chitiet);
    while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<p class="abc" style="margin:10px 40px;">Chi tiết</p>
<div class="wrapper-chitiet">

    <div class="hinhanhsp">
        <img style="width:400px;height:300px;" src="admincp/modules/quanlysp/upload_img/<?php
       echo $row_chitiet['hinhanh'] ?>" alt="">
    </div>
        <form action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>" method="post">
        <div class="chitietsp">
            <p class="title"> <?php echo$row_chitiet['tensanpham'] ?></p>
            <p class="price">Giá: <?php echo number_format($row_chitiet['giasp']).'vnd' ?></p>
            <p class="cate_product">Danh mục: <?php echo($row_chitiet['tendanhmuc']) ?></p>
             <p class="tomtat">Tình trạng: <?php
                if($row_chitiet['status']==1){
                    echo"Còn hàng";
                }else{
                    echo "Hết hàng";
                }
              ?> </p> 
             <p class="tomtat">Thông tin: <?php echo($row_chitiet['noidung']) ?> </p> 
            <p><input type="submit" class="btn btn-danger" name="themgiohang" value="Thêm vào giỏ hàng"></p>
        </div>
        </form>
    
</div>
<?php
    }
?>