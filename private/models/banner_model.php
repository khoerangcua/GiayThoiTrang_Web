<?php
class banner {
	private $id ;
	private $ten; 
	private $diachianh;
	private $desc;
	private $trang;
	private $vitri;
	private $name;
	private $value;
	
	public function GetIDbanner () {return $this->id;}
	public function GetTenbanner () {return $this->ten;}
	public function GetDiachianh () {return $this->diachianh;}
	public function GetDesc () {return $this->desc;}
	public function GetTrang () {return $this->trang;}
	public function GetVitri () {return $this->vitri;}
	public function GetName () {return $this->name;}
	public function GetValue () {return $this->value;}
	
	public function __construct($id, $ten, $diachianh, $desc, $trang, $vitri, $name, $value){
		$this->id= $id;
		$this->ten= $ten;
		$this->diachianh = $diachianh;
		$this->desc = $desc;
		$this->trang = $trang;
		$this->vitri = $vitri;
		$this->name = $name;
		$this->value = $value;
	}
	
}
?>