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
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <a href="" class="carousel-item active">
                    <img src="public/images/banners/slide1-tc.jpg" class="d-block w-100" alt="">
                </a>
                <a href="" class="carousel-item">
                    <img src="public/images/banners/slide2-tc.jpg" class="d-block w-100" alt="">
                </a>
                <a href="" class="carousel-item">
                    <img src="public/images/banners/slide3-tc.jpg" class="d-block w-100" alt="">
                </a>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>
    <!--content 2-->
    <div class="container">

        <!--sp-siêu hot-->
        <div class="row">
            <div class="col">
                <div class="heading">
                    <h2 class="text-uppercase">New arrrivals</h2>
                    <a class="more" href="#">Xem thêm</a>
                </div>
            </div>
        </div>
        <div class="row pro-list">
            <div class="col-lg-3 col-md-6 col-6 products">
                <div class="pro-img">
                    <div class="pro-sale"><span>-10%</span></div>
                    <a href="#">
                        <img class="pro-img pro-img-1" src="public/images/products/sp1-1-tc.jpg">
                        <img class="pro-img" src="public/images/products/sp1-tc.jpg">

                    </a>
                    <div class="pro-btn d-flex">
                        <button type="submit" class="hidden-btn">Mua ngay</button>
                        <button type="submit" class="hidden-btn ms-1">Thêm vào giỏ</button>
                    </div>
                </div>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">Item</a></h3>
                    <div class="pro-price">
                        <p class="pro-price sale">2,345,678₫
                            <span class="pro-price-retail"><del>3,456,789₫</del></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 products">
                <div class="pro-img">
                    <div class="pro-sale"><span>-10%</span></div>
                    <a href="#">
                        <img class="pro-img pro-img-1" src="public/images/products/sp1-1-tc.jpg">
                        <img class="pro-img" src="public/images/products/sp1-tc.jpg">

                    </a>
                    <div class="pro-btn d-flex">
                        <button type="submit" class="hidden-btn">Mua ngay</button>
                        <button type="submit" class="hidden-btn ms-1">Thêm vào giỏ</button>
                    </div>
                </div>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">Item</a></h3>
                    <div class="pro-price">
                        <p class="pro-price sale">2,345,678₫
                            <span class="pro-price-retail"><del>3,456,789₫</del></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 products">
                <div class="pro-img">
                    <div class="pro-sale"><span>-10%</span></div>
                    <a href="#">
                        <img class="pro-img pro-img-1" src="public/images/products/sp1-1-tc.jpg">
                        <img class="pro-img" src="public/images/products/sp1-tc.jpg">

                    </a>
                    <div class="pro-btn d-flex">
                        <button type="submit" class="hidden-btn">Mua ngay</button>
                        <button type="submit" class="hidden-btn ms-1">Thêm vào giỏ</button>
                    </div>
                </div>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">Item</a></h3>
                    <div class="pro-price">
                        <p class="pro-price sale">2,345,678₫
                            <span class="pro-price-retail"><del>3,456,789₫</del></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 products">
                <div class="pro-img">
                    <div class="pro-sale"><span>-10%</span></div>
                    <a href="#">
                        <img class="pro-img pro-img-1" src="public/images/products/sp1-1-tc.jpg">
                        <img class="pro-img" src="public/images/products/sp1-tc.jpg">

                    </a>
                    <div class="pro-btn d-flex">
                        <button type="submit" class="hidden-btn">Mua ngay</button>
                        <button type="submit" class="hidden-btn ms-1">Thêm vào giỏ</button>
                    </div>
                </div>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">Item</a></h3>
                    <div class="pro-price">
                        <p class="pro-price sale">2,345,678₫
                            <span class="pro-price-retail"><del>3,456,789₫</del></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 products">
                <div class="pro-img">
                    <div class="pro-sale"><span>-10%</span></div>
                    <a href="#">
                        <img class="pro-img pro-img-1" src="public/images/products/sp1-1-tc.jpg">
                        <img class="pro-img" src="public/images/products/sp1-tc.jpg">

                    </a>
                    <div class="pro-btn d-flex">
                        <button type="submit" class="hidden-btn">Mua ngay</button>
                        <button type="submit" class="hidden-btn ms-1">Thêm vào giỏ</button>
                    </div>
                </div>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">Item</a></h3>
                    <div class="pro-price">
                        <p class="pro-price sale">2,345,678₫
                            <span class="pro-price-retail"><del>3,456,789₫</del></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 products">
                <div class="pro-img">
                    <div class="pro-sale"><span>-10%</span></div>
                    <a href="#">
                        <img class="pro-img pro-img-1" src="public/images/products/sp1-1-tc.jpg">
                        <img class="pro-img" src="public/images/products/sp1-tc.jpg">

                    </a>
                    <div class="pro-btn d-flex">
                        <button type="submit" class="hidden-btn">Mua ngay</button>
                        <button type="submit" class="hidden-btn ms-1">Thêm vào giỏ</button>
                    </div>
                </div>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">Item</a></h3>
                    <div class="pro-price">
                        <p class="pro-price sale">2,345,678₫
                            <span class="pro-price-retail"><del>3,456,789₫</del></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 products">
                <div class="pro-img">
                    <div class="pro-sale"><span>-10%</span></div>
                    <a href="#">
                        <img class="pro-img pro-img-1" src="public/images/products/sp1-1-tc.jpg">
                        <img class="pro-img" src="public/images/products/sp1-tc.jpg">

                    </a>
                    <div class="pro-btn d-flex">
                        <button type="submit" class="hidden-btn">Mua ngay</button>
                        <button type="submit" class="hidden-btn ms-1">Thêm vào giỏ</button>
                    </div>
                </div>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">Item</a></h3>
                    <div class="pro-price">
                        <p class="pro-price sale">2,345,678₫
                            <span class="pro-price-retail"><del>3,456,789₫</del></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 products">
                <div class="pro-img">
                    <div class="pro-sale"><span>-10%</span></div>
                    <a href="#">
                        <img class="pro-img pro-img-1" src="public/images/products/sp1-1-tc.jpg">
                        <img class="pro-img" src="public/images/products/sp1-tc.jpg">

                    </a>
                    <div class="pro-btn d-flex">
                        <button type="submit" class="hidden-btn">Mua ngay</button>
                        <button type="submit" class="hidden-btn ms-1">Thêm vào giỏ</button>
                    </div>
                </div>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">Item</a></h3>
                    <div class="pro-price">
                        <p class="pro-price sale">2,345,678₫
                            <span class="pro-price-retail"><del>3,456,789₫</del></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!--sp-giảm giá-->
        <div class="row">
            <div class="col">
                <div class="heading">
                    <h2 class="text-uppercase">Best seller</h2>
                    <a class="more" href="#">Xem thêm</a>
                </div>
            </div>
        </div>

        <div class="row pro-list">
            <div class="col-lg-3 col-md-6 col-6 products">
                <div class="pro-img">
                    <div class="pro-sale"><span>-10%</span></div>
                    <a href="#">
                        <img class="pro-img pro-img-1" src="public/images/products/sp2-1-tc.jpg">
                        <img class="pro-img" src="public/images/products/sp2-tc.jpg">

                    </a>
                    <div class="pro-btn d-flex">
                        <button type="submit" class="hidden-btn">Mua ngay</button>
                        <button type="submit" class="hidden-btn ms-1">Thêm vào giỏ</button>
                    </div>
                </div>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">Item</a></h3>
                    <div class="pro-price">
                        <p class="pro-price sale">2,345,678₫
                            <span class="pro-price-retail"><del>3,456,789₫</del></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 products">
                <div class="pro-img">
                    <div class="pro-sale"><span>-10%</span></div>
                    <a href="#">
                        <img class="pro-img pro-img-1" src="public/images/products/sp2-1-tc.jpg">
                        <img class="pro-img" src="public/images/products/sp2-tc.jpg">

                    </a>
                    <div class="pro-btn d-flex">
                        <button type="submit" class="hidden-btn">Mua ngay</button>
                        <button type="submit" class="hidden-btn ms-1">Thêm vào giỏ</button>
                    </div>
                </div>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">Item</a></h3>
                    <div class="pro-price">
                        <p class="pro-price sale">2,345,678₫
                            <span class="pro-price-retail"><del>3,456,789₫</del></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 products">
                <div class="pro-img">
                    <div class="pro-sale"><span>-10%</span></div>
                    <a href="#">
                        <img class="pro-img pro-img-1" src="public/images/products/sp2-1-tc.jpg">
                        <img class="pro-img" src="public/images/products/sp2-tc.jpg">

                    </a>
                    <div class="pro-btn d-flex">
                        <button type="submit" class="hidden-btn">Mua ngay</button>
                        <button type="submit" class="hidden-btn ms-1">Thêm vào giỏ</button>
                    </div>
                </div>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">Item</a></h3>
                    <div class="pro-price">
                        <p class="pro-price sale">2,345,678₫
                            <span class="pro-price-retail"><del>3,456,789₫</del></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 products">
                <div class="pro-img">
                    <div class="pro-sale"><span>-10%</span></div>
                    <a href="#">
                        <img class="pro-img pro-img-1" src="public/images/products/sp2-1-tc.jpg">
                        <img class="pro-img" src="public/images/products/sp2-tc.jpg">

                    </a>
                    <div class="pro-btn d-flex">
                        <button type="submit" class="hidden-btn">Mua ngay</button>
                        <button type="submit" class="hidden-btn ms-1">Thêm vào giỏ</button>
                    </div>
                </div>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">Item</a></h3>
                    <div class="pro-price">
                        <p class="pro-price sale">2,345,678₫
                            <span class="pro-price-retail"><del>3,456,789₫</del></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 products">
                <div class="pro-img">
                    <div class="pro-sale"><span>-10%</span></div>
                    <a href="#">
                        <img class="pro-img pro-img-1" src="public/images/products/sp2-1-tc.jpg">
                        <img class="pro-img" src="public/images/products/sp2-tc.jpg">

                    </a>
                    <div class="pro-btn d-flex">
                        <button type="submit" class="hidden-btn">Mua ngay</button>
                        <button type="submit" class="hidden-btn ms-1">Thêm vào giỏ</button>
                    </div>
                </div>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">Item</a></h3>
                    <div class="pro-price">
                        <p class="pro-price sale">2,345,678₫
                            <span class="pro-price-retail"><del>3,456,789₫</del></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 products">
                <div class="pro-img">
                    <div class="pro-sale"><span>-10%</span></div>
                    <a href="#">
                        <img class="pro-img pro-img-1" src="public/images/products/sp2-1-tc.jpg">
                        <img class="pro-img" src="public/images/products/sp2-tc.jpg">

                    </a>
                    <div class="pro-btn d-flex">
                        <button type="submit" class="hidden-btn">Mua ngay</button>
                        <button type="submit" class="hidden-btn ms-1">Thêm vào giỏ</button>
                    </div>
                </div>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">Item</a></h3>
                    <div class="pro-price">
                        <p class="pro-price sale">2,345,678₫
                            <span class="pro-price-retail"><del>3,456,789₫</del></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 products">
                <div class="pro-img">
                    <div class="pro-sale"><span>-10%</span></div>
                    <a href="#">
                        <img class="pro-img pro-img-1" src="public/images/products/sp2-1-tc.jpg">
                        <img class="pro-img" src="public/images/products/sp2-tc.jpg">

                    </a>
                    <div class="pro-btn d-flex">
                        <button type="submit" class="hidden-btn">Mua ngay</button>
                        <button type="submit" class="hidden-btn ms-1">Thêm vào giỏ</button>
                    </div>
                </div>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">Item</a></h3>
                    <div class="pro-price">
                        <p class="pro-price sale">2,345,678₫
                            <span class="pro-price-retail"><del>3,456,789₫</del></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 products">
                <div class="pro-img">
                    <div class="pro-sale"><span>-10%</span></div>
                    <a href="#">
                        <img class="pro-img pro-img-1" src="public/images/products/sp2-1-tc.jpg">
                        <img class="pro-img" src="public/images/products/sp2-tc.jpg">

                    </a>
                    <div class="pro-btn d-flex">
                        <button type="submit" class="hidden-btn">Mua ngay</button>
                        <button type="submit" class="hidden-btn ms-1">Thêm vào giỏ</button>
                    </div>
                </div>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">Item</a></h3>
                    <div class="pro-price">
                        <p class="pro-price sale">2,345,678₫
                            <span class="pro-price-retail"><del>3,456,789₫</del></span>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--sp cháy hàng-->
    <div class="row">
        <div class="col">
            <div class="heading">
                <h2 class="text-uppercase">Hot sale</h2>
                <a class="more" href="#">Xem thêm</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row pro-list">
            <div class="col-lg-3 col-md-6 col-6 products">
                <div class="pro-img">
                    <div class="pro-sale"><span>-10%</span></div>
                    <a href="#">
                        <img class="pro-img pro-img-1" src="public/images/products/sp3-1-tc.jpg">
                        <img class="pro-img" src="public/images/products/sp3-tc.jpg">

                    </a>
                    <div class="pro-btn d-flex">
                        <button type="submit" class="hidden-btn">Mua ngay</button>
                        <button type="submit" class="hidden-btn ms-1">Thêm vào giỏ</button>
                    </div>
                </div>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">Item</a></h3>
                    <div class="pro-price">
                        <p class="pro-price sale">2,345,678₫
                            <span class="pro-price-retail"><del>3,456,789₫</del></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 products">
                <div class="pro-img">
                    <div class="pro-sale"><span>-10%</span></div>
                    <a href="#">
                        <img class="pro-img pro-img-1" src="public/images/products/sp3-1-tc.jpg">
                        <img class="pro-img" src="public/images/products/sp3-tc.jpg">

                    </a>
                    <div class="pro-btn d-flex">
                        <button type="submit" class="hidden-btn">Mua ngay</button>
                        <button type="submit" class="hidden-btn ms-1">Thêm vào giỏ</button>
                    </div>
                </div>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">Item</a></h3>
                    <div class="pro-price">
                        <p class="pro-price sale">2,345,678₫
                            <span class="pro-price-retail"><del>3,456,789₫</del></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 products">
                <div class="pro-img">
                    <div class="pro-sale"><span>-10%</span></div>
                    <a href="#">
                        <img class="pro-img pro-img-1" src="public/images/products/sp3-1-tc.jpg">
                        <img class="pro-img" src="public/images/products/sp3-tc.jpg">

                    </a>
                    <div class="pro-btn d-flex">
                        <button type="submit" class="hidden-btn">Mua ngay</button>
                        <button type="submit" class="hidden-btn ms-1">Thêm vào giỏ</button>
                    </div>
                </div>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">Item</a></h3>
                    <div class="pro-price">
                        <p class="pro-price sale">2,345,678₫
                            <span class="pro-price-retail"><del>3,456,789₫</del></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 products">
                <div class="pro-img">
                    <div class="pro-sale"><span>-10%</span></div>
                    <a href="#">
                        <img class="pro-img pro-img-1" src="public/images/products/sp3-1-tc.jpg">
                        <img class="pro-img" src="public/images/products/sp3-tc.jpg">

                    </a>
                    <div class="pro-btn d-flex">
                        <button type="submit" class="hidden-btn">Mua ngay</button>
                        <button type="submit" class="hidden-btn ms-1">Thêm vào giỏ</button>
                    </div>
                </div>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">Item</a></h3>
                    <div class="pro-price">
                        <p class="pro-price sale">2,345,678₫
                            <span class="pro-price-retail"><del>3,456,789₫</del></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 products">
                <div class="pro-img">
                    <div class="pro-sale"><span>-10%</span></div>
                    <a href="#">
                        <img class="pro-img pro-img-1" src="public/images/products/sp3-1-tc.jpg">
                        <img class="pro-img" src="public/images/products/sp3-tc.jpg">

                    </a>
                    <div class="pro-btn d-flex">
                        <button type="submit" class="hidden-btn">Mua ngay</button>
                        <button type="submit" class="hidden-btn ms-1">Thêm vào giỏ</button>
                    </div>
                </div>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">Item</a></h3>
                    <div class="pro-price">
                        <p class="pro-price sale">2,345,678₫
                            <span class="pro-price-retail"><del>3,456,789₫</del></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 products">
                <div class="pro-img">
                    <div class="pro-sale"><span>-10%</span></div>
                    <a href="#">
                        <img class="pro-img pro-img-1" src="public/images/products/sp3-1-tc.jpg">
                        <img class="pro-img" src="public/images/products/sp3-tc.jpg">

                    </a>
                    <div class="pro-btn d-flex">
                        <button type="submit" class="hidden-btn">Mua ngay</button>
                        <button type="submit" class="hidden-btn ms-1">Thêm vào giỏ</button>
                    </div>
                </div>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">Item</a></h3>
                    <div class="pro-price">
                        <p class="pro-price sale">2,345,678₫
                            <span class="pro-price-retail"><del>3,456,789₫</del></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 products">
                <div class="pro-img">
                    <div class="pro-sale"><span>-10%</span></div>
                    <a href="#">
                        <img class="pro-img pro-img-1" src="public/images/products/sp3-1-tc.jpg">
                        <img class="pro-img" src="public/images/products/sp3-tc.jpg">

                    </a>
                    <div class="pro-btn d-flex">
                        <button type="submit" class="hidden-btn">Mua ngay</button>
                        <button type="submit" class="hidden-btn ms-1">Thêm vào giỏ</button>
                    </div>
                </div>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">Item</a></h3>
                    <div class="pro-price">
                        <p class="pro-price sale">2,345,678₫
                            <span class="pro-price-retail"><del>3,456,789₫</del></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 products">
                <div class="pro-img">
                    <div class="pro-sale"><span>-10%</span></div>
                    <a href="#">
                        <img class="pro-img pro-img-1" src="public/images/products/sp3-1-tc.jpg">
                        <img class="pro-img" src="public/images/products/sp3-tc.jpg">

                    </a>
                    <div class="pro-btn d-flex">
                        <button type="submit" class="hidden-btn">Mua ngay</button>
                        <button type="submit" class="hidden-btn ms-1">Thêm vào giỏ</button>
                    </div>
                </div>
                <div class="pro-detail">
                    <h3 class="pro-name"><a href="#">Item</a></h3>
                    <div class="pro-price">
                        <p class="pro-price sale">2,345,678₫
                            <span class="pro-price-retail"><del>3,456,789₫</del></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--content 3-->
        <a href=""><img width="100%" src="public/images/banners/img-tc.jpeg"></a>

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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

    <!--footer-script-->
    <script src="public/scripts/footer.js"></script>

    <!--trangchu-script-->

    <!--bootstrap 5-script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>