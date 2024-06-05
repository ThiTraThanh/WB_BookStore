<!-- KHI ẤN VÀO SẢN PHẨM BẤT KỲ THÌ SẼ HIỆN RA TRANG CHI TIẾT SẢN PHẨM -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <title>Vibook</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
        <link rel="stylesheet" href="check.css" />
        <script src="check.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    </head>

    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
        </script>
        <!-- Thanh chuc nang -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-flex">
                <div class="container-start">
                    <a class="logo" href="#">ViBook</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <form class="d-flex" role="search">
                        <input class="search" type="search" placeholder="Nhập tên sản phẩm..." aria-label="Search" />
                    </form>
                    <div class="chucnang">
                        <button type="button" id="giohang">
                            <i class="fa fa-shopping-cart"></i>
                            Giỏ hàng
                            <span
                                class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                                <span class="visually-hidden">New alerts</span>
                            </span>
                        </button>
                        <button type="button" id="taikhoan">
                            <i class="fa fa-user-circle-o"></i>
                            Tài khoản
                            <span
                                class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
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

        <?php
include('ketnoi.php');
$sql_chitiet="SELECT * FROM sach, theloaisach, tacgia, nxb WHERE sach.maLoaiSach=theloaisach.maLoaiSach AND sach.maTacGia=tacgia.maTacGia AND sach.maNXB=nxb.maNXB AND sach.maSach='$_GET[id]' LIMIT 1";
$query_chitiet=mysqli_query($mysqli,$sql_chitiet);
while($row_chitiet=mysqli_fetch_array($query_chitiet)){
?>
        <div class="wrapper_sanpham">
            <div class="hinhanh_sanpham">
                <img width="80%" src="../../WB_BookStore-themxoasuasp/uploads/<?php echo $row_chitiet['anhBia'];?>"
                    alt="<?php echo $row_chitiet['tenSach']; ?>">
            </div>

            <div class="mua_sanpham">
                <h3 style="font-size: 30px"><?php echo $row_chitiet['tenSach']?></h3>

                <div class="tomtat_thongtin">
                    <div class="tomtat1">
                        <span style="width: 200px">Nhà cung cấp:
                            <strong><?php echo $row_chitiet['tenNXB']?></strong></span>
                        <span>Tác giả: <strong><?php echo $row_chitiet['tenTacGia']?></strong></span>
                    </div>
                    <div class="tomtat2">
                        <span style="width: 200px">Nhà xuất bản:
                            <strong><?php echo $row_chitiet['tenNXB']?></strong></span>
                        <span>Hình thức: <strong>Bìa mềm</strong></span>
                    </div>
                </div>

                <p class="gia_sp"><?php echo number_format($row_chitiet['gia'],0,',','.').'đ'?></p>
                <div class=" chinhsach">
                    <ul style="list-style-type: none">
                        <li>
                            <span><i class="fas fa-shipping-fast"></i></span>
                            <span>Phí giao hàng 15.000đ</span>
                        </li>
                        <li>
                            <span><i class="fas fa-map-marker-alt"></i></span>
                            <span>Giao hàng toàn quốc</span>
                        </li>
                        <li>
                            <span><i class="fas fa-exchange-alt"></i></span>
                            <span>Đổi trả trong vòng 30 ngày</span>
                        </li>
                    </ul>
                </div>

                <div class="soluongmua">
                    <button class="minus-btn" type="button">-</button>
                    <input type="text" id="soluongmua" name="soluongmua" value="1" readonly />
                    <button class="plus-btn" type="button">+</button>
                </div>
                <div>
                    <div class="button-container">
                        <p>
                            <input class="themgiohang" name="themgiohang" type="submit" value="Thêm giỏ hàng" />
                        </p>
                        <a href="trangchu/main/themgiohang.php?id_sp=<?php echo $row_chitiet['maSach'];?>"><button
                                type="button" class="muangay">Mua ngay</button></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Thông tin chi tiết sản phẩm -->
        <div class="details-container">
            <h2>Thông tin chi tiết</h2>
            <ul>
                <li>
                    <span class="key">Tác giả:</span>
                    <span class="value"><?php echo $row_chitiet['tenTacGia']?></span>
                </li>
                <li>
                    <span class="key">Nhà xuất bản:</span>
                    <span class="value"><?php echo $row_chitiet['tenNXB']?></span>
                </li>
                <li>
                    <span class="key">Mô tả sản phẩm:</span>
                    <span class="value"><?php echo $row_chitiet['moTa']?></span>
                </li>
            </ul>
        </div>
        <?php
    }
    ?>
        <!-- Thông tin web -->
        <div class="thongtin">
            <h1>ViBook.com</h1>
            <p>Địa chỉ: Khu phố 6, Đường Tạ Quang Bửu, Phường Linh Trung, Thành phố Thủ Đức, Thành phố Hồ Chí Minh</p>
            <p>SĐT: 1900636468</p>
            <p>Email: vibookvn@gmail.com</p>
            <p>ViBook.com nhận đặt hàng trực tuyến và giao hàng tận nơi. KHÔNG hỗ trợ đặt mua và nhận hàng trực tiếp tại
                văn
                phòng cũng như tất cả Hệ Thống ViBook trên toàn quốc.</p>
        </div>
    </body>

    </html>