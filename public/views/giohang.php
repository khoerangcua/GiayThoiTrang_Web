<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <!--bootstrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <!--link style-->
    <link rel="stylesheet" href="public/styles/header.css">
    <link rel="stylesheet" href="public/styles/footer.css">
    <link rel="stylesheet" href="public/styles/giohang.css">
    <!--(chỉnh chỗ này)-->
</head>

<body>
    <!--HEADER-->
    <header>
        <?php
        include_once("public/templates/header.php");
        ?>
    </header>
    <!--breadcrumb-->

    <nav style="background-color:#F8F8F8" aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
            </ol>
        </div>
    </nav>

    <!--CONTENT (chỉnh chỗ này)-->

    <div class="container">
        <!-- heading1-->

        <div class="row">
            <div class="col">
                <div class="heading">
                    <h2>Giỏ hàng của bạn</h2>
                </div>
            </div>
        </div>

        <!-- cart-->

        <div class="row">
            <div class="col-lg-8 col-sm-12 cart-info">
                <p class="cart-note">Bạn đang có <b>2</b> sản phẩm trong giỏ hàng</p>
                <div class="row cart-items">
                    <div class="col-md-5 col-lg-3 col-xl-3 col-3">
                        <a href="#!">
                            <img class="img-fluid w-100" src="public/images/products/AM96A-ttsp.png">
                        </a>
                    </div>

                    <div class="col-md-7 col-lg-9 col-xl-9 col-9">
                        <div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h3>Product 1</h3>
                                    <p class="mb-3 text-muted text-uppercase small">Size: 41</p>
                                    <p class="mb-2 text-muted text-uppercase small">Color: White/Black</p>
                                </div>
                                <div class="qty">
                                    <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus decrease">-</button>
                                    <input type="number" size="4" name="updates[]" min="1" value="1" class="cart-number">
                                    <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus increase">+</button>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <a href="#!" type="button" class="card-link-secondary small text-uppercase mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg>
                                    </a>
                                </div>
                                <p class="mb-0"><span><strong>2,345,678₫</strong></span></p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row cart-items">
                    <div class="col-md-5 col-lg-3 col-xl-3 col-3">
                        <a href="#!">
                            <img class="img-fluid w-100" src="public/images/products/AM96A-ttsp.png">
                        </a>
                    </div>

                    <div class="col-md-7 col-lg-9 col-xl-9 col-9">
                        <div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h3>Product 1</h3>
                                    <p class="mb-3 text-muted text-uppercase small">Size: 41</p>
                                    <p class="mb-2 text-muted text-uppercase small">Color: White/Black</p>
                                </div>
                                <div class="qty">
                                    <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus decrease">-</button>
                                    <input type="number" size="4" name="updates[]" min="1" value="1" class="cart-number">
                                    <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus increase">+</button>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <a href="#!" type="button" class="card-link-secondary small text-uppercase mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg>
                                    </a>
                                </div>
                                <p class="mb-0"><span><strong>2,345,678₫</strong></span></p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row cart-note">
                    <div class="col-md-5 col-12">
                        <label class="cart-note-label">Ghi chú đơn hàng</label>
                        <textarea></textarea>
                    </div>
                    <div class="col-md-7 col 12">
                        <p class="cart-note-label">Chính sách đổi trả</p>
                        <ul class="policy">
                            <li>Chính sách 1</li>
                            <li>Chính sách 2</li>
                            <li>Chính sách 3</li>
                            <li>Chính sách 4</li>
                            <li>Chính sách 5</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <a href="#" class="continue">Tiếp tục mua hàng →</a>
                <div class="cart-summary">
                    <h3>Thông tin thanh toán</h3>
                    <div class="summary-total">
                        <p>
                            Tổng tiền: <span>2,345,678₫</span>
                        </p>
                    </div>
                    <h5>Bạn có thể nhập mã giảm giá khi xác nhận thanh toán</h5>
                    <a class="checkout-btn" href="#">THANH TOÁN</a>
                </div>
            </div>
        </div>

        <!--heading 2-->
        <div class="row">
            <div class="col">
                <div class="heading">
                    <h2>Có thể bạn sẽ thích</h2>
                    <a class="more" href="#">Xem thêm</a>
                </div>
            </div>
        </div>
        <!--co the ban se thich-->

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

    <!--giohang-script-->

    <!--bootstrap 5-script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>