<?php 
class giay {
	private $id_giay;
	private $ten;
	private $gia;
	private $id_thuonghieu;
	private $ngaynhap;
	private $gioithieu;
	private $mau;
	private $size;
	private $anhchinh;
	private $anhp1;
	private $anhp2;
	private $anhp3;
	private $anhp4;
	
	public function GetIDgiay () {return $this->id_giay;}
	public function GetTengiay () {return $this->ten;}
	public function GetGia () {return $this->gia;}
	public function GetIDthuonghieu () {return $this->id_thuonghieu;}
	public function GetNgaynhap () {return $this->ngaynhap;}
	public function GetGioithieu () {return $this->gioithieu;}
	public function GetMau () {return $this->mau;}
	public function GetSize () {return $this->size;}
	public function GetAnhchinh () {return $this->anhchinh;}
	public function GetAnhphu1 () {return $this->anhp1;}
	public function GetAnhphu2 () {return $this->anhp2;}
	public function GetAnhphu3 () {return $this->anhp3;}
	public function GetAnhphu4 () {return $this->anhp4;}
	
	public function __construct($id_giay, $ten, $gia, $id_thuonghieu, $ngaynhap, $gioithieu, $mau, $size, $anhchinh, $anhp1, $anhp2, $anhp3, $anhp4){
		$this->id_giay = $id_giay;
		$this->ten = $ten;
		$this->gia = $gia;
		$this->id_thuonghieu = $id_thuonghieu;
		$this->ngaynhap = $ngaynhap;
		$this->gioithieu = $gioithieu;
		$this->mau = $mau;
		$this->size = $size;
		$this->anhchinh = $anhchinh;
		$this->anhp1 = $anhp1;
		$this->anhp2 = $anhp2;
		$this->anhp3 = $anhp3;
		$this->anhp4 = $anhp4;
	}
}
?>