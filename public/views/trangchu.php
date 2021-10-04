<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <!--bootstrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <!--link style-->
    <link rel="stylesheet" href="public/styles/header.css">
    <link rel="stylesheet" href="public/styles/footer.css">
    <link rel="stylesheet" href="public/styles/trangchu.css">
    <!--(chỉnh chỗ này)-->
</head>

<body>
    <!--HEADER-->
    <header>
        <?php
        include_once("public/templates/header.php");
        ?>
    </header>


    <!--CONTENT (chỉnh chỗ này)-->

    <!--content 1-->
    <div class="container-fluid">

        <!--slider1-->
        <div class="row" id="slider">
            <div class="col">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="width: 100%;">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="public/images/products/sneaker1-tc.jpg" class="d-block w-100" style="width: 100%; height: 500px"
                                alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="public/images/banners/showroom-tc.jpg" class="d-block w-100" style="width: 100%; height: 500px"
                                alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="public/images/banners/showroom2-tc.jpg" class="d-block w-100" style="width: 100%; height: 500px"
                                alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="public/images/banners/sale-tc.jpg" class="d-block w-100" style="width: 100%; height: 500px"
                                alt="">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

    </div>
    <!--content 2-->
    <div class="container">

        <!--sp-siêu hot-->
        <div class="row heading ">
            <h2>Hàng mới siêu hót</h2>

            <h5>Hãy khoác ngay lên đôi chân của bạn một bộ cánh thật thời thượng</h5>
        </div>
        <div class="row pro-list">
            <div class="col-lg-3 col-md-6 col-6 products">
                <a href="#"><img class="pro-img" src="public/images/products/sp-tc.jpg"></a>
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
                <a href="#"><img class="pro-img" src="public/images/products/sp-tc.jpg"></a>
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
                <a href="#"><img class="pro-img" src="public/images/products/sp-tc.jpg"></a>
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
                <a href="#"><img class="pro-img" src="public/images/products/sp-tc.jpg"></a>
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
                <a href="#"><img class="pro-img" src="public/images/products/sp-tc.jpg"></a>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">kong on the street</a></h3>
                    <p class="pro-price">2,345,678₫</p>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-6 products">
                <a href="#"><img class="pro-img" src="public/images/products/sp-tc.jpg"></a>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">kong on the street</a></h3>
                    <p class="pro-price">2,345,678₫</p>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-6 products">
                <a href="#"><img class="pro-img" src="public/images/products/sp-tc.jpg"></a>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">kong on the street</a></h3>
                    <p class="pro-price">2,345,678₫</p>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-6 products">
                <a href="#"><img class="pro-img" src="public/images/products/sp-tc.jpg"></a>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">kong on the street</a></h3>
                    <p class="pro-price">2,345,678₫</p>
                </div>
            </div>
        </div>

        <div class="d-grid gap-2 col-1 mx-auto">
            <button class="btn btn-outline-info " type="button">Xem thêm</button>
        </div>

        <!--sp-giảm giá-->
        <div class="row heading">
            <h2>Cùng săn sale - Cùng nhận ưu đãi </h2>

            <h5>Nhanh tay chọn cho mình những mẫu giày đẹp mắt mà giá hạt giẻ ngay và luôn bạn nhé</h5>
        </div>

        <div class="row pro-list">
            <div class="col-lg-3 col-md-6 col-6 products">
                <a href="#"><img class="pro-img" src="public/images/products/sp-tc.jpg"></a>
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
                <a href="#"><img class="pro-img" src="public/images/products/sp-tc.jpg"></a>
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
                <a href="#"><img class="pro-img" src="public/images/products/sp-tc.jpg"></a>
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
                <a href="#"><img class="pro-img" src="public/images/products/sp-tc.jpg"></a>
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
                <a href="#"><img class="pro-img" src="public/images/products/sp-tc.jpg"></a>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">kong on the street</a></h3>
                    <p class="pro-price">2,345,678₫</p>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-6 products">
                <a href="#"><img class="pro-img" src="public/images/products/sp-tc.jpg"></a>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">kong on the street</a></h3>
                    <p class="pro-price">2,345,678₫</p>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-6 products">
                <a href="#"><img class="pro-img" src="public/images/products/sp-tc.jpg"></a>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">kong on the street</a></h3>
                    <p class="pro-price">2,345,678₫</p>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-6 products">
                <a href="#"><img class="pro-img" src="public/images/products/sp-tc.jpg"></a>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">kong on the street</a></h3>
                    <p class="pro-price">2,345,678₫</p>
                </div>
            </div>
        </div>

        <div class="d-grid gap-2 col-1 mx-auto">
            <button class="btn btn-outline-info " type="button">Xem thêm</button>
        </div>

        <!--sp cháy hàng-->
        <div class="row heading ">
            <h2>Sản phẩm cháy hàng</h2>

            <h5>Cùng chào đón những mẫu giày bán chạy nhất nhé!</h5>
        </div>

        <div class="row pro-list">
            <div class="col-lg-3 col-md-6 col-6 products">
                <a href="#"><img class="pro-img" src="public/images/products/sp-tc.jpg"></a>
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
                <a href="#"><img class="pro-img" src="public/images/products/sp-tc.jpg"></a>
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
                <a href="#"><img class="pro-img" src="public/images/products/sp-tc.jpg"></a>
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
                <a href="#"><img class="pro-img" src="public/images/products/sp-tc.jpg"></a>
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
                <a href="#"><img class="pro-img" src="public/images/products/sp-tc.jpg"></a>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">kong on the street</a></h3>
                    <p class="pro-price">2,345,678₫</p>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-6 products">
                <a href="#"><img class="pro-img" src="public/images/products/sp-tc.jpg"></a>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">kong on the street</a></h3>
                    <p class="pro-price">2,345,678₫</p>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-6 products">
                <a href="#"><img class="pro-img" src="public/images/products/sp-tc.jpg"></a>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">kong on the street</a></h3>
                    <p class="pro-price">2,345,678₫</p>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-6 products">
                <a href="#"><img class="pro-img" src="public/images/products/sp-tc.jpg"></a>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">kong on the street</a></h3>
                    <p class="pro-price">2,345,678₫</p>
                </div>
            </div>
        </div>

        <div class="d-grid gap-2 col-1 mx-auto">
            <button class="btn btn-outline-info setbt" type="button">Xem thêm</button>
        </div>
    </div>
    <!--content 3-->
    <div class="container-fluid">
        <!--slider 2-->
        <div class="row">
            <div class="col">
                <div id="carouselControls" class="carousel slide" data-bs-ride="carousel" style="width: 100%">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="public/images/banners/anh-giay-converse-tc.jpg" class="d-block w-100"
                                style="width: 100%; height: 500px" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="public/images/banners/giay-tc.jpg" class="d-block w-100" style="width: 100%; height: 500px"
                                alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="public/images/banners/doigiay-tc.jpg" class="d-block w-100" style="width: 100%; height: 500px"
                                alt="">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

    </div>
    <!--content 4-->

    <div class="container">
        <div class="row" id="ThongTinT">
            <div class="col-md-4 col-xs-4 ttin">

                <h2>Cam Kết chính hãng</h2>
                <img class="morett" src="public/images/icons/quality-tc.png">
            </div>
            <div class="col-md-4 col-xs-4 ttin">
                <h2>Giao hàng toàn quốc</h2>
                <img class="morett" src="public/images/icons/shipping-tc.png">
            </div>
            <div class="col-md-4 col-xs-4 ttin">
                <h2>Hỗ trợ 24/24</h2>
                <img class="morett" src="public/images/icons/support-tc.png">
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
        integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/"
        crossorigin="anonymous"></script>

    <!--footer-script-->
    <script src="public/scripts/footer.js"></script>

    <!--trangchu-script-->

    <!--bootstrap 5-script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>