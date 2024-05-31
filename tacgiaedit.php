<?php
include "header.php";
include "slider.php";
include "class/TacGia_class.php";
?>
<?php
$TacGia= new TacGia;
if (!isset($_GET['maTacGia']) || $_GET['maTacGia']==NULL ){
    echo "<script>window.location = 'TacGialist.php'</script>";
}
else {
    $maTacGia =  $_GET['maTacGia'];
}

    $get_TacGia = $TacGia -> get_TacGia($maTacGia);
    if($get_TacGia)
    {
        $result=$get_TacGia -> fetch_assoc();
    }
?>
<?php
$TacGia = new TacGia;
 if ($_SERVER['REQUEST_METHOD']=== 'POST'){
    $tenTacGia= $_POST['tenTacGia'];
    $update_TacGia = $TacGia -> update_TacGia($tenTacGia,$maTacGia);
 }
?>
<div class="admin-content-right">
                <div class="admin-content-right-cartegory_add">
                <h1> Thêm danh mục </h1>
                <form action="" method="POST">
                    <input required name ="tenTacGia" type="text" placeholder="Nhập tên tác giả " value="<?php echo $result['tenTacGia'] ?>">
                    <button type="submit">Sửa  </button> </form>
                </div>
            </div>
        </section>
    </body>
</html>
