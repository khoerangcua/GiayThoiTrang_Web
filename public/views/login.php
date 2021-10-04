<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Đăng nhập | Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width = device-width" initial-scale="1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
	<link href="public/styles/login.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="container">
		<div class="row vh-100 justify-content-center align-items-center">
			<div class="col-sm-8 col-md-6 col-lg-4 shadow login-ui">
				<div class="row justify-content-center">
					<img src="public/images/header-icon.png" class="icon">
				</div>
				<div class="row login-header">
					<h3>đăng nhập</h3>
				</div>
				<form class="login-form">
					<div class="form-floating mb-4">
						<input type="email" class="form-control" id="floatingInput" placeholder="Tên đăng nhập">
						<label for="floatingInput">Tên đăng nhập</label>
					</div>
					<div class="form-floating mb-2">
						<input type="password" class="form-control" id="floatingPassword" placeholder="Mật khẩu">
						<label for="floatingPassword">Mật khẩu</label>
					</div>
					<div class="mb-4 form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">Ghi nhớ đăng nhập</label>
						<a href="resetpassword.php" class="forgot">Quên mật khẩu?</a>
					</div>
					<button type="submit" class="login-btn mb-4">Đăng nhập</button>
					<p class="login-signup">Chưa có tài khoản? <a href="dangky.php">Đăng ký tại đây</a></p>
				</form>
			</div>
		</div>
	</div>
	
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>