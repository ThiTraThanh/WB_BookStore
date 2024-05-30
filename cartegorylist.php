<?php
include "header.php";
include "slider.php";
include "class/cartegory_class.php";
?>
<?php
$cartegory = new cartegory;
$show_cartegory = $cartegory->show_cartegory() ;
?>
<style>
    td,th{
        padding: 10px;
    }
    .admin-content-right-cartegory_list{
        padding-right:200px;
        padding-left:120px;
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
                    <h1> Danh sách danh mục </h1>
                    <table style="padding: 15px">
                        <tr>
                            <th style="width:35px"> STT</th>
                            <th style="width:35px"> ID </th>
                            <th style="width:160px"> Danh mục </th>
                            <th style="width:100px"> Tùy biến </th>
                        </tr>
                        <?php
                        if($show_cartegory){$i=0;
                            while($result=$show_cartegory->fetch_assoc()) {$i++;
                        
                        ?>

                        <tr>
                            <td> <?php echo $i ?> </td> 
                            <td> <?php echo $result['cartegory_id']?></td> 
                            <td> <?php echo $result['cartegory_name']?> </td>
                            <td> <a href="cartegoryedit.php?cartegory_id=<?php echo $result ['cartegory_id']?>"> Sửa </a> | <a href="cartegorydelete.php?cartegory_id=<?php echo $result ['cartegory_id']?>"> Xóa </a></td>
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