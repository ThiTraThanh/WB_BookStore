<?php
include "header.php";
include "slider.php";
include "class/product_class.php";
?>
<?php
$Sach= new Sach;
    $maSach =  $_GET['maSach'];
    $get_product = $Sach -> get_product($maSach);
    if($get_product)
    {
        $resultA=$get_product -> fetch_assoc();
    }
 if ($_SERVER['REQUEST_METHOD']=== 'POST'){
    $maNXB= $_POST['maNXB'];
    $maTacGia= $_POST['maTacGia'];
    $Sach= $_POST['Sach'];
    $update_product = $Sach -> update_product($maNXB,$maTacGia,$Sach,$maSach);
 }
?>
<style>
    select {
        height: 30px;
        width: 200px;
    }

</style>
<div class="admin-content-right">
                <div class="admin-content-right-cartegory_add">
                <h1> Thêm sản phẩm </h1>
                <form div class="formproduct" action="" method="POST" enctype="multipart/form-data">
                    <label for=""> Nhập tên sản phẩm <span style="color:red;">* </span> </label> 
                    <input name="Sach" required type="text" placeholder="Nhập tên sản phẩm ">
                    <lable for=""> Chọn danh mục <span style="color:red;">*</span></label>
                    <select name="maLoaiSach" id="">
                        <option value="#">--Chọn--</option>
                        <?php 
                            $show_cartegory= $Sach -> show_cartegory();
                            if($show_cartegory){
                                while($result=$show_cartegory -> fetch_assoc()){
                        ?>
                        <option value="<?php echo $result['maLoaiSach']?>"><?php echo $result['tenLoaiSach'] ?>
                          
                            <?php
                                }}
                            ?>
                    </select>
                    <lable for=""> Chọn Nhà Xuất Bản <span style="color:red;">*</span></label>
                    <select name="maNXB" id="">
                        <option vaue="#">--Chọn--</option>
                        <?php 
                            $show_nxb= $Sach -> show_nxb();
                            if($show_nxb){
                                while($result=$show_nxb -> fetch_assoc()){
                        ?>
                        <option value="<?php echo $result['maNXB']?>"><?php echo $result['tenNXB'] ?>
                          
                            <?php
                                }}
                            ?>
                    </select>
                    <lable for=""> Chọn Tác Giả <span style="color:red;">*</span></label>
                    <select name="maTacGia" id="">
                        <option vaue="#">--Chọn--</option>
                        <?php 
                            $show_TacGia= $Sach -> show_TacGia();
                            if($show_TacGia){
                                while($result=$show_TacGia -> fetch_assoc()){
                        ?>
                        <option value="<?php echo $result['maTacGia']?>"><?php echo $result['tenTacGia'] ?>
                          
                            <?php
                                }}
                            ?>
                    </select>
                    <label for=""> Giá sản phẩm <span style="color:red;">* </span> </label> 
                    <input name="Gia" required type="text" placeholder="Giá sản phẩm">
                    <label for=""> Số lượng còn lại <span style="color:red;">* </span> </label> 
                    <input name="soLuongConLai" required type="text" placeholder="Giá sản phẩm">
                    <label for=""> Mô tả sản phẩm <span style="color:red;">* </span> </label> 
                    <textarea name="moTa" id="editor1" cols="30" rows="10" placeholder="Mô tả sản phẩm"> </textarea>
                    <lable for=""> Ảnh mô tả<span style="color:red ;">*</span></lable>
                    <input name="anhBia" required type="file">
                    <button type="submit"> Sửa </button> 
                </form>
                </div>
            </div>
        </section>
    </body>
    <script>
                CKEDITOR.replace( 'editor1', {
	filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
	filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
} );
            </script>
    
</html>
