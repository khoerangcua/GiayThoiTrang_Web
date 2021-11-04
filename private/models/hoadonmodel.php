<?php
include_once("private/modules/db_module.php");
class HoaDonModel{
    public function BestSeller(){
        $idgiays = array();

        $link = "";
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, " SELECT bangphu1.id_giay 
                                                FROM (SELECT cthd.id_giay, SUM(cthd.soluong) AS soluong FROM tbl_chitiethoadon as cthd GROUP BY cthd.id_giay) as bangphu1 
                                                WHERE bangphu1.soluong > 10");
            
            while ($row = mysqli_fetch_assoc($result)  ) {
               
                array_push($idgiays,$row['id_giay']);
        }
        giaiPhongBoNho($link,$result);
        return $idgiays;
        
    }
}
?>