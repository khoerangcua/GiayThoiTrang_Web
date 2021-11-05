<?php
include_once("private/modules/db_module.php");
include_once("private/models/objects/giamgia.php");

class GiamGiaModel{
    public function HotSale(){
        $giays = array();
        $link = "";
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_giamgia as gg INNER JOIN tbl_giay as g ON gg.id_giay = g.id_giay WHERE gg.ngayketthuc > CURRENT_DATE()");
        while ($row = mysqli_fetch_assoc($result)) {
        array_push($giays, $row);
        }
        return $giays;
    }
}
?>