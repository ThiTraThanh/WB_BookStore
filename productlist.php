
<?php
include "header.php";
include "slider.php";
include "class/product_class.php";
?>
<?php
$product= new product;
$show_product = $product->show_product($_POST,$_FILES) ;
if ($_SERVER['REQUEST_METHOD']=== 'POST'){ 
    // echo '<pre>';
    // echo print_r($_FILES['product_img_desc']['name']);
    // echo '</pre>';
   $show_product = $product  -> show_product($_POST,$_FILES);
}
?>
<style>
    td,th{
        padding: 10px;
    }
    .admin-content-right-cartegory_list{
        padding-right:40px;
        padding-left:40px;
    }
    h1{
        text-align:center;
    }
    tr:nth-child(even) {
        background-color:rgb(212, 226, 245);
    }
</style>
<div class="admin-content-right">
<div class="admin-content-right-cartegory_list">
                    <h1> Danh sách Sản phẩm </h1>
                    <table style="padding: 15px">
                        <tr>
                            <th style="width:35px"> STT</th>
                            <th style="width:35px"> ID </th>
                            <th style="width:190px"> Danh mục </th>
                            <th style="width:190px"> Loại sản phẩm </th>
                            <th style="width:190px"> Tên nhà xuất bản </th>
                            <th style="width:190px"> Tên tác giả </th>
                            <th style="width:190px"> Sản phẩm </th>
                            <th style="width:100px"> Tùy biến </th>
                        </tr>
                        <?php
                        if($show_product){$i=0;
                            while($result=$show_product->fetch_assoc()) {$i++;
                        
                        ?>
                        <tr>
                        <td> <?php echo $i ?> </td> 
                            <td> <?php echo $result['brand_id']?></td> 
                            <td> <?php echo $result['cartegory_name']?></td> 
                            <td> <?php echo $result['brand_name']?> </td>
                            <td> <?php echo $result['nxb_name']?> </td>
                            <td> <?php echo $result['tacgia_name']?> </td>
                            <td> <?php echo $result['product_name']?> </td>
                            <td> <a href="productedit.php?product_id=<?php echo $result ['product_id']?>"> Sửa </a> | <a href="productdelete.php?product_id=<?php echo $result ['product_id']?>"> Xóa </a></td>
                        </tr>
                        <?php
                            }
                        }
                        ?>
                    </table>
                </div>
            </div>
            </div>
        </section>
    </body>
</html>
