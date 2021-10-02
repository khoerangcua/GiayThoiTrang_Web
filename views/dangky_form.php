<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <!--bootstrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">

    <!--Style đăng ký-->
    <link rel="stylesheet" href="../styles/dangky.css">
</head>

<body>

    <div class="container">
        <!-- Heading đăng ký-->
        <div class="row">
            <div class="col">
                <h1>Đăng ký</h1>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <!--Form đăng ký-->
                <form action="">

                    <div class="row g-3">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <!--Họ-->
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="họ">
                                <label for="floatingInput">Họ</label>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <!--Tên-->
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput_Ten" placeholder="tên">
                                <label for="floatingInput_Ten">Tên</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col">
                            <!--Tên đăng nhập-->
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput_Username" placeholder="Tên tài khoản">
                                <label for="floatingInput_Username">Tên đăng nhập</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <!--Mật khẩu-->
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingInput_Password" placeholder="Mật khẩu">
                                <label for="floatingInput_Password">Mật khẩu</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col">
                            <!--Nhập lại mật khẩu-->
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingInput_CPassword" placeholder="Nhập lại mật khẩu">
                                <label for="floatingInput_CPassword">Nhập lại mật khẩu</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <!--Điều khoản-->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Châp nhận với <span><a href="">Điều khoản</a></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col">
                            <!--Button đăng nhập-->
                            <span>
                                <a href="">
                                    <button class="btn btn-primary mb-3">Đăng nhập</button>
                                </a>
                            </span>
                        </div>
                        <div class="col">
                            <!--Button đăng ký-->
                            <button type="submit" class="btn btn-primary mb-3">Đăng Ký</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!--bootstrap 5-script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>