<?php
require_once("private/modules/db_module.php");
require_once("private/models/bannerobject.php");

class BannerModel
{
	public function addBanner($banner){	
		
		$ten = $banner->GetTenbanner();
		$diachianh = $banner->GetDiachianh();
		$desc = $banner->GetDesc ();
		$trang = $banner->GetTrang ();
		$vitri = $banner->GetVitri ();
		$name = $banner->GetName ();
		$value = $banner->GetValue();
		

			$link = null;
			taoKetNoi($link);			
			
			
			$result = chayTruyVanKhongTraVeDL($link, "INSERT INTO tbl_banner values (NULL,'$ten','$diachianh','$desc','$trang','$vitri','$name','$value')");
			if($result){echo 'them thanh cong';}
			else{echo 'them that bai';}
			giaiPhongBoNho($link,null);

			

		}
	public function showSlideBanner(){
		$link = null;
		taoKetNoi($link);
		
		$result = chayTruyVanTraVeDL($link,"select * from tbl_banner where `desc` = 'DSD' and `vitri` = 'top'");
		
		
		$arrbanner = array();
		
		while($rows = mysqli_fetch_assoc($result)){
			// $bannershow = new banner($rows["id"], $rows["ten"], $rows["diachianh"], $rows["desc"], $rows["trang"], $rows["vitri"], $rows["name"], $rows["value"] );
			 
			// array_push($arrbanner,$bannershow);
			array_push($arrbanner, $rows);
			
		}
		
		giaiPhongBoNho($link, $result);
		
		return($arrbanner);
	}
	public function showImgBanner(){
		$link = null;
		taoKetNoi($link);
		$result = chayTruyVanTraVeDL($link,"select * from tbl_banner where `desc` = 'DSD' and `vitri` = 'bot'");
		while($rows = mysqli_fetch_assoc($result)){
			$bannershow = new banner($rows["id"], $rows["ten"], $rows["diachianh"], $rows["desc"], $rows["trang"], $rows["vitri"], $rows["name"], $rows["value"] );
			 
			
			
		}
		giaiPhongBoNho($link, $result);
		return($bannershow);
	}
		
	}
