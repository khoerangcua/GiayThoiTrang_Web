<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả tìm kiếm</title>
    <!--bootstrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <!--link style-->
    <link rel="stylesheet" href="public/styles/header.css">
    <link rel="stylesheet" href="public/styles/footer.css">
    <link rel="stylesheet" href="public/styles/hienthitimkiem.css">
</head>

<body>
    <!--HEADER-->

    <header>
        <?php
        include_once("public/templates/header.php");
        ?>
    </header>


    <!--CONTENT-->
    <div class="container-fluid">

        <!--TIỀU ĐỀ-->
        <div class="row">
            <div class="col-lg-12 text-center" style="padding:40px 0px">
                <h2>New Drops </h2>
            </div>
        </div>

        <!--BỘ LỌC-->
        <div class="row" style="margin: 0px 50px;">
            <div class="col-lg-2">
                <div class="home-filter">
                    <span class="home-filter_label">
                        <h2>Bộ lọc</h2>
                    </span>
                    <hr width="60%" size="4px" align="right" />
                    <span class="home-filter_label">
                        <h4>Thương hiệu
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" id="dropnav"></button>
                            <div class="dropdown-menu" aria-labelledby="dropnav">
                                <a class="dropdown-item" href='#'>Adidas</a>
                                <a class="dropdown-item" href='#'>Nike</a>
                                <a class="dropdown-item" href='#'>Jodan</a>
                                <a class="dropdown-item" href='#'>MLB</a>
                                <a class="dropdown-item" href='#'>Vans</a>
                                <div>
                        </h4>
                    </span>
                    <hr width="60%" size="4px" align="right" />
                    <span class="home-filter_label">
                        <h4>Size
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"></button>
                        </h4>
                    </span>
                    <hr width="60%" size="4px" align="right" />
                    <span class="home-filter_label">
                        <h4>Tùy chỉnh
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"></button>
                        </h4>
                    </span>
                    <hr width="60%" size="4px" align="right" />
                </div>
            </div>

            <!--LƯỚI SẢN PHẨM-->
            <div class="col-lg-10">
                <div class="row pro-list">
                    <div class="col-lg-3 col-md-6 col-6 products">
                        <div id="wapper">
                            <ul class="pro-list bod">
                                <li>
                                    <a href="#"><img class="pro-img" src="public/images/products/giay3-httk.jpg">
                                        <div class="hienthi">
                                            <button type="button" class="btn-xem  text-center ">
                                                <h4>Xem chi tiết </h4>
                                            </button>
                                            <button type="button" class="btn-them text-center ">
                                                <h4>Đặt hàng</h4>
                                            </button>

                                        </div>
                                    </a>
                                <li>
                            </ul>
                        </div>
                        <div class="pro-detail">
                            <h3 class="pro-name"><a href="#">kong on the street</a></h3>
                            <div class="pro-price">
                                <p class="pro-price sale">2,345,678₫
                                    <span class="pro-price-retail"><del>3,456,789₫</del></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 products">
                        <div id="wapper">
                            <ul class="pro-list">
                                <li>
                                    <a href="#"><img class="pro-img" src="public/images/products/giay3-httk.jpg">
                                        <div class="hienthi">
                                            <button type="button" class="btn-xem text-center ">
                                                <h4>Xem chi tiết </h4>
                                            </button>
                                            <button type="button" class="btn-them text-center ">
                                                <h4>Đặt hàng</h4>
                                            </button>

                                        </div>
                                    </a>
                                <li>
                            </ul>
                        </div>
                        <div class="pro-detail">
                            <h3 class="pro-name"><a href="#">kong on the street</a></h3>
                            <div class="pro-price">
                                <p class="pro-price sale">2,345,678₫
                                    <span class="pro-price-retail"><del>3,456,789₫</del></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 products">
                        <div id="wapper">
                            <ul class="pro-list">
                                <li>
                                    <a href="#"><img class="pro-img" src="public/images/products/giay3-httk.jpg">
                                        <div class="hienthi">
                                            <button type="button" class="btn-xem text-center ">
                                                <h4>Xem chi tiết </h4>
                                            </button>
                                            <button type="button" class="btn-them text-center ">
                                                <h4>Đặt hàng</h4>
                                            </button>

                                        </div>
                                    </a>
                                <li>
                            </ul>
                        </div>
                        <div class="pro-detail">
                            <h3 class="pro-name"><a href="#">kong on the street</a></h3>
                            <div class="pro-price">
                                <p class="pro-price sale">2,345,678₫
                                    <span class="pro-price-retail"><del>3,456,789₫</del></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 products">
                        <div id="wapper">
                            <ul class="pro-list">
                                <li>
                                    <a href="#"><img class="pro-img" src="public/images/products/giay3-httk.jpg">
                                        <div class="hienthi">
                                            <button type="button" class="btn-xem text-center ">
                                                <h4>Xem chi tiết </h4>
                                            </button>
                                            <button type="button" class="btn-them text-center ">
                                                <h4>Đặt hàng</h4>
                                            </button>
                                        </div>
                                    </a>
                                <li>
                            </ul>
                        </div>
                        <div class="pro-detail">
                            <h3 class="pro-name"><a href="#">kong on the street</a></h3>
                            <div class="pro-price">
                                <p class="pro-price sale">2,345,678₫
                                    <span class="pro-price-retail"><del>3,456,789₫</del></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 products">
                        <div id="wapper">
                            <ul class="pro-list">
                                <li>
                                    <a href="#"><img class="pro-img" src="public/images/products/giay3-httk.jpg">
                                        <div class="hienthi">
                                            <button type="button" class="btn-xem text-center ">
                                                <h4>Xem chi tiết </h4>
                                            </button>
                                            <button type="button" class="btn-them text-center ">
                                                <h4>Đặt hàng</h4>
                                            </button>
                                        </div>
                                    </a>
                                <li>
                            </ul>
                        </div>
                        <div class="pro-detail">
                            <h3 class="pro-name"><a href="#">kong on the street</a></h3>
                            <div class="pro-price">
                                <p class="pro-price sale">2,345,678₫
                                    <span class="pro-price-retail"><del>3,456,789₫</del></span>
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 col-6 products">
                        <div id="wapper">
                            <ul class="pro-list">
                                <li>
                                    <a href="#"><img class="pro-img" src="public/images/products/giay3-httk.jpg">
                                        <div class="hienthi">
                                            <button type="button" class="btn-xem text-center ">
                                                <h4>Xem chi tiết </h4>
                                            </button>
                                            <button type="button" class="btn-them text-center ">
                                                <h4>Đặt hàng</h4>
                                            </button>

                                        </div>
                                    </a>
                                <li>
                            </ul>
                        </div>
                        <div class="pro-detail">
                            <h3 class="pro-name"><a href="#">kong on the street</a></h3>
                            <div class="pro-price">
                                <p class="pro-price sale">2,345,678₫
                                    <span class="pro-price-retail"><del>3,456,789₫</del></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 products">
                        <div id="wapper">
                            <ul class="pro-list">
                                <li>
                                    <a href="#"><img class="pro-img" src="public/images/products/giay3-httk.jpg">
                                        <div class="hienthi">
                                            <button type="button" class="btn-xem text-center ">
                                                <h4>Xem chi tiết</h4>
                                            </button>
                                            <button type="button" class="btn-them text-center ">
                                                <h4>Đặt hàng</h4>
                                            </button>

                                        </div>
                                    </a>
                                <li>
                            </ul>
                        </div>
                        <div class="pro-detail">
                            <h3 class="pro-name"><a href="#">kong on the street</a></h3>
                            <div class="pro-price">
                                <p class="pro-price sale">2,345,678₫
                                    <span class="pro-price-retail"><del>3,456,789₫</del></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 products">
                        <div id="wapper">
                            <ul class="pro-list">
                                <li>
                                    <a href="#"><img class="pro-img" src="public/images/products/giay3-httk.jpg">
                                        <div class="hienthi">
                                            <button type="button" class="btn-xem text-center ">
                                                <h4>Xem chi tiết </h4>
                                            </button>
                                            <button type="button" class="btn-them text-center ">
                                                <h4>Đặt hàng</h4>
                                            </button>
                                        </div>
                                    </a>
                                <li>
                            </ul>
                        </div>
                        <div class="pro-detail">
                            <h3 class="pro-name"><a href="#">kong on the street</a></h3>
                            <div class="pro-price">
                                <p class="pro-price sale">2,345,678₫
                                    <span class="pro-price-retail"><del>3,456,789₫</del></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 products">
                        <div id="wapper">
                            <ul class="pro-list">
                                <li>
                                    <a href="#"><img class="pro-img" src="public/images/products/giay3-httk.jpg">
                                        <div class="hienthi">
                                            <button type="button" class="btn-xem text-center ">
                                                <h4>Xem chi tiết </h4>
                                            </button>
                                            <button type="button" class="btn-them text-center ">
                                                <h4>Đặt hàng</h4>
                                            </button>
                                        </div>
                                    </a>
                                <li>
                            </ul>
                        </div>
                        <div class="pro-detail">
                            <h3 class="pro-name"><a href="#">kong on the street</a></h3>
                            <div class="pro-price">
                                <p class="pro-price sale">2,345,678₫
                                    <span class="pro-price-retail"><del>3,456,789₫</del></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 products">
                        <div id="wapper">
                            <ul class="pro-list">
                                <li>
                                    <a href="#"><img class="pro-img" src="public/images/products/giay3-httk.jpg">
                                        <div class="hienthi">
                                            <button type="button" class="btn-xem text-center ">
                                                <h4>Xem chi tiết </h4>
                                            </button>
                                            <button type="button" class="btn-them text-center ">
                                                <h4>Đặt hàng</h4>
                                            </button>
                                        </div>
                                    </a>
                                <li>
                            </ul>
                        </div>
                        <div class="pro-detail">
                            <h3 class="pro-name"><a href="#">kong on the street</a></h3>
                            <div class="pro-price">
                                <p class="pro-price sale">2,345,678₫
                                    <span class="pro-price-retail"><del>3,456,789₫</del></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 products">
                        <div id="wapper">
                            <ul class="pro-list">
                                <li>
                                    <a href="#"><img class="pro-img" src="public/images/products/giay3-httk.jpg">
                                        <div class="hienthi">
                                            <button type="button" class="btn-xem text-center ">
                                                <h4>Xem chi tiết </h4>
                                            </button>
                                            <button type="button" class="btn-them text-center ">
                                                <h4>Đặt hàng</h4>
                                            </button>
                                        </div>
                                    </a>
                                <li>
                            </ul>
                        </div>
                        <div class="pro-detail">
                            <h3 class="pro-name"><a href="#">kong on the street</a></h3>
                            <div class="pro-price">
                                <p class="pro-price sale">2,345,678₫
                                    <span class="pro-price-retail"><del>3,456,789₫</del></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 products">
                        <div id="wapper">
                            <ul class="pro-list">
                                <li>
                                    <a href="#"><img class="pro-img" src="public/images/products/giay3-httk.jpg">
                                        <div class="hienthi">
                                            <button type="button" class="btn-xem text-center ">
                                                <h4>Xem chi tiết </h4>
                                            </button>
                                            <button type="button" class="btn-them text-center ">
                                                <h4>Đặt hàng</h4>
                                            </button>
                                        </div>
                                    </a>
                                <li>
                            </ul>
                        </div>
                        <div class="pro-detail">
                            <h3 class="pro-name"><a href="#">kong on the street</a></h3>
                            <div class="pro-price">
                                <p class="pro-price sale">2,345,678₫
                                    <span class="pro-price-retail"><del>3,456,789₫</del></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 products">
                        <div id="wapper">
                            <ul class="pro-list">
                                <li>
                                    <a href="#"><img class="pro-img" src="public/images/products/giay3-httk.jpg">
                                        <div class="hienthi">
                                            <button type="button" class="btn-xem text-center ">
                                                <h4>Xem chi tiết </h4>
                                            </button>
                                            <button type="button" class="btn-them text-center ">
                                                <h4>Đặt hàng</h4>
                                            </button>
                                        </div>
                                    </a>
                                <li>
                            </ul>
                        </div>
                        <div class="pro-detail">
                            <h3 class="pro-name"><a href="#">kong on the street</a></h3>
                            <div class="pro-price">
                                <p class="pro-price sale">2,345,678₫
                                    <span class="pro-price-retail"><del>3,456,789₫</del></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 products">
                        <div id="wapper">
                            <ul class="pro-list">
                                <li>
                                    <a href="#"><img class="pro-img" src="public/images/products/giay3-httk.jpg">
                                        <div class="hienthi">
                                            <button type="button" class="btn-xem text-center ">
                                                <h4>Xem chi tiết </h4>
                                            </button>
                                            <button type="button" class="btn-them text-center ">
                                                <h4>Đặt hàng</h4>
                                            </button>
                                        </div>
                                    </a>
                                <li>
                            </ul>
                        </div>
                        <div class="pro-detail">
                            <h3 class="pro-name"><a href="#">kong on the street</a></h3>
                            <div class="pro-price">
                                <p class="pro-price sale">2,345,678₫
                                    <span class="pro-price-retail"><del>3,456,789₫</del></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 products">
                        <div id="wapper">
                            <ul class="pro-list">
                                <li>
                                    <a href="#"><img class="pro-img" src="public/images/products/giay3-httk.jpg">
                                        <div class="hienthi">
                                            <button type="button" class="btn-xem text-center ">
                                                <h4>Xem chi tiết </h4>
                                            </button>
                                            <button type="button" class="btn-them text-center ">
                                                <h4>Đặt hàng</h4>
                                            </button>
                                        </div>
                                    </a>
                                <li>
                            </ul>
                        </div>
                        <div class="pro-detail">
                            <h3 class="pro-name"><a href="#">kong on the street</a></h3>
                            <div class="pro-price">
                                <p class="pro-price sale">2,345,678₫
                                    <span class="pro-price-retail"><del>3,456,789₫</del></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 products">
                        <div id="wapper">
                            <ul class="pro-list">
                                <li>
                                    <a href="#"><img class="pro-img" src="public/images/products/giay3-httk.jpg">
                                        <div class="hienthi">
                                            <button type="button" class="btn-xem text-center ">
                                                <h4>Xem chi tiết </h4>
                                            </button>
                                            <button type="button" class="btn-them text-center ">
                                                <h4>Đặt hàng</h4>
                                            </button>
                                        </div>
                                    </a>
                                <li>
                            </ul>
                        </div>
                        <div class="pro-detail">
                            <h3 class="pro-name"><a href="#">kong on the street</a></h3>
                            <div class="pro-price">
                                <p class="pro-price sale">2,345,678₫
                                    <span class="pro-price-retail"><del>3,456,789₫</del></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- THANH ĐIỀU HƯỚNG TRANG-->
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <ul class="pagination pagination-lg" style="justify-content: center;">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </div>
            </div>

        </div>


        <!--BANNER1-->
        <div class="row">
            <div class="col-lg-5 padding-0 ">
                <div class=" sale-banner text-light display-2" style="height: 450px;">
                    <h2>ADIDAS</h2>
                    <h3 style="transform: scale(2);"> Flash Sale is on!</h3>
                    <img class="logo-sale" src="public/images/logos/logoA2-httk.jpg">
                    <h1>UP TO 35%</h1>
                </div>
            </div>
            <div class="col-lg-7 padding-0">
                <a href="#"><img class="banner-img" src="public/images/banners/banner3-httk.jpg"></a>
            </div>
        </div>

        <!--BANNER2-->
        <div class="row">
            <div class="col-lg-12 text-center" style="margin-top: 50px; ">
                <h2 class="display-1">KONG ON THE STREET</h2>
                <h3> "Chỗ này để solgan"</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="row" id="slider">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="width: 100%">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="public/images/banners/banner2_1-httk.jpg" class="d-block w-100" style="width: 100%; height: 500px" alt="">
                                <div class="carousel-caption">
                                    <h2>Bộ sưu tập mới!</h2>
                                    <h3>Liên hện ngay đến hotline: 0123456789</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="public/images/banners/banner2_2-httk.jpg" class="d-block w-100" style="width: 100%; height: 500px" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="public/images/banners/banner2_3-httk.jpg" class="d-block w-100" style="width: 100%; height: 500px" alt="">
                                <div class="carousel-caption">
                                    <h2>Bộ sưu tập mới!</h2>
                                    <h3>Liên hện ngay đến hotline: 0123456789</h3>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 text-center" style="margin-top: 50px;">
                <u>
                    <h1>ĐẶT TRƯỚC ĐỂ NHẬN ĐƯỢC NHỮNG ƯU ĐÃI HẤP DẪN!</h1>
                </u>
            </div>
        </div>
    </div>




    <!--FOOTER-->
    <footer>
        <?php
        include_once("public/templates/footer.php");
        ?>
    </footer>

    <!--header-script-->
    <script src="public/scripts/header.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

    <!--footer-script-->
    <script src="public/scripts/footer.js"></script>

    <!--hienthitimkiem-script-->
    <script src="public/scripts/hienthitimkiem.js"></script>
    <!--(chỉnh chỗ này)-->

    <!--bootstrap 5-script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>