<?php
require_once("private/models/brand_model.php");
require_once("private/models/xulyBrand.php");

class ctrlbrand{
	public $brandM;
	public function addbrand_ctrl(){
		if(isset($_POST['submit'])){
			$ten = $_POST['ten'];
			$gioithieu = $_POST['gioithieu'];
			if(empty($ten) || empty($gioithieu)){
				echo 'khong duoc de trong!!';
				exit;
			}else{
				$brandM = new brand(null, $ten, $gioithieu);
				$xulyBrand = new xulybrand();
				$xulyBrand->addBrand($brandM);
			}
		}
		
	}
	public function showBrand_ctrl(){
		$xulyBrand = new xulybrand();
		return $xulyBrand->showBrand();
	}
}
?>