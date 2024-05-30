<?php
include "header.php";
include "slider.php";
include "class/product_class.php";

?>
<?php
$product= new product;
if ($_SERVER['REQUEST_METHOD']=== 'POST'){ 
    // echo '<pre>';
    // echo print_r($_FILES['product_img_desc']['name']);
    // echo '</pre>';
   $insert_product = $product  -> insert_product($_POST,$_FILES);
}
?>
<div class="admin-content-right">
<div class="admin-content-right-product_add">
                <h1 style="padding-bottom: 15px;"> Thêm sản phẩm </h1>
                <form div class="formproduct" action="" method="POST" enctype="multipart/form-data">
                    <label for=""> Nhập tên sản phẩm <span style="color:red;">* </span> </label> 
                    <input name="product_name" required type="text" placeholder="Nhập tên sản phẩm ">
                    <lable for=""> Chọn danh mục <span style="color:red;">*</span></label>
                    <select name="cartegory_id" id="">
                        <option v aue="#">--Chọn--</option>
                        <?php 
                            $show_cartegory= $product -> show_cartegory();
                            if($show_cartegory){
                                while($result=$show_cartegory -> fetch_assoc()){
                        ?>
                        <option value="<?php echo $result['cartegory_id']?>"><?php echo $result['cartegory_name'] ?>
                          
                            <?php
                                }}
                            ?>
                    </select>
                    <lable for=""> Chọn loại sản phẩm <span style="color:red;">*</span></label>
                    <select name="brand_id" id="">
                        <label for=""> Chọn loại sản phẩm <span style="color:red;">* </span> </label> 
                        <option vaue="#">--Chọn--</option>
                        <?php 
                            $show_brand= $product -> show_brand();
                            if($show_brand){
                                while($result=$show_brand -> fetch_assoc()){
                        ?>
                        <option value="<?php echo $result['brand_id']?>"><?php echo $result['brand_name'] ?>
                          
                            <?php
                                }}
                            ?>
                    </select>
                    <label for=""> Tên nhà xuất bản <span style="color:red;">* </span> </label> 
                    <input name="nxb_name" required type="text" placeholder="Nhà xuất bản">
                    <label for=""> Tên tác giả <span style="color:red;">* </span> </label> 
                    <input name="tacgia_name" required type="text" placeholder="Tên tác giả">
                    <label for=""> Giá sản phẩm <span style="color:red;">* </span> </label> 
                    <input name="product_price" required type="text" placeholder="Giá sản phẩm">
                    <label for=""> Mô tả sản phẩm <span style="color:red;">* </span> </label> 
                    <textarea name="product_desc" id="editor1" cols="30" rows="10" placeholder="Mô tả sản phẩm"> </textarea>
                    <lable for=""> Ảnh sản phẩm <span style="color:red ;">*</span></lable>
                    <input name="product_img" required type="file">
                    <lable for=""> Ảnh mô tả <span style="color:red ;">*</span></lable>
                    <input name="product_img_desc[]"required multiple type="file">
                    <button type="submit"> Thêm </button> 
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