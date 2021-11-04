<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	require_once("private/ctrls/ctrlGiay.php");
	if (isset($_POST['submit'])) {
		$controlgiay = new ctrlgiay();
		$controlgiay->addgiay_ctrl();

	}
		
	?>
	
	<form method="post" action="./?page=giayAD" >
		<label for="ten">Tên giày</label>
		<input  type="text" name="ten"></br>
		<label for="gia">Giá</label>
		<input  type="text" name="gia"></br>
		<label for="id_thuonghieu">Thương hiệu</label>
		<select name="id_thuonghieu">
			<?php 
			require_once("private/ctrls/ctrlBrand.php");
			$controllbrand = new ctrlbrand();
			$BrandS = $controllbrand->showBrand_ctrl();
			foreach($BrandS as $brand){
				echo '<option value="'.$brand->GetIDthuonghieu.'">'.$brand->GetTen().'</option>';
			}
			?>
		</select></br>
		<label for="ngaynhap">Ngày nhập</label>
		<input  type="date" name="ngaynhap"></br>
		<label for="gioithieu">Giới thiệu</label>
		<input  type="text" name="gioithieu"></br>
		<label for="mau">Màu</label>
		<input  type="text" name="mau"></br>
		<label for="size">Size</label>
		<input  type="text" name="size"></br>
		<label for="anhchinh">Ảnh chính</label>
		<input  type="text" name="anhchinh"></br>
		<label for="anhphu1">Ảnh phụ 1</label>
		<input  type="text" name="anhphu1"></br>
		<label for="anhphu2">Ảnh phụ 2</label>
		<input  type="text" name="anhphu2"></br>
		<label for="anhphu3">Ảnh phụ 3</label>
		<input  type="text" name="anhphu3"></br>
		<label for="anhphu4">Ảnh phụ 4</label>
		<input  type="text" name="anhphu4"></br>
		<input type="submit" value="Thêm" name="submit">
		
	</form>
	
</body>
</html>