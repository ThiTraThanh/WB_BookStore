<?php
// session_start();
// ob_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tenDangNhap = $_POST['tenDangNhap'];
    $pass = $_POST['pass'];
    $confirmPassword = $_POST['confirm-pass'];
    $email = $_POST['email'];
    // $vaiTro = 0;
    // $_SERVER['tenDangNhap']=$username;
    // $_SESSION['pass']=$password;
    // $_SESSION['confirm-pass']=$confirmPassword;

    if ($pass != $confirmPassword) {
        $error = 'Mật khẩu không khớp';
    } else {
        // Kiểm tra xem tên đăng nhập đã tồn tại chưa
        include 'connect.php';
        //chuẩn bị câu truy vấn để thực thi
        $stmt = $conn->prepare('SELECT * FROM nguoidung WHERE tenDangNhap = ?');
        //truyền dữ liệu vào biến ẩn danh
        $stmt->bind_param('s', $tenDangNhap);
        //thực thi câu truy vấn
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows != 0) {
            $error = 'Tên đăng nhập đã tồn tại';
        // print_r($stmt);
        } else {
            $sql = "SELECT MAX(maNguoiDung) AS max_id FROM nguoidung";
            $result = $conn->query($sql);
    
            if ($result->num_rows > 0) {
        // lấy một hàng dữ liệu từ kết quả truy vấn (result set) dưới dạng một mảng kết hợp (associative array)
                $row = $result->fetch_assoc();
                $last_id = substr($row["max_id"], 2); // Lấy phần số của mã người dùng cuối cùng
            } else {
            $last_id = 0; // Nếu không có người dùng nào, bắt đầu từ 0
            }
            $new_id = (int)$last_id + 1; // Tăng mã người dùng lên 1
            $user_id = "US" . str_pad($new_id, 0, "0", STR_PAD_LEFT); // Thêm "US" và đệm số 0 cho phần số
            // Thêm người dùng mới vào cơ sở dữ liệu
            $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);
            $stmt = $conn->prepare('INSERT INTO nguoidung (maNguoiDung, tenDangNhap, matKhau, email) VALUES (?, ?, ?, ?)');
            $stmt->bind_param('ssss', $user_id, $tenDangNhap, $hashedPassword, $email);
            $stmt->execute();
            header('Location: dangnhap.php');
            exit;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
    <link rel="stylesheet" href="sDK.css">
</head>
<body>
    <div class="container">
    <div class="image-section">
        <img src="img.jpg" alt="blue book">
        <div class="logo">ViBook</div>
    </div>
    <div class="form">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <h2>Đăng ký</h2>
            <input type="input" name="tenDangNhap" placeholder="Tên đăng nhập" required>
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="password" name="pass" placeholder="Mật khẩu" required>
            <input type="password" name="confirm-pass" placeholder="Xác nhận mật khẩu" required>
            <input type='submit' name='dangky' value='Đăng ký'>
            <?php if (isset($error)) echo '<p class="error">' . $error . '</p>'; ?>
        </form>
    </div>
    </div>
</body>
</html>