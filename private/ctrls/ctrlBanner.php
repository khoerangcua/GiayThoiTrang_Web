<?php
require_once("../../private/models/banner_model.php");
require_once("../../private/models/xulyBanner.php");
class cltrbanner{
	public $bannerM;
	public function addbanner_ctrl(){
		$bannerM = new banner();
		$result = $bannerM->addBanner();
		require_once("../../public/views/thaotacbanner.php");
	}
}
?>