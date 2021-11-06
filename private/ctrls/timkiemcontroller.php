<?php
include_once("private/models/giaymodel.php");
include_once("private/models/hoadonmodel.php");
include_once("private/models/giamgiamodel.php");

class TimKiemController{
    public function TimKiem(){
        if (isset($_GET["from"])) {
            $from = $_GET["from"];
            switch ($from) {
                case 'self':
                    $this->TimKiemTuFillter();
                    break;
                case 'another':
                    $this->TimKiemTuTrangKhac();
                        break;
                
                default:
                include_once("public/views/trangchu.php");
                    break;
            }
        }
        else {
            include_once("public/views/trangchu.php");
        }
    }

    public function TimKiemTuFillter(){
        
            $thuonghieu = isset($_GET["thuonghieu"]) ? $_GET["thuonghieu"] : -1;
            $gia = isset($_GET["gia"]) ? $_GET["gia"] : -1;
            $size = isset($_GET["size"]) ? $_GET["size"] : -1;

        
        $giays = array();
        $giayModel = new GiayModel();
        $giays = $giayModel->LoadGiayTheoFiller($thuonghieu,  $gia, $size);
        for ($i=0; $i < count($giays) ; $i++) {
            $giasaukhigiam = ($giays[$i]["gia"] * $giays[$i]["phantramgiam"]) /100 ;
            echo ("
            <div class='col-lg-3 col-md-6 col-6 products'>
            <div class='pro-img'>
                <div class='pro-sale'><span>-".$giays[$i]["phantramgiam"]."%</span></div>
                <a href='./?page=detail&id=".$giays[$i]["id_giay"]."'>
                    <img class='pro-img pro-img-1' src='".$giays[$i]["anhchinh"]."'>
                    <img class='pro-img' src='".$giays[$i]["anhphu1"]."'>

                </a>
                <div class='pro-btn d-flex'>
                    <button type='submit' class='hidden-btn'>Mua ngay</button>
                    <button type='submit' class='hidden-btn ms-1'>Thêm vào giỏ</button>
                </div>
            </div>
            <div class='pro-detail'>
                <h3 class='pro-name'><a href='#'>".$giays[$i]["ten"]."</a></h3>
                <div class='pro-price'>
                    <p class='pro-price sale'>".$giasaukhigiam."₫
                        <span class='pro-price-retail'><del>".$giays[$i]["gia"]."₫</del></span>
                    </p>
                </div>
            </div>
            </div>
            ");
        }

    }

    public function TimKiemTuTrangKhac(){

    }
}
?>