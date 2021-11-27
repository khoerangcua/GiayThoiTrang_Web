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

    public function ThemTaiKhoan($tendangnhap, $matkhau, $nhaplaimatkhau)
    {
        
        if (empty($tendangnhap) || empty($matkhau) || empty($nhaplaimatkhau)) {
            return -1;
        }
        if ($matkhau != $nhaplaimatkhau) {
            return -1;
        }
        

        $link = "";
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "INSERT INTO `tbl_taikhoan` (`id_taikhoan`, `tendangnhap`, `matkhau`, `phanquyen`) VALUES (NULL, '$tendangnhap', '$matkhau', '0');");

        if ($result == true) {
            // Lấy id tài khoản mới thêm
            $idtaikhoan = chayTruyVanTraVeDL($link, "SELECT MAX(`id_taikhoan`) FROM tbl_taikhoan");
            while ($row = mysqli_fetch_array($idtaikhoan)) {
                return $row[0];
            }
        }
        else {
            return -1;
        }
    }

    public function ThemThongTinKhachHang($ho, $ten, $sodienthoai, $email)
    {
        if (empty($ho) || empty($ten) || empty($sodienthoai) || empty($email) ) {
            return -1;
        }
        else{
            $link = "";
            taoKetNoi($link);
            $result = chayTruyVanKhongTraVeDL($link, "INSERT INTO `tbl_thongtinkhachhang` (`id_khachhang`, `ho`, `ten`, `sdt`, `email`) VALUES (NULL, '$ho', '$ten', '$sodienthoai', '$email');");
            if ($result == true) {
                // Lấy id khách hàng mới thêm
                $idkhachhang = chayTruyVanTraVeDL($link, "SELECT MAX(`id_khachhang`) FROM tbl_thongtinkhachhang");
                while ($row = mysqli_fetch_array($idkhachhang)) {
                    return $row[0];
                    
                }
            }
            else {
                return -1;
            }
        }
    }

    public function LinkTaiKhoanToThongTinKhachHang($idtaikhoan, $idkhachhang)
    {
        $link = "";
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "INSERT INTO tbl_taikhoankhachhang VALUES ($idtaikhoan,$idkhachhang);");
        return $result;
    }

}

?>