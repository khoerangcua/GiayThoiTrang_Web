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
    <div class="container">

        <!--TIỀU ĐỀ-->
        <div class="row">
            <div class="col-lg-12 text-center" style="padding:40px 0px">
                <h2>New Drops </h2>
            </div>
        </div>

        <!--BỘ LỌC-->
        <div class="row">
            <div class="col-lg-3">
                <div class="filter">
                    <div>
                        <span class="filter-heading">Bộ lọc</span>
                       
                    </div>
                    <div>
                        <span class="filter-heading">Thương hiệu</span>
                        <span class="filter-control" onClick="filterbrandtoggle()">+</span>
                        <div class="filter-brands">
                            <ul id="filter-brand-items">
                                <li class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        adidas
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        nike
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        jordan
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        vans
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        mlb
                                    </label>
                                </li>


                            </ul>
                        </div>
                    </div>
                    <div class="filter-price">
                        <span class="filter-heading">Giá</span>
                        <span class="filter-control" onClick="filterpricetoggle()">+</span>
                        <ul id="filter-price-items">
                            <li class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Dưới 1,000,000₫
                                </label>
                            </li>
                            <li class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    1,000,000₫ - 2,000,000₫
                                </label>
                            </li>
                            <li class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    2,000,000₫ - 3,500,000₫
                                </label>
                            </li>
                            <li class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    3,500,000₫ - 5,000,000₫
                                </label>
                            </li>
                            <li class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Trên 5,000,000₫
                                </label>
                            </li>


                        </ul>
                    </div>
                    <div class="filter-size">
                        <span class="filter-heading">Kích thước</span>
                        <span class="filter-control" onClick="filtersizetoggle()">+</span>
                        <ul id="filter-size-items">
                            <li>
                                <input type="checkbox" class="size-selector" name="options" id="37" autocomplete="off">
                                <label class="size-btn" for="37">37</label>
                            </li>
                            <li>
                                <input type="checkbox" class="size-selector" name="options" id="37.5" autocomplete="off">
                                <label class="size-btn" for="37.5">37.5</label>
                            </li>
                            <li>
                                <input type="checkbox" class="size-selector" name="options" id="38" autocomplete="off">
                                <label class="size-btn" for="38">38</label>
                            </li>
                            <li>
                                <input type="checkbox" class="size-selector" name="options" id="38.5" autocomplete="off">
                                <label class="size-btn" for="38.5">38.5</label>
                            </li>
                            <li>
                                <input type="checkbox" class="size-selector" name="options" id="39" autocomplete="off">
                                <label class="size-btn" for="39">39</label>
                            </li>
                            <li>
                                <input type="checkbox" class="size-selector" name="options" id="39.5" autocomplete="off">
                                <label class="size-btn" for="39.5">39.5</label>
                            </li>
                            <li>
                                <input type="checkbox" class="size-selector" name="options" id="40" autocomplete="off">
                                <label class="size-btn" for="40">40</label>
                            </li>
                            <li>
                                <input type="checkbox" class="size-selector" name="options" id="40.5" autocomplete="off">
                                <label class="size-btn" for="40.5">40.5</label>
                            </li>
                            <li>
                                <input type="checkbox" class="size-selector" name="options" id="41" autocomplete="off">
                                <label class="size-btn" for="41">41</label>
                            </li>
                            <li>
                                <input type="checkbox" class="size-selector" name="options" id="41.5" autocomplete="off">
                                <label class="size-btn" for="41.5">41.5</label>
                            </li>
                            <li>
                                <input type="checkbox" class="size-selector" name="options" id="42" autocomplete="off">
                                <label class="size-btn" for="42">42</label>
                            </li>
                            <li>
                                <input type="checkbox" class="size-selector" name="options" id="42.5" autocomplete="off">
                                <label class="size-btn" for="42.5">42.5</label>
                            </li>
                            <li>
                                <input type="checkbox" class="size-selector" name="options" id="43" autocomplete="off">
                                <label class="size-btn" for="43">43</label>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <!--LƯỚI SẢN PHẨM-->
            <div class="col-lg-9">
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