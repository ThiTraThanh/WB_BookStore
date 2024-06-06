<?php
session_start();
include('ketnoi.php');
// Kiểm tra xem session về đơn hàng có tồn tại không
if(isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
    <h1>Đặt hàng thành công!</h1>
    <p>Cảm ơn bạn đã đặt hàng.
    <p>Đơn hàng của bạn đã được đặt thành công.</p>
</body>

</html>
<?php
} else {
    // Nếu không có đơn hàng trong session hoặc không phải là một mảng, hiển thị thông báo lỗi
    echo "Không tìm thấy đơn hàng.";
}
?>