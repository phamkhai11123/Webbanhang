<?php
    $conn = new mysqli('localhost','root','','webbanhang');
    if($conn -> connect_errno){
        echo " Ket noi that bai ";
        exit();
    }
    
?>