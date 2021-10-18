<?php
require_once("../../private/modules/db_module.php");
require_once("../../private/models/banner_model.php");

class xulybanner{
	public function addBanner(){
		if(isset($_POST['submit'])){
			$ten = $_POST['ten'];
			$diachianh = $_POST['diachianh'];
			$desc = $_POST['desc'];
			$trang = $_POST['trang'];
			$vitri = $_POST['vitri'];
			$name = $_POST['name'];
			$value = $_POST['value'];
			
			if(empty($ten) || empty($diachianh) || empty($desc) || empty($trang) || empty($vitri) || empty($name) || empty($value)){
				echo 'khong dc trong';
				exit;
			}
			
			$link = null;
			taoKetNoi($link);
			
			$result = chayTruyVanKhongTraVeDL($link, "INSERT INTO tbl_banner VALUES (null, '$ten', '$diachianh', '$desc', '$trang', '$name'), '$value'");
			if($result){echo 'them thanh cong';}
			else{echo 'them that bai';}
			giaiPhongBoNho($link,null);
		}
		
	}
}
?>