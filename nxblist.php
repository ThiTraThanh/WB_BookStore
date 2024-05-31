<?php
include "header.php";
include "slider.php";
include "class/nxb_class.php";
?>
<?php
$nxb = new nxb;
$show_nxb = $nxb->show_nxb() ;
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
                    <h1> Danh sách Nhà Xuất Bản </h1>
                    <table style="padding: 15px">
                        <tr>
                            <th style="width:35px"> STT</th>
                            <th style="width:35px"> ID </th>
                            <th style="width:100px"> Danh mục </th>
                            <th style="width:50px"> Tùy biến </th>
                        </tr>
                        <?php
                        if($show_nxb){$i=0;
                            while($result=$show_nxb->fetch_assoc()) {$i++;
                        
                        ?>

                        <tr>
                            <td> <?php echo $i ?> </td> 
                            <td> <?php echo $result['maNXB']?></td> 
                            <td> <?php echo $result['tenNXB']?> </td>
                            <td> <a href="nxbedit.php?maNXB=<?php echo $result ['maNXB']?>"> Sửa </a> | <a href="nxbdelete.php?maNXB=<?php echo $result ['maNXB']?>"> Xóa </a></td>
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
