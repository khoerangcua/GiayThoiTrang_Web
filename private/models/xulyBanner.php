<?php
require_once("private/modules/db_module.php");
require_once("private/models/banner_model.php");

class xulybanner{
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
	public function showBanner(){
		$link = null;
		taoKetNoi($link);
		
		$result = chayTruyVanTraVeDL($link,"select * from tbl_banner where `desc` = 'DSD'");
		
		
		$arrbanner = array();
		
		while($rows = mysqli_fetch_assoc($result)){
			$bannershow = new banner($rows["id"], $rows["ten"], $rows["diachianh"], $rows["desc"], $rows["trang"], $rows["vitri"], $rows["name"], $rows["value"] );
			
			array_push($arrbanner,$bannershow);
			
		}
		giaiPhongBoNho($link, $result);
		return($arrbanner);
	}
		
	}
