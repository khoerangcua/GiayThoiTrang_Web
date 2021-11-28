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

	

<<<<<<< HEAD

=======
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
						<div class="col-12">
                            <label class='note-label'>Ghi chú đơn hàng</label>
                            <textarea></textarea>
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
>>>>>>> f6d0cda249b34903c30c89aa08882dd14d99d0dc
	<!--header-script-->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

	<!--thongtinsp-script (chỉnh chỗ này)-->
	<script src="public/scripts/thanhtoan.js"></script>

	<!--bootstrap-script-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>