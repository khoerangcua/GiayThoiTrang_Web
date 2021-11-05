<?php
include_once("private/modules/db_module.php");
include_once("private/models/objects/hoadon.php");
class HoaDonModel{
    public function BestSeller($soluongbanduoc){
        $giays = array();

        $link = "";
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT * FROM (SELECT g.* FROM (SELECT cthd.id_giay FROM tbl_chitiethoadon as cthd GROUP BY cthd.id_giay HAVING SUM(cthd.soluong) > ".$soluongbanduoc.") AS cthd INNER JOIN tbl_giay as g ON cthd.id_giay = g.id_giay) as bangphu1 INNER JOIN tbl_giamgia as gg on gg.id_giay = bangphu1.id_giay");
            
            while ($row = mysqli_fetch_assoc($result)  ) {
               
            array_push($giays,$row);
        }
        giaiPhongBoNho($link,$result);
        return $giays;
        
    }
}
?>