<?php
include "header.php";
include "slider.php";
include "class/tacgia_class.php";
?>
<?php
$tacgia = new tacgia;
 if ($_SERVER['REQUEST_METHOD']=== 'POST'){
    $tenTacGia= $_POST['tenTacGia'];
    $insert_tacgia = $tacgia -> insert_tacgia($tenTacGia);
 }
?>
    <div class="admin-content-right">
        <div class="admin-content-right-product_add">
                <h1> Thêm Tác Giả </h1>
                <form action="" method="POST">
                <label for=""> Nhập mã tác giả <span style="color:red;">* </span> </label>
                    <input name="maTacGia" required type="text" placeholder="Nhập mã tác giả ">
                <label for=""> Nhập tên tác giả <span style="color:red;">* </span> </label> 
                    <input name="tenTacGia" required type="text" placeholder="Nhập tên tác giả ">
                    <button type="submit"> Thêm </button> </form>
                </div>
            </div>
        </section>
    </body>
</html>
