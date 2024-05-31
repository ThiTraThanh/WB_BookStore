
<?php
include "header.php";
include "slider.php";
include "class/product_class.php";
?>
<?php
$Sach= new Sach;
$show_product = $Sach->show_product($_POST,$_FILES) ;
if ($_SERVER['REQUEST_METHOD']=== 'POST'){ 
    // echo '<pre>';
    // echo print_r($_FILES['product_img_desc']['name']);
    // echo '</pre>';
   $show_product = $Sach  -> show_product($_POST,$_FILES);
}
?>
<style>
    td,th{
        padding: 10px;
    }
    .admin-content-right-cartegory_list{
        padding-right:80px;
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
                            <th style="width:80px"> STT</th>
                            <th style="width:80px"> Mã danh mục </th>
                            <th style="width:80px"> Mã nhà xuất bản </th>
                            <th style="width:80px"> Mã tác giả </th>
                            <th style="width:80px"> Mã sản phẩm </th>
                            <th style="width:190px"> Sản phẩm </th>
                            <th style="width:100px"> Tùy biến </th>
                        </tr>
                        <?php
                        if($show_product){$i=0;
                            while($result=$show_product->fetch_assoc()) {$i++;
                        
                        ?>
                        <tr>
                        <td> <?php echo $i ?> </td> 
                            <td> <?php echo $result['maLoaiSach']?></td> 
                            <td> <?php echo $result['maNXB']?> </td>
                            <td> <?php echo $result['maTacGia']?> </td>
                            <td> <?php echo $result['maSach']?> </td>
                            <td> <?php echo $result['tenSach']?> </td>
                            <td> <a href="productedit.php?maSach=<?php echo $result ['maSach']?>"> Sửa </a> | <a href="productdelete.php?maSach=<?php echo $result ['maSach']?>"> Xóa </a></td>
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
