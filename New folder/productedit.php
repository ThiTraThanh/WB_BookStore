<?php
include "header.php";
include "slider.php";
include "class/product_class.php";
?>
<?php
$product= new product;
    $product_id =  $_GET['product_id'];
    $get_product = $product -> get_product($product_id);
    if($get_product)
    {
        $resultA=$get_product -> fetch_assoc();
    }
 if ($_SERVER['REQUEST_METHOD']=== 'POST'){
    $cartegory_id= $_POST['cartegory_id'];
    $brand_name= $_POST['brand_name'];
    $product_name= $_POST['product_name'];
    $update_product = $product -> update_product($cartegory_id,$brand_id,$product_name,$product_id);
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
                <form action="" method="POST" enctype="multipart/form-data">
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
                    <label for=""> Giá sản phẩm <span style="color:red;">* </span> </label> 
                    <input name="product_price" required type="text" placeholder="Giá sản phẩm">
                    <label for=""> Giá khuyến mãi <span style="color:red;">* </span> </label> 
                    <input name="product_price_new" required type="text" placeholder="Giá khuyến mãi" >
                    <label for=""> Mô tả sản phẩm <span style="color:red;">* </span> </label> 
                    <textarea name="product_desc" id="editor1" cols="30" rows="10" placeholder="Mô tả sản phẩm"> </textarea>
                    <lable for=""> Ảnh sản phẩm <span style="color:red ;">*</span></lable>
                    <input name="product_img" required type="file">
                    <lable for=""> Ảnh mô tả <span style="color:red ;">*</span></lable>
                    <input name="product_img_desc[]"required multiple type="file">
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