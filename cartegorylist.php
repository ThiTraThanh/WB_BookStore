<?php
include "header.php";
include "slider.php";
include "class/cartegory_class.php";
?>
<?php
$LoaiSach = new LoaiSach;
$show_cartegory = $LoaiSach->show_cartegory() ;
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
                            <td> <?php echo $result['maLoaiSach']?></td> 
                            <td> <?php echo $result['tenLoaiSach']?> </td>
                            <td> <a href="cartegoryedit.php?maLoaiSach=<?php echo $result ['maLoaiSach']?>"> Sửa </a> | <a href="cartegorydelete.php?maLoaiSach=<?php echo $result ['maLoaiSach']?>"> Xóa </a></td>
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
