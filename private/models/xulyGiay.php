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
		$anhp1 = $giay->GetAnhphu1();
		$anhp2 = $giay->GetAnhphu2();
		$anhp3 = $giay->GetAnhphu3();
		$anhp4 = $giay->GetAnhphu4();
		
		$link = null;
		taoketnoi($link);
		
		$result = chayTruyVanKhongTraVeDL($link, "INSERT INTO tbl_giay values (NULL,'$ten','$gia','$id_thuonghieu','$ngaynhap','$gioithieu','$mau',
		'$size','$anhchinh','$anhp1','$anhp2','$anhp3','$anhp4')");
			if($result){echo 'them thanh cong';}
			else{echo 'them that bai';}
			giaiPhongBoNho($link,null);

	}
}
?>