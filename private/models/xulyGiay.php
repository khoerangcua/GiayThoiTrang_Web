<?php 
require_once("private/modules/db_module.php");
require_once("private/models/giay_model.php");

class xulygiay{
	public function addGiay($giay){
		$ten  = $giay->GetTengiay();
		$gia = $giay->GetGia();
		$id_thuonghieu = $giay->GetIDthuonghieu();
		$ngaynhap = $giay->GetNgaynhap();
		$gioithieu = $giay->GetGioithieu();
		$mau = $giay->GetMau();
		$size = $giay->GetSize();
		$anhchinh = $giay->GetAnhchinh();
		$anhphu1 = $giay->GetAnhphu1();
		$anhphu2 = $giay->GetAnhphu2();
		$anhphu3 = $giay->GetAnhphu3();
		$anhphu4 = $giay->GetAnhphu4();
		
		$link = null;
		taoketnoi($link);
		
		$result = chayTruyVanKhongTraVeDL($link, "INSERT INTO tbl_giay values (NULL,'$ten','$gia','$id_thuonghieu','$ngaynhap','$gioithieu','$mau',
		'$size','$anhchinh','$anhphu1','$anhphu2','$anhphu3','$anhphu4')");
			if($result){echo 'them thanh cong';}
			else{echo 'them that bai';}
			giaiPhongBoNho($link,null);

	}
	public function showGiayNew(){
		$link = null;
		taoKetNoi($link);
		
		$result = chayTruyVanTraVeDL($link,"select * from tbl_giay where `ngaynhap` >= '2021-10-30'");
		
		
		$arrgiay = array();
		
		while($rows = mysqli_fetch_assoc($result)){
			$giayshow = new giay($rows["id_giay"], $rows["ten"], $rows["gia"], $rows["id_thuonghieu"], $rows["ngaynhap"], $rows["gioithieu"], $rows["mau"], $rows["size"], $rows["anhchinh"], $rows["anhphu1"], $rows["anhphu2"], $rows["anhphu3"], $rows["anhphu4"] );
			
			array_push($arrgiay,$giayshow);
			
			
		}
			
		giaiPhongBoNho($link, $result);
		return($arrgiay);
	}
	public function showGiayBSeller(){
		$link = null;
		taoKetNoi($link);
		
		$result = chayTruyVanTraVeDL($link,"select * from tbl_giay where `ngaynhap` >= '2021-10-30'");
		
		
		$arrgiay = array();
		
		while($rows = mysqli_fetch_assoc($result)){
			$giayshow = new giay($rows["id_giay"], $rows["ten"], $rows["gia"], $rows["id_thuonghieu"], $rows["ngaynhap"], $rows["gioithieu"], $rows["mau"], $rows["size"], $rows["anhchinh"], $rows["anhphu1"], $rows["anhphu2"], $rows["anhphu3"], $rows["anhphu4"] );
			
			array_push($arrgiay,$giayshow);
			
			
		}
			
		giaiPhongBoNho($link, $result);
		return($arrgiay);
	}
	public function showGiayHSale(){
		$link = null;
		taoKetNoi($link);
		
		$result = chayTruyVanTraVeDL($link,"select * from tbl_giay where `ngaynhap` >= '2021-10-30'");
		
		
		$arrgiay = array();
		
		while($rows = mysqli_fetch_assoc($result)){
			$giayshow = new giay($rows["id_giay"], $rows["ten"], $rows["gia"], $rows["id_thuonghieu"], $rows["ngaynhap"], $rows["gioithieu"], $rows["mau"], $rows["size"], $rows["anhchinh"], $rows["anhphu1"], $rows["anhphu2"], $rows["anhphu3"], $rows["anhphu4"] );
			
			array_push($arrgiay,$giayshow);
			
			
		}
			
		giaiPhongBoNho($link, $result);
		return($arrgiay);
	}	
}
?>