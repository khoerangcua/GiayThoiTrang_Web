<?php
include_once("private/modules/db_module.php");

class SaleModel{
    public function HotSale($ngaybatdau, $ngayketthuc){
        $giays = array();
        $link = "";
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_giamgia as gg WHERE gg.ngaybatdau = '$ngaybatdau' && gg.ngayketthuc = '$ngayketthuc'");
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($giays, $row);
        }
        return $giays;

    }
}
?>