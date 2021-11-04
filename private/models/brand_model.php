<?php 
class brand {
	
	private $id_thuonghieu;
	private $ten;
	private $gioithieu;
	
	
	public function GetIDthuonghieu(){return $this->id_thuonghieu;}
	public function GetTen(){return $this->ten;}
	public function GetGioithieu(){return $this->gioithieu;}
	
	public function __construct($id_thuonghieu, $ten, $gioithieu){
		
		$this->id_thuonghieu = $id_thuonghieu;
		$this->ten = $ten;
		$this->gioithieu = $gioithieu;
	}
}
?>