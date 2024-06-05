<?php
    if(isset($_GET['quanly'])){
        $tam = $_GET['quanly'];
    } else {
        $tam = '';
    }
    if($tam == 'danhmucsanpham'){
        include("main/danhmucsptong.php");
    } elseif($tam == 'giohang'){
        include("main/giohang.php");
    } elseif($tam == 'chitietsanpham'){
        include("main/chitietsanpham.php");
    } else {
        include("main/index.php");
    }
?>