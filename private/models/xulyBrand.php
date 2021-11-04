<?php 
require_once("private/modules/db_module.php");
require_once("private/models/brand_model.php");

class xulybrand{
	public function addBrand($brand){
		$ten = $brand->GetTen();
		$gioithieu = $brand->GetGioithieu();
		
		$link = null;
		taoKetNoi($link);
		
		$result = chayTruyVanKhongTraVeDL($link, "insert into tbl_thuonghieu values ( NULL, '$ten', '$gioithieu')");
		if($result){echo 'Them thanh cong';}
		else {echo 'Them that bai';}
		giaiPhongBoNho($link,null);
	}
	
	public function showBrand(){
		$link = null;
		taoKetNoi($link);
		$arrbrand = array();
		$result = chayTruyVanTraVeDL($link, "select * from tbl_thuonghieu");
		while($rows = mysqli_fetch_assoc($result)){
			$brandshow = new brand($rows["id_thuonghieu"], $rows["ten"], $rows["gioithieu"]);
			array_push($arrbrand,$brandshow);
		}
		giaiPhongBoNho($link,$result);
		return $arrbrand;
	}
}
?>