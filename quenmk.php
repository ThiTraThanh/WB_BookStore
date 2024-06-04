<?php
// Kết nối tới cơ sở dữ liệu
include 'connect.php';
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// Kiểm tra xem có dữ liệu gửi từ form hay không
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $mail = new PHPMailer(true);

    $sql = "SELECT * FROM nguoidung WHERE email = '$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Tạo một mã reset mật khẩu ngẫu nhiên
        $newPass = bin2hex(random_bytes(4));
        $hashedPassword = password_hash($newPass, PASSWORD_DEFAULT);
        $sql = "UPDATE nguoidung SET matKhau = '$hashedPassword' WHERE email='$email'";
        $conn->query($sql);
        
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'tr1t81n8ntttca0a@gmail.com';
            $mail->Password = 'iocy fcum encn lutx';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->SMTPOptions = array (
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            

            $mail->setFrom('tr1t81n8ntttca0a@gmail.com', 'ViBook');
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = 'Đặt lại mật khẩu';
            $mail->Body = "Mật khẩu mới: " . $newPass;
            $mail->CharSet = 'UTF-8';
            $mail->send();
            
            header('Location: dangnhap.php');
        } catch (Exception $e) {
            $error = 'Lỗi khi gửi email: ' . $mail->ErrorInfo;
    }} else {
        $error= "Email không tồn tại trong cơ sở dữ liệu.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quên Mật Khẩu</title>
    <link rel="stylesheet" href="sDK.css">

</head>
<body>
    <div class="container">
    <div class="image-section">
        <img src="img.jpg" alt="blue book">
        <div class="logo">ViBook</div>
    </div>
    <div class="form">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <h2>Quên Mật Khẩu</h2>
        <h3>Vui lòng nhập e-mail để khôi phục mật khẩu</h3>
        <input type="email" name="email" placeholder="E-mail" required><br><br>
        <input type="submit" name="submit" value="Gửi">
    </form>
    </div>
    <?php if (isset($error)) echo '<p class="error">' . $error . '</p>'; ?>
</body>
</html>