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
		<div class="row">
			<div class="col-lg-7 col-md-12 col-12">
				<div class="imgpro">
					<img width="100%" src="public/images/products/AM96A-ttsp.png" alt="" id="ProductImg">
					<div class="img-icon">
						<img src="public/images/products/AM96A-ttsp.png" alt="" class="small-img">
						<img src="public/images/products/A1-ttsp.png" alt="" class="small-img">
						<img src="public/images/products/A2-ttsp.png" alt="" class="small-img">
						<img src="public/images/products/A3-ttsp.png" alt="" class="small-img">
					</div>
				</div>
			</div>

			<div class="col-lg-5 col-md-12 col-12">
				<div class="pro-title">
					<h3>Air Max 96 II</h3>
				</div>
				<div class="detail-pro-price">
					<span class="detail-pro-sale">-99%</span>
					<span class="detail-pro-price">2,345,678₫</span>
					<del>3,456,789₫</del>
				</div>
				<form>
					<div class="size-select">
						<input type="radio" class="size-selector" name="options" id="41" autocomplete="off" checked="">
						<label class="size-btn" for="41">41</label>

						<input type="radio" class="size-selector" name="options" id="41.5" autocomplete="off">
						<label class="size-btn" for="41.5">41.5</label>

						<input type="radio" class="size-selector" name="options" id="42" autocomplete="off" disabled="">
						<label class="size-btn" for="42">42</label>

						<input type="radio" class="size-selector" name="options" id="42.5" autocomplete="off">
						<label class="size-btn" for="42.5">42.5</label>
					</div>

					<div class="selector-actions">
						<div class="quantity" style="clear: both">
							<button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minusdecrease">-</button>
							<input type="number" size="4" name="updates[]" min="1" value="1" class="detail-number">
							<button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plusincrease">+</button>
						</div>
						<br style="clear: both"></br>
						<div class="d-flex">
							<button type="button" class="detail-btn add-btn">Thêm vào giỏ</button>
							<button type="button" class="detail-btn buy-btn">Mua ngay</button>
						</div>
					</div>
				</form>
				<div class="desc">
					<p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
							<path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
						</svg> Giao hàng toàn quốc</p>
					<p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
							<path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z" />
						</svg> Cam kết chính hãng</p>
					<p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
							<path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z" />
						</svg> Bảo hành trọn đời</p>
				</div>
			</div>
		</div>
		<div class="introduction">
			<div class="row">
				<div class="col-lg-5 col-12">
					<h3>Giới thiệu</h3>
					<p>Lần đầu tiên, Air Max 96 II trở lại với bản làm lại 1-1. Mang lại nét thẩm mỹ thể thao do nhà thiết
						kế nổi tiếng của Nike Sergio Lorenzo tưởng tượng, với màu sắc hoài cổ trên cấu trúc cổ điển của thập
						niên 90, đó là sự trở lại với phong cách thể thao cũ. Đệm Nike Air giữ cho nó thoải mái với công
						nghệ Air được giới thiệu và phát triển năm 1979.
					</p>
				</div>
				<div class="col-lg-7 col-12">
					<h3>Size chart</h3>
					<img src="public/images/others/sizechart-ttsp.png">
				</div>
			</div>


		</div>
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

	<!--thongtinsp-script (chỉnh chỗ này)-->
	<script src="public/scripts/thongtinsp.js"></script>

	<!--bootstrap-script-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>