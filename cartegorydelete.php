<?php
include "class/cartegory_class.php";
$LoaiSach = new LoaiSach;
if (!isset($_GET['maLoaiSach']) || $_GET['maLoaiSach']==NULL ){
    echo "<script>window.location = 'cartegorylist.php'</script>";
}
else {
    $maLoaiSach =  $_GET['maLoaiSach'];
}

    $delete_cartegory = $LoaiSach -> delete_cartegory($maLoaiSach);

?>
