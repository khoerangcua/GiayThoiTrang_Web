<?php
include_once("private/models/giaymodel.php");
include_once("private/models/hoadonmodel.php");
include_once("private/models/giamgiamodel.php");
include_once("private/models/bannermodel.php");
include_once("private/modules/config.php");


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
                    header("Location: index.php?page=home");
                    break;
            }
        }
        else {
            header("Location:index.php?page=home");
        }
    }

    public function TimKiemTuFillter(){

        $thuonghieu = isset($_GET["thuonghieu"]) ? $_GET["thuonghieu"] : -1;
        $gia = isset($_GET["gia"]) ? $_GET["gia"] : -1;
        $size = isset($_GET["size"]) ? $_GET["size"] : -1;

        $giays = array();
        $giayModel = new GiayModel();
        $giays = $giayModel->LoadGiayTheoFiller($thuonghieu,  $gia, $size);
        for ($i = 0; $i < count($giays); $i++) {
            $giasaukhigiam = ($giays[$i]["gia"] * $giays[$i]["phantramgiam"]) / 100;
            echo ("
            <div class='col-lg-3 col-md-6 col-6 products'>
            <div class='pro-img'>
                <div class='pro-sale'><span>-" . $giays[$i]["phantramgiam"] . "%</span></div>
                <a href='./?page=detail&id=" . $giays[$i]["id_giay"] . "'>
                    <img class='pro-img pro-img-1' src='" . $giays[$i]["anhchinh"] . "'>
                    <img class='pro-img' src='" . $giays[$i]["anhphu1"] . "'>

                </a>
                <div class='pro-btn d-flex'>
                    <button type='submit' class='hidden-btn'>Mua ngay</button>
                    <button type='submit' class='hidden-btn ms-1'>Thêm vào giỏ</button>
                </div>
            </div>
            <div class='pro-detail'>
                <h3 class='pro-name'><a href='#'>" . $giays[$i]["ten"] . "</a></h3>
                <div class='pro-price'>
                    <p class='pro-price sale'>" . $giasaukhigiam . "₫
                        <span class='pro-price-retail'><del>" . $giays[$i]["gia"] . "₫</del></span>
                    </p>
                </div>
            </div>
            </div>
            ");
        }

        $_SESSION['giays'] = $giays;
        

    }

    public function TimKiemTuTrangKhac(){


        if (isset($_GET["name"])) {
            $name = $_GET["name"];
            switch ($name) {
                case 'loai':
                    $this->LoadLoaiSP();
                    break;
                case 'xemthem':
                    $this->LoadXemThem();
                    break;
                default:
                    header("Location: ./?page=home");

                    break;
            }
        } else {
            header("Location: ./?page=home");
        }

        

    }

    public function LoadLoaiSP(){
        
        if (isset($_GET["value"])) {
            $giayModel = new GiayModel();
            $giays = $giayModel->LoadGiayTheoLoai($_GET["value"]);
            

            for ($i = 0; $i < count($giays); $i++) {
                $giasaukhigiam = ($giays[$i]["gia"] * $giays[$i]["phantramgiam"]) / 100;

                echo ("
                <div class='col-lg-3 col-md-6 col-6 products'>
                <div class='pro-img'>
                    <div class='pro-sale'><span>-" . $giays[$i]["phantramgiam"] . "%</span></div>
                    <a href='./?page=detail&id=" . $giays[$i]["id_giay"] . "'>
                        <img class='pro-img pro-img-1' src='" . $giays[$i]["anhchinh"] . "'>
                        <img class='pro-img' src='" . $giays[$i]["anhphu1"] . "'>
    
                    </a>
                    <div class='pro-btn d-flex'>
                        <button type='submit' class='hidden-btn'>Mua ngay</button>
                        <button type='submit' class='hidden-btn ms-1'>Thêm vào giỏ</button>
                    </div>
                </div>
                <div class='pro-detail'>
                    <h3 class='pro-name'><a href='#'>" . $giays[$i]["ten"] . "</a></h3>
                    <div class='pro-price'>
                        <p class='pro-price sale'>" . $giasaukhigiam . "₫
                            <span class='pro-price-retail'><del>" . $giays[$i]["gia"] . "₫</del></span>
                        </p>
                    </div>
                </div>
                </div>
                ");
            }

            $_SESSION['giays'] = $giays;
            
        } 
        else {
            header("Location: ./?page=home");
        }
        

    }
    public function LoadXemThem()
    {
        if (isset($_GET["value"])) {
            switch ($_GET["value"]) {
                case 'moi':
                    $this->LoadSPMoi();
                    break;
                case 'bestseller':
                    $this->LoadSPBanChay();
                    break;
                case 'hotsale':
                    $this->LoadSPGiamGia();
                    break;

                default:
                    header("Location: ./?page=home");

                    break;
            }
        } else {
            header("Location: ./?page=home");
        }
    }

    private function LoadSPMoi(){
        $giayModel = new GiayModel();
        $giays = $giayModel->LoadNew("2021-1-1");
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
        $_SESSION['giays'] = $giays;

    }
    private function LoadSPBanChay(){
        $hoadonModel = new HoaDonModel();
        $giays = $hoadonModel->BestSeller(1);
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
        $_SESSION['giays'] = $giays;

    }
    private function LoadSPGiamGia(){
        $giamgiaModel = new GiamGiaModel();
        $giays = $giamgiaModel->HotSale();
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

        $_SESSION['giays'] = $giays;



    }


    public function LoadBottomBanner(){
        $bannerModel = new  BannerModel();
        $banners = $bannerModel->LoadBanners("search", "bottom");
        for ($i=0; $i < count($banners); $i++) {
            if ($i == 0) {
                echo
                "
                <div class='carousel-item active'>
                    <img src='".$banners[$i]["diachianh"]."' class='d-block w-100' alt=''>
                </div>
                ";
            }
            else {
                echo
                    "
                    <div class='carousel-item'>
                    <img src='".$banners[$i]["diachianh"]."' class='d-block w-100' alt=''>
                    </div>
                    ";
            }
            
        }
        
    }

    public function LoadThanhPhanTrang(){

        if (isset($_SESSION["giays"])) {
            $giays = $_SESSION["giays"];
            // so luong san pham hien co
            
            $soluongsanphamhienco = count($giays);
            $total = ceil($soluongsanphamhienco / SO_SP_TREN_TRANG);
            for ($i=0; $i < $total ; $i++) {
                
                echo
                "
                <a class='page-num' href='phantrang=".$i."'>".$i."</a>
                ";
            }
        }
        else {
            echo
            "
            <a class='page-num' href='phantrang=0'>0</a>
            ";
        }

         

    }
}
?>