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
	$controlbanner = new ctrlbanner();
	$controlbanner->showbanner_ctrl();
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

				<?php
				 	require_once("private/ctrls/ctrlBanner.php");
				 	
					$controlbanner = new ctrlbanner();
				 $firstbanner = true;
				 foreach($controlbanner->showbanner_ctrl() as $banner)
				 {
					 echo ' 
				  		<h3>'.$banner->GetDiachianh().'</h3>
						
					';
					 $firstbanner = false;
				 }
				 ?>


	<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
  				<a href="" class="carousel-item active">
                    <img src="public/images/banners/slide1-tc.jpg" class="d-block w-100" alt="">
                </a>
                <a href="" class="carousel-item">
                    <img src="public/images/banners/slide2-tc.jpg" class="d-block w-100" alt="">
                </a>
                <a href="" class="carousel-item">
                    <img src="public/images/banners/slide3-tc.jpg" class="d-block w-100" alt="">
                </a>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


	
	
</body>
</html>