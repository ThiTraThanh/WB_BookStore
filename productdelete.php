<?php
include "class/product_class.php";
$Sach = new Sach;
if (!isset($_GET['maSach']) || $_GET['maSach']==NULL ){
    echo "<script>window.location = 'productlist.php'</script>";
}
else {
    $maSach =  $_GET['maSach'];
}

    $delete_product = $Sach-> delete_product($maSach);

?>
