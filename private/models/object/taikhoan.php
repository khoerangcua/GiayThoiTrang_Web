<?php
    class Taikhoan{
        protected $idtaikhoan;
        protected $taikkhoan;
        protected $matkhau;
        protected $phanquyen;
       
        public function GetIDTaiKhoan(){return $this->idtaikhoan;}
        public function GetTaiKhoan(){return $this->taikkhoan;}
        public function GetMatKhau(){return $this->matkhau;}
        public function GetQuyen(){return $this->phanquyen;}

    
        public function __construct($idtaikhoan, $taikkhoan, $matkhau, $phanquyen)
        {
            $this->idtaikhoan = $idtaikhoan;
            $this->taikhoan = $taikkhoan;
            $this->matkhau = $matkhau;
            $this->phanquyen = $phanquyen;
        }
    }
?>