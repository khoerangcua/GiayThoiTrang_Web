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
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/hienthitimkiem.css">
</head>

<body>
    <!--HEADER-->
    
    <header>
        <div class="container-fluid">
            <div class="navbar">
                <img src="images/header-icon.png" width="100px"><img>
                <nav class="m-auto">
                    <ul id="menuitems">
                        <li>
                            <a href="#">Tất cả sản phẩm</a>
                        </li>

                        <li class="nav-item">
                            <a href="#">Adidas</a>
                        </li>
                        <li class="nav-item">
                            <a href="#">Nike</a>
                        </li>
                        <li class="nav-item">
                            <a href="#">Jordan</a>
                        </li>
                        <li class="nav-item">
                            <a href="#">MLB</a>
                        </li>
                        <li class="nav-item">
                            <a href="#">Vans</a>
                        </li>
                    </ul>
                </nav>

                <div class="navbar action-menu">
                    <div class="action-search">
                        <a href="#" title="Tìm kiếm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </a>
                    </div>
                    <div class="action-cart">
                        <a href="#" title="Giỏ hàng">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-cart2" viewBox="0 0 16 16">
                                <path
                                    d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                            </svg>
                        </a>
                    </div>
                    <span class="menu-icon" onClick="menutoggle()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </span>
                </div>
            </div>
        </div>
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
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"
                                id="dropnav"></button>
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
                                    <a href="#"><img class="pro-img" src="images/giay3-httk.jpg">
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
                                    <a href="#"><img class="pro-img" src="images/giay3-httk.jpg">
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
                                    <a href="#"><img class="pro-img" src="images/giay3-httk.jpg">
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
                                    <a href="#"><img class="pro-img" src="images/giay3-httk.jpg">
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
                                    <a href="#"><img class="pro-img" src="images/giay3-httk.jpg">
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
                                    <a href="#"><img class="pro-img" src="images/giay3-httk.jpg">
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
                                    <a href="#"><img class="pro-img" src="images/giay3-httk.jpg">
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
                                    <a href="#"><img class="pro-img" src="images/giay3-httk.jpg">
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
                                    <a href="#"><img class="pro-img" src="images/giay3-httk.jpg">
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
                                    <a href="#"><img class="pro-img" src="images/giay3-httk.jpg">
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
                                    <a href="#"><img class="pro-img" src="images/giay3-httk.jpg">
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
                                    <a href="#"><img class="pro-img" src="images/giay3-httk.jpg">
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
                                    <a href="#"><img class="pro-img" src="images/giay3-httk.jpg">
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
                                    <a href="#"><img class="pro-img" src="images/giay3-httk.jpg">
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
                                    <a href="#"><img class="pro-img" src="images/giay3-httk.jpg">
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
                                    <a href="#"><img class="pro-img" src="images/giay3-httk.jpg">
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
                <div class="text-center" > 
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
                    <img class="logo-sale" src="images/logoA2-httk.jpg">
                    <h1>UP TO 35%</h1>
                </div>
            </div>
            <div class="col-lg-7 padding-0">
                <a href="#"><img class="banner-img" src="images/banner3-httk.jpg"></a>
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
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel"
                        style="width: 100%">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/banner2_1-httk.jpg" class="d-block w-100" style="width: 100%; height: 500px"
                                    alt="">
                                <div class="carousel-caption">
                                    <h2>Bộ sưu tập mới!</h2>
                                    <h3>Liên hện ngay đến hotline: 0123456789</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/banner2_2-httk.jpg" class="d-block w-100" style="width: 100%; height: 500px"
                                    alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="images/banner2_3-httk.jpg" class="d-block w-100" style="width: 100%; height: 500px"
                                    alt="">
                                <div class="carousel-caption">
                                    <h2>Bộ sưu tập mới!</h2>
                                    <h3>Liên hện ngay đến hotline: 0123456789</h3>
                                </div>
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
        <div class="container-fluid ">
            <div class="row no-gutters ftr-background">
                <!--left_side-->
                <div class="col-12 col-sm-12 col-md-12  col-lg-4 col-xl-4">
                    <!--white_space-->
                    <div class="row position-absolute no-gutters" style="width: calc(100% + 21px);">
                        <div class="col ftr-whitespace"></div>
                    </div>
                    <!--picture-->
                    <div class="row" style="text-align: center;">
                        <div class="col" id="ftr-image">
                            <img class="ftr-image" src="images/ftr-image6.jpg" alt="">
                        </div>
                    </div>
                    <!--shop's name-->
                    <div class="row">
                        <div class="col">
                            <h2 class="ftr-shopname">STRESS KONG</h2>
                        </div>
                    </div>
                </div>
                <!--right_side-->
                <div class="col-12 col-sm-12 col-md-12  col-lg-8 col-xl-8" style="padding: 0px;">
                    <!--white_space-->
                    <div class="row no-gutters" style="width: 100%; z-index: 5;">
                        <div class="col ftr-whitespace"></div>
                    </div>
                    <!--content-->
                    <div class="row ">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <h3 class="ftr-title">Thông tin liên hệ</h3>
                            <ul id="ct-if">
                                <li class="ftr-li">
                                    <div class="containter">
                                        <div class="row no-gutters">

                                            <div class="col-2">
                                                <!--phone-icon-->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-telephone-fill"
                                                    viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                                </svg>
                                            </div>
                                            <div class="col-10">
                                                <p>0123456789</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="ftr-li">
                                    <div class="containter">
                                        <div class="row no-gutters">
                                            <div class="col-2">
                                                <!--location-icon-->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                                </svg>
                                            </div>
                                            <div class="col-10">
                                                <p>123 Đường abc, phường 1, quận WQ, TP.Hồ Chí Minh</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="ftr-li">
                                    <div class="containter">
                                        <div class="row no-gutters">
                                            <div class="col-2">
                                                <!--mail-icon-->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                                                </svg>
                                            </div>
                                            <div class="col-10">
                                                <p>abcde@gmai.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="ftr-li">
                                    <div class="containter">
                                        <div class="row no-gutters">
                                            <div class="col-2">
                                                <!--time-icon-->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                </svg>
                                            </div>
                                            <div class="col-10">
                                                <p>8h - 19h</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <!--chính sách-->
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <h3 class="ftr-title">Chính sách</h3>
                            <ul>
                                <li class="ftr-li"><a href="">
                                        <p>Lorem ipsum dolor sit amet consectetur </p>
                                    </a></li>
                                <li class="ftr-li"><a href="">
                                        <p>Lorem ipsum dolor sit amet consectetur </p>
                                    </a></li>
                                <li class="ftr-li"><a href="">
                                        <p>Lorem ipsum dolor sit amet consectetur </p>
                                    </a></li>
                                <li class="ftr-li"><a href="">
                                        <p>Lorem ipsum dolor sit amet consectetur </p>
                                    </a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <hr style="height:2px;border: width 5px;color:gray;background-color:gray">
                        </div>
                    </div>


                    <div class="row">
                        <!--bản quyền-->
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <p class="ftr-copyright">© 2021 shop's name, Inc. All Rights Reserved</p>

                        </div>
                        <!--media icon-->
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="row ftr-row-media">
                                <div class="col" style="text-align: right;">
                                    <!--face-icon-->
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-facebook ftr-media" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                        </svg>
                                    </a>
                                    <!--youtube-icon-->
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-youtube ftr-media" viewBox="0 0 16 16">
                                            <path
                                                d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                                        </svg>
                                    </a>
                                    <!--instagram-icon-->
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-instagram ftr-media" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                        </svg>
                                    </a>
                                    <!--twitter-icon-->
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-twitter ftr-media" viewBox="0 0 16 16">
                                            <path
                                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <div id="back-to-top">
                <a href="" onclick="topFunction">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-up-square-fill up-icon" viewBox="0 0 16 16">
                        <path
                            d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0z" />
                    </svg>

                </a>
            </div>

        </div>
    </footer>

    <!--header-script-->
    <script src="scripts/header.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
        integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/"
        crossorigin="anonymous"></script>

    <!--footer-script-->
    <script src="scripts/footer.js"></script>

    <!--hienthitimkiem-script-->
    <script src="scripts/hienthitimkiem.js"></script>
    <!--(chỉnh chỗ này)-->

    <!--bootstrap 5-script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>