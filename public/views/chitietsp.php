<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin sản phẩm</title>
    <!--bootstrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <!--link style-->
    <link rel="stylesheet" href="public/styles/header.css">
    <link rel="stylesheet" href="public/styles/footer.css">
    <!--(chỉnh chỗ này)-->
    <link rel="stylesheet" href="public/styles/thongtinsp.css">
</head>

<body>
    <!--HEADER-->
    <header>
        <?php
        include_once("public/templates/header.php");
        ?>
    </header>


    <!--CONTENT (chỉnh chỗ này)-->
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-12">
                <div class="imgpro">
                    <ul class="picture">
                        <img width="98%" src="public/images/products/AM96A-ttsp.png" alt="" id="ProductImg">
                    </ul>
                    <ul>
                        <img style="padding-right: 10px;" width="24%" src="public/images/products/AM96A-ttsp.png" alt=""
                            class="small-img">
                        <img style="padding-right: 10px;" width="24%" src="public/images/products/A1-ttsp.png" alt="" class="small-img">
                        <img style="padding-right: 10px;" width="24%" src="public/images/products/A2-ttsp.png" alt="" class="small-img">
                        <img style="padding-right: 10px;" width="24%" src="public/images/products/A3-ttsp.png" alt="" class="small-img">
                    </ul>

                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-12">
                <div class="infor">
                    <div>
                        <ul class="name">
                            <h3> Air Max 96 II</h3>
                            <h3> 4,699,000đ</h3>
                        </ul>
                        <ul class="Loai">
                            <a href="">
                                <img style="margin: 10px;" src="public/images/products/AM96A-ttsp.png" width="70px" alt="">
                            </a>
                            <a href="">
                                <img src="public/images/products/AM96-ttsp.png" width="70px" alt="">
                            </a>
                        </ul>
                        <ul>
                            <h3>
                                Chọn Size
                            </h3>
                        </ul>
                        <ul class="size">
                            <button type="button" class="btn btn-light">40</button>
                            <button type="button" class="btn btn-light">40.5</button>
                            <button type="button" class="btn btn-light">41</button>
                            <button type="button" class="btn btn-light">41.5</button>
                            <button type="button" class="btn btn-light">42</button>
                            <button type="button" class="btn btn-light">42.5</button>
                            <button type="button" class="btn btn-light">43</button>
                            <button type="button" class="btn btn-light">44</button>
                            <button type="button" class="btn btn-light">44.5</button>
                        </ul>
                        <ul class="button">
                            <button style="margin:0px 30px 30px 30px;" type="button" class="btn btn-danger btn-lg">Mua
                                Ngay</button>
                            <button style="margin:0px 30px 30px 30px;" type="button" class="btn btn-info btn-lg">Thêm
                                vào giỏ hàng</button>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
        <div class="introduction">
            <ul>
                <h2>Giới thiệu</h2>
                <h4>
                    Lần đầu tiên, Air Max 96 II trở lại với bản làm lại 1-1. Mang lại nét thẩm mỹ thể thao do nhà thiết
                    kế nổi tiếng của Nike Sergio Lorenzo tưởng tượng, với màu sắc hoài cổ trên cấu trúc cổ điển của thập
                    niên 90, đó là sự trở lại với phong cách thể thao cũ. Đệm Nike Air giữ cho nó thoải mái với công
                    nghệ Air được giới thiệu và phát triển năm 1979.
                </h4>
            </ul>
        </div>
        <div class="SimilarProduct">
            <div class="danhmuc">
                <ul>
                    <h3>Sản Phẩm tương tự</h3>
                </ul>
            </div>
            <div class="row">
                <ul class="list-image">
                    <li>
                        <a href="">
                            <img width="100%" src="public/images/products/B1-ttsp.png" alt="">
                            <div class="Khac">Nike Air Max 2021<br>4,699,000đ</div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img width="100%" src="public/images/products/C1-ttsp.png" alt="">
                            <div class="Khac">Nike Air Max 97<br>4,999,000đ</div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img width="100%" src="public/images/products/D1-ttsp.png" alt="">
                            <div class="Khac">Nike Air Vapormax Evo SE<br>6,459,000đ</div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img width="100%" src="public/images/products/E1-ttsp.png" alt="">
                            <div class="Khac">Nike Air Force 1 '07 LV8<br>2,929,000đ</div>
                        </a>
                    </li>
                </ul>
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

    <!--thongtinsp-script (chỉnh chỗ này)--> 
    <script src="public/scripts/thongtinsp.js"></script>

    <!--bootstrap-script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>