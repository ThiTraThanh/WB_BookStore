<?php
include "header.php";
include "slider.php";
include "class/nxb_class.php";
?>
<?php
$nxb = new nxb;
 if ($_SERVER['REQUEST_METHOD']=== 'POST'){
    $tenNXB= $_POST['tenNXB'];
    $insert_nxb = $nxb -> insert_nxb($tenNXB);
 }
?>
<div class="admin-content-right">
                <div class="admin-content-right-product_add">
                <h1> Thêm Nhà Xuất Bản </h1>
                <form action="" method="POST">
                <label for=""> Nhập mã nhà xuất bản <span style="color:red;">* </span> </label>
                    <input name="maNXB" required type="text" placeholder="Nhập mã nhà xuất bản ">
                <label for=""> Nhập tên nhà xuất bản <span style="color:red;">* </span> </label> 
                    <input name="tenNXB" required type="text" placeholder="Nhập tên nhà xuất bản ">
                    <button type="submit"> Thêm </button> </form>
                </div>
            </div>
        </section>
    </body>
</html>
