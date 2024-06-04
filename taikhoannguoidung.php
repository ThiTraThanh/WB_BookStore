<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tài khoản người dùng</title>
        <style>
        .hidden {
            display: none;
        }
    </style>
        <link rel="stylesheet" href="tknd.css">
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
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <form class="d-flex" role="search">
                       <input class="search" type="search" placeholder="Nhập tên sản phẩm..." aria-label="Search">
                    </form>
                    <div class = "chucnang">
                        <button type="button" id="giohang">
                            <i class="fa fa-shopping-cart"></i>
                            Giỏ hàng
                            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                            <span class="visually-hidden">New alerts</span>
                            </span>
                        </button>
                        <button type="button" id="taikhoan">
                            <i class="fa fa-user-circle-o"></i>
                            Tài khoản
                            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                            <span class="visually-hidden">New alerts</span>
                            </span>
                        </button>
                    </div>
                </div>
                <ul class="container-start-2">
                    <li class="nav-item">
                        <a class="trang" aria-current="page" href="#">Trang chủ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="trang" aria-current="page" href="#">Sản phẩm sách</a>
                    </li>
                </ul>
            </div>
        </nav>

            <div class="account">
                <div class="demuc">TÀI KHOẢN</div>
                <button type="button" id="infor"> Thông tin tài khoản</button>
                <form method="post" action="taopagemoichodhcb.php">
                <button type="submit" id="in4"> Đơn hàng của bạn</button>
                </form>
            </div>

        <form  action="regtknd.php" method="post">
        <table id="myform" class="register hidden">
                <tr class="ttin"><td colspan="2">THÔNG TIN TÀI KHOẢN</td></tr>
                <tr>
                    <td>Tên đăng nhập không được thay đổi</td>
                    <td><input type="text" id="tenDangNhap" name="tenDangNhap" placeholder="Nhập tên đăng nhập" size="35" value="" required/></td>
                </tr>
                <tr>
                    <td>Mật khẩu</td>
                    <td><input type="text" id="matKhau" name="matKhau" value="" placeholder="Nhập mật khẩu của bạn" size="35" required/></td>
                </tr>
                <tr>
                    <td>Họ và tên</td>
                    <td><input type="text" id="hoTen" name="hoTen" value="" placeholder="Nhập họ và tên" size="35" required/></td>
                </tr>
                <tr>
                    <td>Số điện thoại</td>
                    <td><input type="phone" id="SDT" name="SDT" value="" placeholder="09xxxxxxxx" size="35" required/></td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td><input type="text" id="diaChi" name="diaChi" value="" placeholder="Số X, đường Y, xã/phường/thị trấn Z, huyện/quận M, tỉnh N" size="35" required/></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" id="" value="" placeholder="abc@gmail.com" size="35" required/></td>
                </tr>
                    <tr>
                    <td>Giới tính</td>
                    <td>
                    <select id="gioiTinh" name="gioiTinh">
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                    <option value="Khác">Khác</option>
                    </select>
                    </td>
                    </tr>
                    <tr>
                        <td>Ngày sinh</td>
                        <td><input type="date" id="ngaySinh" name="ngaySinh" value="" placeholder="01/01/2004" size="30" required/></td>
                    </tr>
                    <tr class="nut">
                        <td colspan="2"><button type="submit" name="btn-reg">Lưu thay đổi</button></td>
                    </tr>
            
        </table>
    </form>
        <script>
            document.getElementById('infor').addEventListener('click', function() {
                var form = document.getElementById('myform');
                var commentForm = document.getElementById('mycomment');
                var commentButton = document.getElementById('comment');
                
                if (form.classList.contains('hidden')) {
                    form.classList.remove('hidden');
                    commentForm.classList.add('hidden');
                } else {
                    form.classList.add('hidden');
                }
            });
        </script>

</body>
</html>