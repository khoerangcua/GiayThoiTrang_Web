<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	require_once("private/ctrls/ctrlBrand.php");
	if (isset($_POST['submit'])) {
	$controlbrand = new ctrlbrand();
	$controlbrand->addbrand_ctrl();

	}
	?>
	<form method="post" action="./?page=brandAD" >
		<label for="ten">Tên Brand</label>
		<input  type="text" name="ten"></br>
		<label for="gioithieu">Gioi thieu</label>
		<input  type="text" name="gioithieu"></br>
			
		<input type="submit" value="Thêm" name="submit">
		
	</form>


</body>
</html>