?<?php
 session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="../../css/style.css">
    <script src="../../js/script.js"></script>
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
                        <a class="trang" aria-current="page" href="../../index.php">Trang chủ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="trang" aria-current="page" href="../../index.php?quanly=danhmucsanpham">Sản phẩm
                            sách</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="giohang-container">
            <?php
        if(isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
            ?>
            <table class="giohang-table">
                <thead>
                    <tr>
                        <th>Ảnh bìa</th>
                        <th>Tên sách</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                $tongThanhTien = 0;
                foreach($_SESSION['giohang'] as $key => $item) {
                    if(is_array($item)) {
                        $thanhTien = $item['soLuong'] * $item['gia'];
                        $tongThanhTien += $thanhTien;
                        ?>
                    <tr>
                        <td><img width="15%"
                                src="../../WB_BookStore-themxoasuasp/uploads/<?php echo $item['anhBia']; ?>"
                                alt="<?php echo $item['tenSach']; ?>"></td>
                        <td><?php echo $item['tenSach']; ?></td>
                        <td><?php echo number_format($item['gia'], 0, ',', '.') . 'đ'; ?></td>
                        <td>
                            <!-- Nút giảm số lượng -->
                            <button class="btn btn-sm btn-secondary btn-giam-soluong"
                                data-id="<?php echo $key; ?>">-</button>
                            <!-- Hiển thị số lượng -->
                            <span class="so-luong"><?php echo $item['soLuong']; ?></span>
                            <!-- Nút tăng số lượng -->
                            <button class="btn btn-sm btn-primary btn-tang-soluong"
                                data-id="<?php echo $key; ?>">+</button>
                        </td>
                        <td><?php echo number_format($thanhTien, 0, ',', '.') . 'đ'; ?></td>
                    </tr>
                    <?php
                    }
                }
                ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4"><b>Tổng thành tiền:</b></td>
                        <td><b><?php echo number_format($tongThanhTien, 0, ',', '.') . 'đ'; ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="5">
                            <button class="btn btn-success" id="btn-thanh-toan">Thanh toán</button>
                        </td>
                    </tr>
                </tfoot>
            </table>
            <?php
        } else {
            echo "<p class='giohang-empty'>Giỏ hàng của bạn đang trống.</p>";
        }
        ?>
        </div>

    </body>

    </html>
    <script>
    // Xử lý sự kiện khi nhấn nút tăng số lượng
    document.querySelectorAll('.btn-tang-soluong').forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.getAttribute('data-id');
            const quantityElement = this.parentElement.querySelector('.so-luong');
            const currentQuantity = parseInt(quantityElement.textContent);
            const priceElement = this.parentElement.previousElementSibling;
            const price = parseFloat(priceElement.textContent.replace('đ', '').replace('.', '').replace(
                ',', '.'));
            const totalPriceElement = this.parentElement.nextElementSibling;
            quantityElement.textContent = currentQuantity + 1;
            const newTotalPrice = (currentQuantity + 1) * price;
            totalPriceElement.textContent = newTotalPrice.toLocaleString('vi-VN') + 'đ';
            // Gửi request cập nhật giỏ hàng (bạn cần viết phần này)
        });
    });

    // Xử lý sự kiện khi nhấn nút giảm số lượng
    document.querySelectorAll('.btn-giam-soluong').forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.getAttribute('data-id');
            const quantityElement = this.parentElement.querySelector('.so-luong');
            const currentQuantity = parseInt(quantityElement.textContent);
            const priceElement = this.parentElement.previousElementSibling;
            const price = parseFloat(priceElement.textContent.replace('đ', '').replace('.', '').replace(
                ',', '.'));
            const totalPriceElement = this.parentElement.nextElementSibling;
            if (currentQuantity > 1) {
                quantityElement.textContent = currentQuantity - 1;
                const newTotalPrice = (currentQuantity - 1) * price;
                totalPriceElement.textContent = newTotalPrice.toLocaleString('vi-VN') + 'đ';
                // Gửi request cập nhật giỏ hàng (bạn cần viết phần này)
            }
        });
    });

    // Xử lý sự kiện khi nhấn nút thanh toán
    document.getElementById('btn-thanh-toan').addEventListener('click', function() {
        // Chuyển hướng người dùng đến trang đặt hàng thành công
        window.location.href = 'dondathang.php';
    });
    </script>

    <style>
    .giohang-container {
        width: 80%;
        margin: 0 auto;
    }

    .giohang-table {
        width: 100%;
        border-collapse: collapse;
    }

    .giohang-table th,
    .giohang-table td {
        border: 1px solid #ddd;
        /* Thay vì #ccc */
        padding: 15px;
        /* Tăng độ dày lề */
        text-align: center;
        /* Căn giữa nội dung */
    }

    .giohang-table th {
        background-color: #f2f2f2;
    }

    .giohang-table img {
        max-width: 100px;
        /* Đảm bảo hình ảnh không vượt quá kích thước */
        height: auto;
    }

    .giohang-empty {
        text-align: center;
        margin-top: 20px;
        font-style: italic;
        font-size: 18px;
        /* Tăng cỡ chữ */
        color: #888;
        /* Đổi màu chữ */
    }
    </style>