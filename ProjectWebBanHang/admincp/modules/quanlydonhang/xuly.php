<?php
    include('../../config/config.php');
    if(isset($_GET['code'])){
        $code_cart = $_GET['code'];
        $sql_update = "UPDATE tbl_cart SET cart_status=0 WHERE code_cart = $code_cart";
        $qery = mysqli_query($conn,$sql_update);
        header("Location:../../index.php?action=quanlydonhang&query=lietke"); 
    }
?>