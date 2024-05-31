<?php
include "class/TacGia_class.php";
$TacGia = new TacGia;
if (!isset($_GET['maTacGia']) || $_GET['maTacGia']==NULL ){
    echo "<script>window.location = 'TacGialist.php'</script>";
}
else {
    $maTacGia =  $_GET['maTacGia'];
}

    $delete_TacGia = $TacGia -> delete_TacGia($maTacGia);

?>
