<?php
require_once("private/modules/db_module.php");
require_once("private/models/objects/banner.php");

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
		

			$link = "";
			taoKetNoi($link);			
			
			
			$result = chayTruyVanKhongTraVeDL($link, "INSERT INTO tbl_banner values (NULL,'$ten','$diachianh','$desc','$trang','$vitri','$name','$value')");
			if($result){echo 'them thanh cong';}
			else{echo 'them that bai';}
			giaiPhongBoNho($link,null);

			

		}
	public function LoadBanners($trang, $vitri){

		$link = "";				
		taoKetNoi($link);
		
		$result = chayTruyVanTraVeDL($link," SELECT * FROM tbl_banner AS banners WHERE banners.desc = 'DSD' AND banners.trang = '$trang' AND banners.vitri = '$vitri' ");
		
		
		$arrbanner = array();
		
		while($rows = mysqli_fetch_assoc($result)){
			
			array_push($arrbanner, $rows);
			
		}
		
		giaiPhongBoNho($link, $result);
		
		return($arrbanner);
	}
	public function LoadBanner($trang, $vitri){
		$banners = array();

		$link = "";
		taoKetNoi($link);
		$result = chayTruyVanTraVeDL($link,"select * from tbl_banner where `desc` = 'DSD' and `trang` = '".$trang."' and `vitri` = '".$vitri."'");
		while($rows = mysqli_fetch_assoc($result)){
			array_push($banners, $rows);
			break;
	
		}
		giaiPhongBoNho($link, $result);
		return $banners[0];
	}		
	}
