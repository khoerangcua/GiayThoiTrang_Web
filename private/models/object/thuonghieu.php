<?php
    class ThuongHieu{
    protected $idthuonghieu;
    protected $tenthuonghieu;
    protected $gioithieu;

    public function GetIDThuongHieu(){return $this->idthuonghieu;}
    public function GetTenThuongHieu(){return $this->tenthuonghieu;}
    public function GetGioiThieu(){return $this->gioithieu;}

    public function __construct($idthuonghieu, $tenthuonghieu, $gioithieu)
    {
        $this->idthuonghieu = $idthuonghieu;
        $this->tenthuonghieu = $tenthuonghieu;
        $this->gioithieu = $gioithieu;
    }
}
?>