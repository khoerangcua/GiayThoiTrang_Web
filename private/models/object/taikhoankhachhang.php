<?php
    class Taikhoankhachhang{
        protected $idtaikhoan;
        protected $idkhachhang;
       
        public function GetIDThuongHieu(){return $this->idtaikhoan;}
        public function GetIDGiay(){return $this->idkhachhang;}
    
        public function __construct($idtaikhoan, $idkhachhang)
        {
            $this->idtaikhoan = $idtaikhoan;
            $this->idkhachhang = $idkhachhang;
        }
    }
?>