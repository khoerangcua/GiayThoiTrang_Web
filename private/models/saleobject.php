<?php
class Sale{
    private $idgiay;
    private $ngaybatdau;
    private $ngayketthuc;
    private $phantramgiam;

    public function GetIDGiay (){return $this->idgiay;}
    public function GetNgayBatDau (){return $this->ngaybatdau;}
    public function GetNgayKetThuc (){return $this->ngayketthuc;}
    public function GetPhanTramGiam (){return $this->phantramgiam;}

    public function __construct($idgiay,$ngaybatdau,$ngayketthuc,$phantramgiam)
    {
        $this->idgiay = $idgiay;
        $this->ngaybatdau = $ngaybatdau;
        $this->ngayketthuc = $ngayketthuc;
        $this->phantramgiam = $phantramgiam;
    }

}
?>