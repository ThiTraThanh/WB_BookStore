<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "webbook";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$tenDangNhap = $_POST['tenDangNhap'];
$matKhau = $_POST['matKhau'];
$hoTen = $_POST['hoTen'];
$SDT = $_POST['SDT'];
$diaChi = $_POST['diaChi'];
$email = $_POST['email'];
$gioiTinh = $_POST['gioiTinh'];
$ngaySinh = $_POST['ngaySinh'];

// Kiểm tra xem tenDangNhap có tồn tại trong cơ sở dữ liệu không
$sql = "SELECT * FROM nguoidung WHERE tenDangNhap='$tenDangNhap'";
$result = $conn->query($sql);

if ($result) {
    if ($result->num_rows > 0) {
        // Nếu tồn tại, cập nhật thông tin
        $update_sql = "UPDATE nguoidung SET 
                        matKhau='$matKhau', 
                        hoTen='$hoTen', 
                        SDT='$SDT', 
                        diaChi='$diaChi', 
                        email='$email', 
                        gioiTinh='$gioiTinh', 
                        ngaySinh='$ngaySinh' 
                       WHERE tenDangNhap='$tenDangNhap'";
        
        if ($conn->query($update_sql) === TRUE) {
            $message = "Cập nhật thông tin thành công!";
            $message_type = "success";
        } else {
            $message = "Lỗi khi cập nhật thông tin: " . $conn->error;
            $message_type = "danger";
        }
    } else {
        $message = "Tên đăng nhập không tồn tại.";
        $message_type = "warning";
    }
} else {
    $message = "Lỗi truy vấn: " . $conn->error;
    $message_type = "danger";
}

// Đóng kết nối
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật tài khoản</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="alert alert-<?php echo $message_type; ?>" role="alert">
            <?php echo $message; ?>
        </div>
        <?php if ($message_type == "success") : ?>
            <div class="card">
                <div class="card-header">
                    Thông tin tài khoản của bạn
                </div>
                <div class="card-body">
                    <p><strong>Tên đăng nhập:</strong> <?php echo $tenDangNhap; ?></p>
                    <p><strong>Họ và tên:</strong> <?php echo $hoTen; ?></p>
                    <p><strong>Số điện thoại:</strong> <?php echo $SDT; ?></p>
                    <p><strong>Địa chỉ:</strong> <?php echo $diaChi; ?></p>
                    <p><strong>Email:</strong> <?php echo $email; ?></p>
                    <p><strong>Giới tính:</strong> <?php echo $gioiTinh; ?></p>
                    <p><strong>Ngày sinh:</strong> <?php echo $ngaySinh; ?></p>
                </div>
            </div>
        <?php endif; ?>
        <a href="your_previous_page.php" class="btn btn-primary mt-3">Quay lại</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>