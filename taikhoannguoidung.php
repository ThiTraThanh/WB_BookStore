<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tài khoản người dùng</title>
    <style>
        .hidden {
            display: none;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="taikhoannguoidung.css">
</head>
<body>
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
                        <button type="button" id="thongbao">
                            <i class="fa fa-bell"></i>
                            Thông báo
                            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                            <span class="visually-hidden">New alerts</span>
                            </span>
                        </button>
                        <button type="button" id="giohang">
                            <i class="fa fa-shopping-cart"></i>
                            Giỏ hàng
                            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                            <span class="visually-hidden">New alerts</span>
                            </span>
                        </button>
                        <button type="submit" id="taikhoan" >
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
                        <a class="trang" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Sản phẩm sách
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="trang" href="#">Tin khuyến mãi</a>
                    </li>
                </ul>
            </div>
        </nav>
            <div class="account">
                <div class="demuc">TÀI KHOẢN</div>
                <button type="button" id="infor"> Thông tin tài khoản</button>
                <button type="button" id="in4"> Đơn hàng của bạn</button>
            </div>

        <table id="myform" class="register hidden" border = 1>
            <form  action="regtknd.php" method="post">
                <tr><td><label>THÔNG TIN TÀI KHOẢN</label></td></tr>
                <tr>
                    <td>Họ và tên</td>
                    <td><input type="text" name="name" id="" value="" placeholder="Nhập họ và tên" size="30"/></td>
                </tr>
                <tr>
                    <td>Số điện thoại</td>
                    <td><input type="phone" name="phone" id="" value="" placeholder="09xxxxxxxx" size="30"/></td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td><input type="text" name="address" id="" value="" placeholder="Số X, đường Y, xã/phường/thị trấn Z, huyện/quận M, tỉnh N" size="30"/></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" id="" value="" placeholder="abc@gmail.com" size="30"/></td>
                </tr>
                <tr>
                    <td>Giới tính</td>
                    <td><input type="radio" name="gender" id="" value=""/>Nam
                        <input type="radio" nam="gender" id="" value=""/>Nữ
                    </td>
                    <tr>
                        <td>Ngày sinh</td>
                        <td><input type="date" name="day" id="" value="" placeholder="01/01/2004" size="30"/></td>
                    </tr>
                    <tr class="nut">
                        <td  colspan="2"><button type="submit" value="save">Lưu thay đổi</button></td>
                    </tr>
            </form>
        </table>

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

            // document.getElementById('myform').addEventListener('submit', function(event) {
            // event.preventDefault();
            // alert('Thông tin đã được lưu lại!');
            // });
            
        </script>

</body>
</html>