<?php 
require_once("private/modules/db_module.php");
require_once("private/models/objects/giay.php");

class GiayModel{
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
	public function LoadNewArrival($ngay){

		$link = null;

		taoKetNoi($link);
		
		$result = chayTruyVanTraVeDL($link,"SELECT giays.*, giamgias.phantramgiam 
											FROM (SELECT giays.* FROM tbl_giay as giays 
													WHERE giays.ngaynhap >= $ngay) AS giays 
											LEFT JOIN tbl_giamgia AS giamgias 
											ON giays.id_giay = giamgias.id_giay");
		
		$arrgiay = array();
		
		while($row = mysqli_fetch_assoc($result)){
			
			array_push($arrgiay,$row);
						
		}
			
		giaiPhongBoNho($link, $result);

		return($arrgiay);
	}

	public function LoadBestSeller($soluongbanduoc){
        $giays = array();

        $link = "";
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT * FROM (SELECT g.* FROM (SELECT cthd.id_giay FROM tbl_chitiethoadon as cthd GROUP BY cthd.id_giay HAVING SUM(cthd.soluong) > ".$soluongbanduoc.") AS cthd INNER JOIN tbl_giay as g ON cthd.id_giay = g.id_giay) as bangphu1 LEFT JOIN tbl_giamgia as gg on gg.id_giay = bangphu1.id_giay");
            
            while ($row = mysqli_fetch_assoc($result)  ) {
               
            array_push($giays,$row);
        }
        giaiPhongBoNho($link,$result);
        return $giays;
        
    }

	public function LoadHotSale(){
        $giays = array();
        $link = "";
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_giamgia as gg LEFT JOIN tbl_giay as g ON gg.id_giay = g.id_giay WHERE gg.ngayketthuc > CURRENT_DATE()");
        while ($row = mysqli_fetch_assoc($result)) {
        array_push($giays, $row);
        }
        return $giays;
    }
	

	public function LoadGiayTheoLoai($idthuonghieu){
		$giays = array();
		$link = "";
		taoKetNoi($link);
		$result = chayTruyVanTraVeDL($link, "SELECT bangphu1.*, gg.phantramgiam FROM (SELECT g.* FROM tbl_giaythuonghieu AS gth INNER JOIN tbl_giay as g ON gth.id_giay = g.id_giay WHERE gth.id_thuonghieu = ".$idthuonghieu.") AS bangphu1 INNER JOIN tbl_giamgia as gg ON bangphu1.id_giay = gg.id_giay");

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($giays, $row);
		}

		return $giays;
	}

	public function LoadGiayTheoFiller($thuonghieu, $gia, $size)
	{	
		
		$query = "SELECT * FROM (SELECT bangphu1.*, gg.phantramgiam FROM (SELECT g.id_giay, g.ten, g.anhchinh, g.anhphu1, g.gia, g.size, gth.id_thuonghieu FROM tbl_giaythuonghieu gth INNER JOIN tbl_giay AS g ON gth.id_giay = g.id_giay) as bangphu1 INNER JOIN tbl_giamgia AS gg on bangphu1.id_giay = gg.id_giay) AS bangphu2  ";
		if ($thuonghieu != -1 || $gia != -1 || $size != -1) {
			$query .= " WHERE ";

			if ($thuonghieu != -1) {
				for ($i = 0; $i < count($thuonghieu); $i++) {

					if ($i == 0) {
						$query .= "bangphu2.id_thuonghieu = " . $thuonghieu[$i] . "";
					} else {
						$query .= " OR bangphu2.id_thuonghieu = " . $thuonghieu[$i] . "";
					}
				}
			}

			if ($gia != -1) {
				for ($i = 0; $i < count($gia); $i++) {
					if ($i == 0 && $thuonghieu != -1) {
						$query .= " And bangphu2.gia " . $gia[$i] . "";
					} else {
						if ($i == 0 && ! $thuonghieu != -1) {
							$query .= " bangphu2.gia " . $gia[$i] . "";
						} else {
							$query .= " OR bangphu2.gia " . $gia[$i] . "";
						}
					}
				}
			}

			if ($size != -1) {
				for ($i = 0; $i < count($size); $i++) {

					if ($i == 0 && $gia != -1 || $thuonghieu != -1) {
						$query .= " And bangphu2.size = '" . $size[$i] . "'";
					} else {
						if ($i == 0 && ! ($gia != -1) || $thuonghieu != -1) {
							$query .= " bangphu2.size = '" . $size[$i] . "'";
						} else {
							$query .= " OR bangphu2.size = '" . $size[$i] . "'";
						}
					}
				}
			}
			


			
		} 
		print($query);

		$giays = array();
		$link = "";
		taoKetNoi($link);
		$result = chayTruyVanTraVeDL($link, $query);
		while ($row = mysqli_fetch_assoc($result)) {
			array_push($giays, $row);
		}
		return $giays;	
		
	}


}
?>