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

		<div class="row vh-100 justify-content-center align-items-center">
			<div class="col-sm-8 col-md-8 col-lg-6 shadow dky-ui">
				<div class="row justify-content-center">
					<img src="../images/header-icon.png" class="icon">
				</div>
				<div class="row dky-header">
					<h3>đăng ký</h3>
				</div>
				<form class="dky-form">
					<div class="row">
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
					
					<div class="form-floating mb-3">
						<input type="text" class="form-control" id="floatingInput_Username" placeholder="Tên tài khoản">
						<label for="floatingInput_Username">Tên đăng nhập</label>
                    </div>
					
					<div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingInput_Password" placeholder="Mật khẩu">
                                <label for="floatingInput_Password">Mật khẩu</label>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingInput_CPassword" placeholder="Nhập lại mật khẩu">
                                <label for="floatingInput_CPassword">Nhập lại mật khẩu</label>
                            </div>
                        </div>
                    </div>
					<div class="form-floating mb-3">
						<input type="number" class="form-control" id="floatingInput_Pnumber" placeholder="Số điện thoại">
						<label for="floatingInput_Pnumber">Số điện thoại</label>
					</div>
					<div class="form-floating mb-2">
						<input type="email" class="form-control" id="floatingInput_Email" placeholder="Email">
						<label for="floatingInput_Email">Email</label>
                    </div>
					<div class="form-check mb-3">
						<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
						<label class="form-check-label" for="flexCheckDefault">
							Chấp nhận với <span><a href="">Điều khoản</a></span>
						</label>
					</div>
					<button type="submit" class="dky-btn mb-4">Đăng ký</button>
				</form>
			</div>	
		</div>
     </div>


    <!--bootstrap 5-script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>