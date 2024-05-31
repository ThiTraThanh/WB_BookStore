<?php
include "header.php";
include "slider.php";
include "class/cartegory_class.php";
?>
<?php
$LoaiSach= new LoaiSach;
if (!isset($_GET['maLoaiSach']) || $_GET['maLoaiSach']==NULL ){
    echo "<script>window.location = 'cartegorylist.php'</script>";
}
else {
    $maLoaiSach =  $_GET['maLoaiSach'];
}

    $get_cartegory = $LoaiSach -> get_cartegory($maLoaiSach);
    if($get_cartegory)
    {
        $result=$get_cartegory -> fetch_assoc();
    }
?>
<?php
$LoaiSach = new LoaiSach;
 if ($_SERVER['REQUEST_METHOD']=== 'POST'){
    $tenLoaiSach= $_POST['tenLoaiSach'];
    $update_cartegory = $LoaiSach -> update_cartegory($tenLoaiSach,$maLoaiSach);
 }
?>
<div class="admin-content-right">
                <div class="admin-content-right-cartegory_add">
                <h1> Thêm danh mục </h1>
                <form action="" method="POST">
                    <input required name ="tenLoaiSach" type="text" placeholder="Nhập tên danh mục " value="<?php echo $result['tenLoaiSach'] ?>">
                    <button type="submit">Sửa  </button> </form>
                </div>
            </div>
        </section>
    </body>
</html>
