<?php
    class taikhoan{
        protected $id_taikhoan;
        protected $taikkhoan;
        protected $matkhau;
        protected $phanquyen;
       
        public function GetID(){return $this->id_taikhoan;}
        public function GetUsername(){return $this->taikkhoan;}
        public function GetPassword(){return $this->matkhau;}
        public function GetQuyen(){return $this->phanquyen;}

    
        public function __construct($idtaikhoan, $taikkhoan, $matkhau, $phanquyen)
        {
            $this->id_taikhoan = $idtaikhoan;
            $this->taikhoan = $taikkhoan;
            $this->matkhau = $matkhau;
            $this->phanquyen = $phanquyen;
        }
    }
?>