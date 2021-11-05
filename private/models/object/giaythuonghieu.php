<?php
    class Giaythuonghieu{
        protected $idthuonghieu;
        protected $idgiay;
       
        public function GetIDThuongHieu(){return $this->idhoadon;}
        public function GetIDGiay(){return $this->idgiay;}
    
        public function __construct($idthuonghieu, $idgiay)
        {
            $this->idthuonghieu = $idthuonghieu;
            $this->taikhoan = $idgiay;
        }
    }
?>