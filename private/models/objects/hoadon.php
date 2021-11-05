<?php
class HoaDon{
    private $idhoadon;
    private $idkhachhang;
    private $ngaylap;
    private $tongtien;

    public function GetIdHoaDon(){return $this->idhoadon;}
    public function GetIDKhachHang(){return $this->idkhachhang;}
    public function GetNgayLap(){return $this->ngaylap;}
    public function GetTongTien(){return $this->tongtien;}

    public function __construct($idhoadon,$idkhachhang,$ngaylap,$tongtien)
    {
        $this->idhoadon = $idhoadon;
        $this->idkhachhang = $idkhachhang;
        $this->ngaylap = $ngaylap;
        $this->tongtien = $tongtien;

    
    }

}

?>