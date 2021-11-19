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
	<!--breadcrumb-->
	<nav style="background-color:#F8F8F8" aria-label="breadcrumb">
		<div class="container">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
				<li class="breadcrumb-item" aria-current="page">Nike</li>
				<li class="breadcrumb-item active" aria-current="page">Nike Air Max 96 II</li>
			</ol>
		</div>
	</nav>



	<!--CONTENT (chỉnh chỗ này)-->
	<div class="container">

		<?php
		require_once("private/ctrls/chitietsanphancontroller.php");

		$chiTietSanPhamController = new ChiTietSanPhamController();
		$chiTietSanPhamController->LoadChiTietSanPham();
		?>

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

	<!--thongtinsp-script (chỉnh chỗ này)-->
	<script src="public/scripts/thongtinsp.js"></script>

	<!--bootstrap-script-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>