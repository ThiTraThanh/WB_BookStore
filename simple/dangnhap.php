<?php
// if(!defined('_CODE')) {
//     die('Từ chối truy cập');
//   }
include 'connect.php';
// require './config.php';
// include 'C:/xampp/htdocs/WB/dangnhapdangkynguoidung/includes/connect.php';
if((isset($_POST['dangnhap']))&&($_POST['dangnhap']==="Đăng nhập")) {
    $tenDangNhap=$_POST['tenDangNhap'];
    $pass=$_POST['pass'];
    $_SESSION['logged_in'] = true;
    $_SESSION['vaiTro']='0';
    $stmt = $conn->prepare("SELECT * FROM nguoidung WHERE tenDangNhap=?");
    $stmt->bind_param('s', $tenDangNhap);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows>0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['matKhau'];
        if ($row["tenDangNhap"]==$tenDangNhap && password_verify($pass, $hashed_password)) {
            if ($row['vaiTro']=='1') {
                // $_SESSION['logged_in'] == true;
                $_SESSION['tenDangNhap']=$tenDangNhap;
                $_SESSION['vaiTro']='1';
                header("Location: danhSachNguoiDung.php");
                exit();
            } else {
                $_SESSION['tenDangNhap']=$tenDangNhap;
                // $_SESSION['logged_in'] = true;
                header("Location: trangchu.php");
                exit();
            }
            
        } else {
            $_SESSION['logged_in'] = false;
            $error="Mật khẩu bạn sai. Vui lòng nhập lại!";
            
        }
    } else {
        $_SESSION['logged_in'] = false;
        $error = "Tên đăng nhập không tồn tại!";
    }
    // $result=
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sDK.css">
    <!-- <title>Document</title> -->
</head>
<body>
<div class="container">
    <div class="image-section">
        <img src="img.jpg" alt="blue book">
        <div class="logo">ViBook</div>
    </div>
    <div class="form">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <h2>Đăng nhập</h2>
            <input type="input" name="tenDangNhap" placeholder="Tên đăng nhập" required>
            <input type="password" name="pass" placeholder="Mật khẩu" required>
            <input type='submit' name=dangnhap value='Đăng nhập'>
        </form>

    </div>
    </div>
    <?php if (isset($error)) echo '<p class="error">' . $error . '</p>'; ?>
</body>
</html>