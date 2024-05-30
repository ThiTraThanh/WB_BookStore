<?php
include "header.php";
include "slider.php";
include "class/brand_class.php";
?>
<?php
$brand = new brand;
$show_brand = $brand->show_brand() ;
?>
<style>
    th,td{
        padding: 10px;
    }
    .admin-content-right-cartegory_list{
        padding-right:90px;
        padding-left: 100px;
    }
    tr:nth-child(even) {
        background-color:rgb(212, 226, 245);
    }
    h1{
        text-align:center;
    }
</style>
<div class="admin-content-right">
<div class="admin-content-right-cartegory_list">
                    <h1> Danh sách Loại sản phẩm </h1>
                    <table>
                        <tr>
                            <th style="width:35px"> STT</th>
                            <th style="width:35px"> ID </th>
                            <th style="width:200px"> Danh mục </th>
                            <th style="width:200px"> Loại sản phẩm </th>
                            <th style="width:100px"> Tùy biến </th>
                        </tr>
                        <?php
                        if($show_brand){$i=0;
                            while($result=$show_brand->fetch_assoc()) {$i++;
                        
                        ?>
                        <tr>
                            <td> <?php echo $i ?> </td> 
                            <td> <?php echo $result['brand_id']?></td> 
                            <td> <?php echo $result['cartegory_name']?></td> 
                            <td> <?php echo $result['brand_name']?> </td>
                            <td> <a href="brandedit.php?brand_id=<?php echo $result ['brand_id']?>"> Sửa </a> | <a href="branddelete.php?brand_id=<?php echo $result ['brand_id']?>"> Xóa </a></td>
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