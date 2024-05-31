<?php
include "class/nxb_class.php";
$nxb = new nxb;
if (!isset($_GET['maNXB']) || $_GET['maNXB']==NULL ){
    echo "<script>window.location = 'nxblist.php'</script>";
}
else {
    $maNXB =  $_GET['maNXB'];
}

    $delete_nxb = $nxb -> delete_nxb($maNXB);

?>
