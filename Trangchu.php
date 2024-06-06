<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Trang chủ Vibook</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <?php
        session_start();
        if (!isset($_SESSION['tenDangNhap'])) {
            header("Location: dangky.php");
            exit();
        }
        ?>
        <!-- Thanh chuc nang -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-flex">
                <div class="container-start">
                    <a class="logo" href="#">ViBook</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <form class="d-flex" role="search" action="timkiem.php" method="get">
                        <input class="search" type="text" name="query" placeholder="Nhập từ khóa tìm kiếm...">
                        <button class="buttonTK" type="submit">Tìm kiếm</button>
                    </form>
                    <div class = "chucnang">
                        <button type="button" id="giohang">
                            <i class="fa fa-shopping-cart"></i>
                            Giỏ Hàng
                            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                            <span class="visually-hidden">Giỏ hàng</span>
                            </span>
                        </button>
                        <button type="button" id="taikhoan">
                            <i class="fa fa-user-circle-o"></i>
                            <a href="taikhoannguoidung.php" >Tài khoản </a>
                            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                            <span class="visually-hidden"><a href="taikhoannguoidung.php" >Tài khoản </a></span>
                            </span>
                        </button>
                        <form action="#" method="post">
                            <button type="submit" class="dangxuat">Đăng xuất</button>
                        </form>
                    </div>
                </div>
                <ul class="container-start-2">
                    <li class="nav-item">
                        <a class="trang" aria-current="page" href="Trangchu.php">Trang chủ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="trang" aria-current="page" href="danhmucsptong.php">Sản phẩm sách</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Banner sale -->
        <div class="banner">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Vibook (1).png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="Vibook (2).png" class="d-block w-100" alt="...">
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- New book -->
        <div class="FL">
            <text>Sách mới ra</text>
        </div>
        <div class="container-fl">
            <div class="TheSach">
                <img src="FL1.jfif" class="anh-sach" alt="...">
                <br><br>
                <div class="card-body">
                    <h5 class="card-title">Mắt biếc - Nguyễn Nhật Ánh</h5>
                    <p class="card-text">87.000 VND</p>
                    <a href="#" class="btn btn-primary">Xem chi tiết</a>
                </div>
            </div>
            <div class="TheSach">
                <img src="FL2.jpg" class="anh-sach" alt="...">
                <br><br>
                <div class="card-body">
                    <h5 class="card-title">Tôi thấy hoa vàng trên cỏ xanh - Nguyễn Nhật Ánh</h5>
                    <p class="card-text">68.000 VND</p>
                    <a href="#" class="btn btn-primary">Xem chi tiết</a>
                </div>
            </div>
            <div class="TheSach">
                <img src="FL3.jpg" class="anh-sach" alt="...">
                <br><br>
                <div class="card-body">
                    <h5 class="card-title">Ngồi khóc trên cây - Nguyễn Nhật Ánh</h5>
                    <p class="card-text">73.000 VND</p>
                    <a href="#" class="btn btn-primary">Xem chi tiết</a>
                </div>
            </div>
            <div class="TheSach">
                <img src="FL4.jfif" class="anh-sach" alt="...">
                <br><br>
                <div class="card-body">
                    <h5 class="card-title">Thiên tài bên trái kẻ điên bên phải</h5>
                    <p class="card-text">88.000 VND</p>
                    <a href="#" class="btn btn-primary">Xem chi tiết</a>
                </div>
            </div>
        </div>
        <div class="view-all"><button>Xem tất cả</button></div>
        <!-- Sách nổi bật -->
        <div class="FL">
            <text>Sách nổi bật trong tháng</text>
        </div>
        <div class="container-fl">
            <div class="TheSach">
                <img src="FL1.jfif" class="anh-sach" alt="...">
                <br><br>
                <div class="card-body">
                    <h5 class="card-title">Mắt biếc - Nguyễn Nhật Ánh</h5>
                    <p class="card-text">87.000 VND</p>
                    <a href="#" class="btn btn-primary">Xem chi tiết</a>
                </div>
            </div>
            <div class="TheSach">
                <img src="FL2.jpg" class="anh-sach" alt="...">
                <br><br>
                <div class="card-body">
                    <h5 class="card-title">Tôi thấy hoa vàng trên cỏ xanh - Nguyễn Nhật Ánh</h5>
                    <p class="card-text">68.000 VND</p>
                    <a href="#" class="btn btn-primary">Xem chi tiết</a>
                </div>
            </div>
            <div class="TheSach">
                <img src="FL3.jpg" class="anh-sach" alt="...">
                <br><br>
                <div class="card-body">
                    <h5 class="card-title">Ngồi khóc trên cây - Nguyễn Nhật Ánh</h5>
                    <p class="card-text">73.000 VND</p>
                    <a href="#" class="btn btn-primary">Xem chi tiết</a>
                </div>
            </div>
            <div class="TheSach">
                <img src="FL4.jfif" class="anh-sach" alt="...">
                <br><br>
                <div class="card-body">
                    <h5 class="card-title">Thiên tài bên trái kẻ điên bên phải</h5>
                    <p class="card-text">88.000 VND</p>
                    <a href="#" class="btn btn-primary">Xem chi tiết</a>
                </div>
            </div>
        </div>
        <div class="view-all"><button>Xem tất cả</button></div>
        <!-- Thông tin web -->
        <div class="thongtin">
            <h1>ViBook.com</h1>
            <p>Địa chỉ: Khu phố 6, Đường Tạ Quang Bửu, Phường Linh Trung, Thành phố Thủ Đức, Thành phố Hồ Chí Minh</p>
            <p>SĐT: 1900636468</p>
            <p>Email: vibookvn@gmail.com</p>
            <p>ViBook.com nhận đặt hàng trực tuyến và giao hàng tận nơi. KHÔNG hỗ trợ đặt mua và nhận hàng trực tiếp tại văn phòng cũng như tất cả Hệ Thống ViBook trên toàn quốc.</p>
        </div>
    </body>
</html>
