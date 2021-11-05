<?php
    class Khachhang{
    protected $idkhachhang;
    protected $ho;
    protected $ten;
    protected $sdt;
    protected $email;

    public function GetIDKhachHang(){return $this->idkhachhang;}
    public function GetHo(){return $this->ho;}
    public function GetTen(){return $this->ten;}
    public function GetSDT(){return $this->sdt;}
    public function GetEmail(){return $this->email;}

    public function __construct($idkhachhang, $ho, $ten, $sdt, $email)
    {
        $this->idkhachhang = $idkhachhang;
        $this->ho = $ho;
        $this->ten = $ten;
        $this->sdt = $sdt;
        $this->email = $email;
    }
}
?>