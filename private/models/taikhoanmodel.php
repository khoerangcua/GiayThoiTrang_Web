<?php
require_once("private/modules/db_module.php");
class TaiKhoanModel
{
    public function KiemTraDangNhap($tendangnhap, $matkhau){
        $link = "";
        taoKetNoi($link);
        $taikhoan = -1;

        $result = chayTruyVanTraVeDL($link, "SELECT * FROM `tbl_taikhoan` AS tk WHERE tk.tendangnhap = '$tendangnhap' AND tk.matkhau = '$matkhau'");
        while ($row = mysqli_fetch_assoc($result)) {
            $taikhoan = $row;
        }
        
        return $taikhoan;
    }

}

?>