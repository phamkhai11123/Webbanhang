<?php
    if(isset($_GET['dangxuat']) && $_GET['dangxuat']==1){
        unset($_SESSION['dangky']);

    }
?>
<div class="header" style="justify-content: space-around; align-items: center;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsGADEsn5f_f6kL_WrtmS8GRHi1hc6tUT0Iw&s" style="width: 100px; height: 100px;" alt="">
        <form action="index.php?quanly=timkiem" method="post">
             <input class="form-control" type="text" name="tukhoa" Placeholder="Tìm kiếm sản phẩm">
                <input class="btn btn-warning" type="submit" value="Tìm kiếm" name="timkiem">
                </form>   
        <ul class="header_menu">
            
           <?php
                    if(isset($_SESSION['dangky'])){
                        ?>
                       
                        <li><p><?php echo $_SESSION['dangky']; ?></p> <a href="index.php?dangxuat=1">Đăng xuất</a></li>
                  <?php 
                 }else{
                     ?>
                 
                    <li class="aa"><a href="index.php?quanly=dangnhap">Đăng nhập</a></li>
                    <li class="aa"><a href="index.php?quanly=dangky">Đăng ký</a></li>
                <?php }
                ?>
                
           </ul>
                   
           
        </div>