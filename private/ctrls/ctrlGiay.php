<?php 
require_once("private/models/giay_model.php");
require_once("private/models/xulyGiay.php");
class ctrlgiay{
	public $giayM;
	
	public function addgiay_ctrl(){
		if(isset($_POST['submit'])){
			$ten = $_POST['ten'];
			$gia = $_POST['gia'];
			$id_thuonghieu = $_POST['id_thuonghieu'];
			$ngaynhap = $_POST['ngaynhap'];
			$gioithieu = $_POST['gioithieu'];
			$mau = $_POST['mau'];
			$size = $_POST['size'];
			$anhchinh = $_POST['anhchinh'];
			$anhphu1 = $_POST['anhphu1'];
			$anhphu2 = $_POST['anhphu2'];
			$anhphu3 = $_POST['anhphu3'];
			$anhphu4 = $_POST['anhphu4'];
			if(empty($ten) || empty($gia) || empty($id_thuonghieu) || empty($ngaynhap) || empty($gioithieu) || empty($mau) || empty($size) || empty($anhchinh) || empty($anhphu1) || empty($anhphu2) || empty($anhphu3) || empty($anhphu4)){
				echo 'không được trống';
				exit;
			}
			else{
				$giayM = new giay(null, $ten, $gia, $id_thuonghieu, $ngaynhap, $gioithieu, $mau, $size, $anhchinh, $anhphu1, $anhphu2, $anhphu3, $anhphu4);
				$xulyGiay = new xulygiay();
				$xulyGiay->addGiay($giayM);
			}
		}
	}
	public function showGiayNew_ctrl(){
		$xulyGiay = new xulygiay();
		return $xulyGiay->showGiayNew();	
	}
	public function showGiayBSeller_ctrl(){
		$xulyGiay = new xulygiay();
		return $xulyGiay->showGiayBSeller();	
	}
	public function showGiayHSale_ctrl(){
		$xulyGiay = new xulygiay();
		return $xulyGiay->showGiayHSale();	
	}
}
?>