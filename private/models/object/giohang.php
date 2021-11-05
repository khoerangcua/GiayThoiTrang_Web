<?php
    class GioHang{
    protected $idtaikhoan;
    protected $idgiay;
    protected $soluong;

    public function GetIDTaiKhoan(){return $this->idtaikhoan;}
    public function GetIDGiay(){return $this->idgiay;}
    public function GetSoLuong(){return $this->soluong;}

    public function __construct($idtaikhoan, $idgiay, $soluong)
    {
        $this->idtaikhoan = $idtaikhoan;
        $this->idgiay = $idgiay;
        $this->soluong = $soluong;
    }
}
?>