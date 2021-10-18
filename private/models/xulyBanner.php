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
		
	}
