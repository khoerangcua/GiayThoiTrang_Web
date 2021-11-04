<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<title>Untitled Document</title>
</head>

<body>
	
<?php
require_once("private/ctrls/ctrlBanner.php");
if (isset($_POST['submit'])) {
	$controlbanner = new ctrlbanner();
	$controlbanner->addbanner_ctrl();

}
	
?>
	
	<form method="post" action="./?page=banneradmin" >
		<label for="ten">Tên Banner</label>
		<input  type="text" name="ten"></br>
		<label for="diachianh">URL</label>
		<input  type="text" name="diachianh"></br>
		<label for="desc">Mô tả</label>
		<input  type="text" name="desc"></br>
		<label for="trang">Tại trang</label>
		<input  type="text" name="trang"></br>
		<label for="vitri">Vị trí</label>
		<input  type="text" name="vitri"></br>
		<label for="name">Name</label>
		<input  type="text" name="name"></br>
		<label for="value">Value</label>
		<input  type="text" name="value"></br>		
		<input type="submit" value="Thêm" name="submit">
		
	</form>



	
	
</body>
</html>