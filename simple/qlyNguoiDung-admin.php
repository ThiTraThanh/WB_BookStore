<?php
// if(!defined('_CODE')) {
//     die('Từ chối truy cập');
// }
include 'connect.php';

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
    header('Location: dangnhap.php');
    exit;
}
if ($_SESSION['vaiTro'] != 1) {
    // Nếu không phải quản trị viên, chuyển hướng đến trang không có quyền truy cập
    header('Location: trangchu.php');
    exit;
}
$sql = ('SELECT * FROM nguoidung');
$result = $conn->query($sql);
$rows = $result->fetch_all();

echo '<pre>';
// print_r($rows);
echo '</pre>';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Trang chủ Vibook</title>
        <link rel="stylesheet" href="giaodien.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <!-- Thanh chuc nang -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-flex">
            <div class="container-start">
                <a class="logo" href="#">ViBook</a>
            </div>
            <div class="container-start-2">
                <div class="left">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">Quản lý người dùng</a>
                        <a href="#" class="list-group-item list-group-item-action">Quản lý quản trị viên</a>
                        <!-- <a href="#" class="list-group-item list-group-item-action">Quản lý danh mục sản phẩm</a> -->
                        <!-- <a href="#" class="list-group-item list-group-item-action">Quản lý sản phẩm</a> -->
                    </div>
                </div>
                <div class="right">
                    <!-- <h2>Danh sách người dùng</h2> -->
                    <!-- Hello chèn code giao diện chỗ này nhé anh em! -->
                     <div class="container">
                        <hr>
                        <h2>Quản lý người dùng</h2>
                        <table class="table-bordered" >
                            <thead>
                                <th>STT</th>
                                <th>Họ và tên</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Quyền quản trị</th>
                                <th width="5%">Thêm qtv</th>
                                <th width="5%">Xóa qtv</th>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($rows)):
                                    $count=0;
                                    foreach($rows as $row):
                                        // $maNguoiDung=$row['0'];
                                        // echo $tenDangNhap;
                                        $count++;

                                ?>
                                <tr>
                                <td><?php echo $count?></td>
                                <td><?php echo $row['3']?></td>
                                <td><?php echo $row['4']?></td>
                                <td><?php echo $row['5']?></td>
                                <td><?php  echo $row['10'] == 1? 'Quản trị viên': 'Người dùng' ?></td>
                                <td>
                                    <?php if ($row['10'] == 0): ?>
                                    <form method="POST" action="">
                                        <input type="hidden" name="maNguoiDung" value="<?php echo $row['0']; ?>">
                                        <input type="submit" name="btn-addQTV" value="Thêm">
                                    </form>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($row['10'] == 1): ?>
                                    <form method="POST" action="">
                                        <input type="hidden" name="maNguoiDung" value="<?php echo $row['0']; ?>">
                                        <input type="submit" name="btn-removeQTV" value="Xóa">
                                    </form>
                                    <?php endif; ?>
                                </td>
                                </tr>
                                <?php
                                    endforeach;
                                endif;
                                ?>
                            </tbody>
                        </table>
                     </div>
                </div>
            </div>
        <!-- Thông tin web -->
            <div class="thongtin">
                <h1>ViBook.com</h1>
                <p>Địa chỉ: Khu phố 6, Đường Tạ Quang Bửu, Phường Linh Trung, Thành phố Thủ Đức, Thành phố Hồ Chí Minh</p>
                <p>SĐT: 1900636468</p>
                <p>Email: vibookvn@gmail.com</p>
                <p>ViBook.com nhận đặt hàng trực tuyến và giao hàng tận nơi. KHÔNG hỗ trợ đặt mua và nhận hàng trực tiếp tại văn phòng cũng như tất cả Hệ Thống ViBook trên toàn quốc.</p>
            </div>
        </div>
    </body>
</html>





    <?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn-addQTV'])) {
        // Chuẩn bị câu lệnh SQL với mysqli
        $stmt = $conn->prepare("UPDATE nguoidung SET vaiTro = '1' WHERE maNguoiDung = ?");
        // Gắn giá trị tham số vào câu lệnh SQL
        $stmt->bind_param('s', $_POST['maNguoiDung']);
        // Thực thi câu lệnh
        $stmt->execute();
        // Đóng câu lệnh
        $stmt->close();  
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn-removeQTV'])) {
        // Chuẩn bị câu lệnh SQL với mysqli
        $stmt = $conn->prepare("UPDATE nguoidung SET vaiTro = '0' WHERE maNguoiDung = ?");
        // Gắn giá trị tham số vào câu lệnh SQL
        $stmt->bind_param('s', $_POST['maNguoiDung']);
        // Thực thi câu lệnh
        $stmt->execute();
        // Đóng câu lệnh
        $stmt->close();  
    }
    
    ?>

