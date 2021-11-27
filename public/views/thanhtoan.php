<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đặt hàng</title>
	<!--bootstrap 5-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<!--google font-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
	<!--link style-->
	<link rel="stylesheet" href="public/styles/thanhtoan.css">
	<link rel="stylesheet" href="public/styles/header.css">
</head>

<body>


	<!--CONTENT (chỉnh chỗ này)-->

	<?php
	require_once("private/ctrls/thanhtoancontroller.php");
	$thanhToanController = new ThanhToanController();
	$thanhToanController->LoadPage();
	?>
	
	<div class="container">
		<a href="./?page=trangchu"><img src="public/images/icons/header-icon.png" class="d-none d-lg-block icon-lg"></a>
		<a class="row justify-content-center" href="./?page=trangchu"><img src="public/images/icons/header-icon.png" class="d-lg-none d-xl-block d-xl-none icon"></a>
		<br style="clear:both">
		<form method="post">
			<div class="row">
				<div class="col-lg-7 col-sm-12 mb-5">
					<div class="login-form row">
						<h3 class="order-heading"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16">
								<path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
								<path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z" />
							</svg> Thông tin giao hàng</h3>
						<div class="col-12">
							<div class="form-floating mb-2">
								<input type="text" name="username" class="form-control" id="floatingInput" placeholder="Họ và tên">
								<label for="floatingInput">Họ và tên</label>
							</div>
						</div>
						<div class="col-7">
							<div class="form-floating mb-2">
								<input type="email" name="email" class="form-control" id="floatingPassword" placeholder="Email">
								<label for="floatingPassword">Email</label>
							</div>
						</div>
						<div class="col-5">
							<div class="form-floating mb-2">
								<input type="number" name="phone" class="form-control" id="floatingPassword" placeholder="Số điện thoại">
								<label for="floatingPassword">Số điện thoại</label>
							</div>
						</div>

						<div class="col-12">
							<div class="form-floating mb-3">
								<input type="text" name="address" class="form-control" id="floatingPassword" placeholder="Địa chỉ">
								<label for="floatingPassword">Địa chỉ</label>
							</div>
						</div>

						<div class="col-12 mb-3">
							<h3 class="order-heading"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
									<path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
								</svg> Hình thức vận chuyển</h3>
							<div class="tbl-purchase">
								<div class="form-check purchase1">
									<input class="form-check-input" type="radio" name="express" id="">
									<label class="form-check-label" for="flexRadioDefault1">
										Giao hàng tiêu chuẩn
									</label>
								</div>
								<div class="form-check purchase2">
									<input class="form-check-input" type="radio" name="express" id="" checked>
									<label class="form-check-label" for="flexRadioDefault2">
										Giao hàng nhanh
									</label>
								</div>
							</div>
						</div>
						<div class="col-12">
							<h3 class="order-heading"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card-2-back" viewBox="0 0 16 16">
									<path d="M11 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1z" />
									<path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm13 2v5H1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm-1 9H2a1 1 0 0 1-1-1v-1h14v1a1 1 0 0 1-1 1z" />
								</svg> Hình thức thanh toán</h3>

							<div class="tbl-purchase mb-3">
								<div class="form-check purchase1">
									<input class="form-check-input" type="radio" name="purchase" id="" checked>
									<label class="form-check-label" for="flexRadioDefault1">
										Thanh toán khi nhận hàng (COD)
									</label>
								</div>
								<div class="form-check purchase2">
									<input class="form-check-input" type="radio" name="purchase" id="">
									<label class="form-check-label" for="flexRadioDefault2">
										Chuyển khoản qua ngân hàng
									</label>
								</div>
							</div>
						</div>
						<div class="col-12 d-lg-none">
							<h3 class="order-heading">Tóm tắt đơn hàng</h3>
							<div class="summary">
								<p>
									Tạm tính: <span>1,234,567₫</span>
								</p>
								<p>
									Phí vận chuyển: <span>34,567₫</span>
								</p>
								<p>
									Giảm giá: <span>- 34,567₫</span>
								</p>
							</div>
							<div class="total">
								<p>
									Tổng cộng: <span>1,234,567₫</span>
								</p>
							</div>
						</div>

						<div class="col-7">
							<a class="order-return" href="?to=cart">← Quay lại giỏ hàng</a>
						</div>
						<div class="col-5">
							<button type="submit" name="thanhtoan" class="order-btn">Đặt hàng</button>
						</div>
					</div>

				</div>
		</form>

		<div class="col-lg-5 col-sm-12">
			<h3 class="order-heading">Chi tiết về đơn hàng</h3>
			<table class="product-table">
				<thead>
					<tr>
						<th><span class="visually-hidden">Ảnh sản phẩm</span></th>
						<th><span class="visually-hidden">Thông tin sản phẩm</span< /th>
						<th><span class="visually-hidden">Số lượng</span< /th>
						<th><span class="visually-hidden">Đơn giá</span< /th>
					</tr>

				</thead>
				<tbody>
					<tr class="product">
						<td class="product-image">
							<div class="product-thumbnail">
								<div class="thumbnail-wrapper">
									<img class="thumbnail-img" src="public\images\products\sp3-tc.jpg">
									<span class="thumbnail-quantity">1</span>
								</div>
							</div>
						</td>
						<th class="product-desc">
							<span class="product-name">Vans Vault OG Old Skool</span>
							<span class="product-info">Size: 40</span>
						</th>
						<td class="product-quantity visually-hidden">1</td>
						<td class="product-price">
							<span>1,234,567₫</span>
						</td>
					</tr>
					<tr class="product">
						<td class="product-image">
							<div class="product-thumbnail">
								<div class="thumbnail-wrapper">
									<img class="thumbnail-img" src="public\images\products\sp3-tc.jpg">
									<span class="thumbnail-quantity">1</span>
								</div>
							</div>
						</td>
						<th class="product-desc">
							<span class="product-name">Vans Vault OG Old Skool</span>
							<span class="product-info">Size: 40</span>
						</th>
						<td class="product-quantity visually-hidden">1</td>
						<td class="product-price">
							<span>1,234,567₫</span>
						</td>
					</tr>
				</tbody>
			</table>
			<div class="col-12 d-md-none d-sm-none d-lg-block">
				<h3 class="order-heading">Tóm tắt đơn hàng</h3>
				<div class="summary">
					<p>
						Tạm tính: <span>1,234,567₫</span>
					</p>
					<p>
						Phí vận chuyển: <span>34,567₫</span>
					</p>
					<p>
						Giảm giá: <span>- 34,567₫</span>
					</p>
				</div>
				<div class="total">
					<p>
						Tổng cộng: <span>1,234,567₫</span>
					</p>
				</div>
			</div>

			<div class="note">
				<h3 class="order-heading">Lưu ý với khách hàng</h3>
				<p>***Đối với hình thức thanh toán chuyển khoản quý khách vui lòng thực hiện chuyển khoản đến: </p>
				<p>- Tài khoản Vietcombank chi nhánh TPHCM</p>
				<p>- STK: 123456789123</p>
				<p>- Chủ tài khoản: Bảo Hải Đức Đạt Duy</p>
				<p>Với nội dung: Họ tên và Số điện thoại của quý khách. Vd: Lê Duy 0123456789 </p>
			</div>
		</div>
	</div>

	</div>
	<!--header-script-->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

	<!--thongtinsp-script (chỉnh chỗ này)-->
	<script src="public/scripts/thongtinsp.js"></script>

	<!--bootstrap-script-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>