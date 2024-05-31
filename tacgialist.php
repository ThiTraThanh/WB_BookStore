<?php
include "header.php";
include "slider.php";
include "class/TacGia_class.php";
?>
<?php
$TacGia = new TacGia;
$show_TacGia = $TacGia->show_TacGia() ;
?>
<style>
    td,th{
        padding: 10px;
    }
    .admin-content-right-cartegory_list{
        padding-right:100px;
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
                    <h1> Danh sách tác giả </h1>
                    <table style="padding: 15px">
                        <tr>
                            <th style="width:35px"> STT</th>
                            <th style="width:35px"> ID </th>
                            <th style="width:100px"> Danh mục </th>
                            <th style="width:50px"> Tùy biến </th>
                        </tr>
                        <?php
                        if($show_TacGia){$i=0;
                            while($result=$show_TacGia->fetch_assoc()) {$i++;
                        
                        ?>

                        <tr>
                            <td> <?php echo $i ?> </td> 
                            <td> <?php echo $result['maTacGia']?></td> 
                            <td> <?php echo $result['tenTacGia']?> </td>
                            <td> <a href="tacgiaedit.php?maTacGia=<?php echo $result ['maTacGia']?>"> Sửa </a> | <a href="tacgiadelete.php?maTacGia=<?php echo $result ['maTacGia']?>"> Xóa </a></td>
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
