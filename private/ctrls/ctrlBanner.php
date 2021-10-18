<?php
require_once("private/models/banner_model.php");
require_once("private/models/xulyBanner.php");

class cltrbanner
{
	public $bannerM;
	public function addbanner_ctrl(){
		if(isset($_POST['submit'])){
			$ten = $_POST['ten'];
			$diachianh = $_POST['diachianh'];
			$desc = $_POST['desc'];
			$trang = $_POST['trang'];
			$vitri = $_POST['vitri'];
			$name = $_POST['name'];
			$value = $_POST['value'];
			if(empty($ten) || empty($diachianh) || empty($desc) || empty($trang) || empty($vitri) || empty($name) || empty($value)){
				echo 'khong dc trong';
				exit;
			}
			else{
				$bannerM = new banner(null, $ten, $diachianh, $desc, $trang, $vitri, $name, $value);
				$xulybanner = new xulybanner();
				$xulybanner->addBanner($bannerM);

			}
		
		
		// require_once("../../public/views/thaotacbanner.php");
	}


}
}

?>