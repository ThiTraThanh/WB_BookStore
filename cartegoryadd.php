<?php
include "header.php";
include "slider.php";
include "class/cartegory_class.php";
?>
<?php
$LoaiSach = new LoaiSach;
 if ($_SERVER['REQUEST_METHOD']=== 'POST'){
    $tenLoaiSach= $_POST['tenLoaiSach'];
    $insert_cartegory = $LoaiSach -> insert_cartegory($tenLoaiSach);
 }
?>
<div class="admin-content-right">
                <div class="admin-content-right-product_add">
                <h1> Thêm danh mục </h1>
                <form action="" method="POST">
                <label for=""> Nhập mã loại sách <span style="color:red;">* </span> </label>
                    <input name="maLoaiSach" required type="text" placeholder="Nhập mã loại sách ">
                <label for=""> Nhập tên loại sách <span style="color:red;">* </span> </label> 
                    <input name="tenLoaiSach" required type="text" placeholder="Nhập tên loại sách ">
                    <button type="submit"> Thêm </button> </form>
                </div>
            </div>
        </section>
    </body>
</html>
