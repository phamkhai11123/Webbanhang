
<?php 
        if(isset($_SESSION['dangky'])){
          ?> 
       <?php 
      }else{
        ?>
    <?php }
      ?>

<table class="cart-detail table" width="100%">
  <tr>
    <th>ID</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Số lượng</th>
    <th>Giá</th>
    <th>Thành tiền</th>
    <th>Quản lý</th>
  </tr>
<?php  if(isset($_SESSION['cart'])){ 
    $tongtien=0;
    $i=0;
    foreach($_SESSION['cart'] as $cart_item){
        $thanhtien = $cart_item['soluong']*$cart_item['giasp'];
        $i++;
        $tongtien+=$thanhtien;
    ?>
  <tr style="text-align:left;">
    <td><?php  echo $i;?></td>
    <td><?php  echo $cart_item['tensanpham'];?></td>
    <td><img style="width:150px; height:100px;" src="admincp/modules/quanlysp/upload_img/<?php  echo $cart_item['hinhanh'];?>"  alt=""> </td>
    <td>
        <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>">
          <i class="fa-solid fa-minus"></i></a>
        <?php  echo $cart_item['soluong'];?>
        <a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>">
        <i class="fa-solid fa-plus"></i>
        </a>
    </td>
    <td><?php  echo number_format($cart_item['giasp']);?></td>
    <td><?php echo number_format($thanhtien) ?></td>
    <td style="text-decoration: none;"><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Xóa</a></td>
  </tr>
  <?php
    } ?>

    <tr class="b-n">
    <td colspan="3">
     <p class="total">Tổng tiền: <?php echo number_format($tongtien);?> </p> 
      <a class="btn btn-secondary del-btn" href="pages/main/themgiohang.php?xoatatca=1">Xóa tất cả</a> 
      <!-- <div style="clear:both;"></div> -->
      <?php 
        if(isset($_SESSION['dangky'])){
          ?> 
    <p><a class="btn btn-danger book-btn" href="pages/main/thanhtoan.php">Than toán</a></p>
       <?php 
      }else{
        ?>
<p><a class="btn btn-primary log-btn" href="index.php?quanly=dangnhap">Đăng nhập để đặt hàng </a></p>
    <?php }
      ?>
 
  </td>

    </tr> 
    <?php
   }else{
    ?>
    <tr>
    <td colspan="5"><p>Chưa có sản phẩm nào được chọn</p></td>
    </tr>
    <?php }
  ?>
</table>