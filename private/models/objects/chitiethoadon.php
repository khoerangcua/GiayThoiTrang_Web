<?php
    class Chitiethoadon{
        protected $idhoadon;
        protected $idgiay;
        protected $soluong;
        protected $thanhtien;
       
        public function GetIDHoaDon(){return $this->idhoadon;}
        public function GetIDGiay(){return $this->idgiay;}
        public function GetSoLuong(){return $this->soluong;}
        public function GetThanhTien(){return $this->thanhtien;}

    
        public function __construct($idhoadon, $idgiay, $soluong, $thanhtien)
        {
            $this->idhoadon = $idhoadon;
            $this->taikhoan = $idgiay;
            $this->matkhau = $soluong;
            $this->phanquyen = $thanhtien;
        }
    }
?>