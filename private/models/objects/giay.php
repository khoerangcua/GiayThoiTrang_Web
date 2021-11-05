<?php
class Giay {
	private $idgiay;
	private $ten;
	private $gia;
	private $idthuonghieu;
	private $ngaynhap;
	private $gioithieu;
	private $mau;
	private $size;
	private $anhchinh;
	private $anhphu1;
	private $anhphu2;
	private $anhphu3;
	private $anhphu4;
	
	public function GetIDgiay () {return $this->idgiay;}
	public function GetTengiay () {return $this->ten;}
	public function GetGia () {return $this->gia;}
	public function GetIDthuonghieu () {return $this->idthuonghieu;}
	public function GetNgaynhap () {return $this->ngaynhap;}
	public function GetGioithieu () {return $this->gioithieu;}
	public function GetMau () {return $this->mau;}
	public function GetSize () {return $this->size;}
	public function GetAnhchinh () {return $this->anhchinh;}
	public function GetAnhphu1 () {return $this->anhphu1;}
	public function GetAnhphu2 () {return $this->anhphu2;}
	public function GetAnhphu3 () {return $this->anhphu3;}
	public function GetAnhphu4 () {return $this->anhphu4;}
	
	public function __construct($idgiay, $ten, $gia, $idthuonghieu, $ngaynhap, $gioithieu, $mau, $size, $anhchinh, $anhphu1, $anhphu2, $anhphu3, $anhphu4){
		$this->id_giay = $idgiay;
		$this->ten = $ten;
		$this->gia = $gia;
		$this->id_thuonghieu = $idthuonghieu;
		$this->ngaynhap = $ngaynhap;
		$this->gioithieu = $gioithieu;
		$this->mau = $mau;
		$this->size = $size;
		$this->anhchinh = $anhchinh;
		$this->anhphu1 = $anhphu1;
		$this->anhphu2 = $anhphu2;
		$this->anhphu3 = $anhphu3;
		$this->anhphu4 = $anhphu4;
	}
	public function __toString(){
		return "giay($this->id_giay, $this->ten, $this->gia, $this->id_thuonghieu, $this->ngaynhap, $this->gioithieu, $this->mau, $this->size, $this->anhchinh, $this->anhphu1, $this->anhphu2, $this->anhphu3, $this->anhphu4)";
	}
}
?>