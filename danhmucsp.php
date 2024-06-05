<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Danh mục sản phẩm </title>
        <link rel="stylesheet" href="danhmucsp.css">
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
        <?php
            include('ketnoi.php');
            #include('header.php');
	        $strSQL="SELECT * FROM theloaisach;" ;
	        $loaisach=mysqli_query($ung,$strSQL);
        ?>
        <!--------------------Danh mục sản phẩm--------------> 
        <section class="danhmuc">
            <div class="danhmuc-top">
                <?php
                    if(isset($_GET['maLoaiSach'])) {
                        $sql_cate = "SELECT * FROM theloaisach as t WHERE t.maLoaiSach = '$_GET[maLoaiSach]' LIMIT 20";
                        $query_cate = mysqli_query($ung, $sql_cate);
                        while($row_tieude = mysqli_fetch_array($query_cate)) {
                ?>
                            <p style="font-size: 24px; font-weight:bold;"> <?php echo $row_tieude['tenLoaiSach'] ?> </p>
                    <?php
                        }
                    }
                ?>
            </div>
            <div class="container-danhmuc-left-right">
                <div class="row">
                    <div class="danhmuc-left">
                        <h2> Thể loại </h2>
                        <ul>
                            <?php
                                $sql_danhmuc = "SELECT * FROM theloaisach ORDER BY maLoaiSach ASC";
                                $query_danhmuc = mysqli_query($ung, $sql_danhmuc);
                                while($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                            ?>
                                <li><a href="?maLoaiSach=<?php echo $row_danhmuc['maLoaiSach']; ?>"><?php echo $row_danhmuc['tenLoaiSach'] ?></a></li>
                            <?php 
                                }
                            ?>
                        </ul>
                    </div>
                    <div class="danhmuc-right">
                        <div class="danhmuc-right-content">
                            <div class="danhmuc-right-content-item">
                                <?php 
                                    if(isset($_GET['maLoaiSach'])) {
                                        $sql_sanpham = "SELECT * FROM theloaisach as t, sach as s WHERE s.maLoaiSach = t.maLoaiSach AND s.maLoaiSach='$_GET[maLoaiSach]' ORDER BY s.maSach DESC";
                                        $query_sanpham = mysqli_query($ung, $sql_sanpham);
                                        if($query_sanpham->num_rows > 0): {
                                            while($row_sanpham = mysqli_fetch_array($query_sanpham)): {
                                ?>
                                                <div class="sanpham">
                                                    <img src="<?php echo $row_sanpham['anhBia']; ?>" alt="<?php echo $row_sanpham['tenSach']; ?>">
                                                    <h1><?php echo $row_sanpham['tenSach']; ?></h1>
                                                    <p style="padding-top: 5px">Giá: <?php echo $row_sanpham['gia']; ?> VNĐ</p>
                                                    <a href="productlist.php?maSach=<?php echo $row_sanpham['maSach']; ?>">Xem chi tiết</a>
                                                </div>      
                                        <?php
                                            }
                                            endwhile; 
                                        }?>
                                        <?php else: ?>
                                            <p>Chưa có sản phẩm nào</p>
                                            <?php endif; ?>
                                <?php
                                    }  
                                ?>
                            </div>
                        </div>
                        <div class="danhmuc-right-bottom">
                            <ul class="danhmuc-right-bottom-item">
                                <li><a href="#">&#171;</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&#8230;</a></li>
                                <li><a href="#">&#187;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-----------------Footer----------------------->
        <div class="thongtin">
            <h1>ViBook.com</h1>
            <p>Địa chỉ: Khu phố 6, Đường Tạ Quang Bửu, Phường Linh Trung, Thành phố Thủ Đức, Thành phố Hồ Chí Minh</p>
            <p>SĐT: 1900636468</p>
            <p>Email: vibookvn@gmail.com</p>
            <p>ViBook.com nhận đặt hàng trực tuyến và giao hàng tận nơi. KHÔNG hỗ trợ đặt mua và nhận hàng trực tiếp tại văn phòng cũng như tất cả Hệ Thống ViBook trên toàn quốc.</p>
        </div>
    </body>
</html>