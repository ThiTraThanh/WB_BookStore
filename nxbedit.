<?php
include "header.php";
include "slider.php";
include "class/nxb_class.php";
?>
<?php
$nxb= new nxb;
if (!isset($_GET['maNXB']) || $_GET['maNXB']==NULL ){
    echo "<script>window.location = 'nxblist.php'</script>";
}
else {
    $maNXB =  $_GET['maNXB'];
}

    $get_nxb = $nxb -> get_nxb($maNXB);
    if($get_nxb)
    {
        $result=$get_nxb -> fetch_assoc();
    }
?>
<?php
$nxb = new nxb;
 if ($_SERVER['REQUEST_METHOD']=== 'POST'){
    $tenNXB= $_POST['tenNXB'];
    $update_nxb = $nxb -> update_nxb($tenNXB,$maNXB);
 }
?>
<div class="admin-content-right">
                <div class="admin-content-right-cartegory_add">
                <h1> Thêm danh mục </h1>
                <form action="" method="POST">
                    <input required name ="tenNXB" type="text" placeholder="Nhập tên danh mục " value="<?php echo $result['tenNXB'] ?>">
                    <button type="submit">Sửa  </button> </form>
                </div>
            </div>
        </section>
    </body>
</html>
