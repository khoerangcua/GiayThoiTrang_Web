<?php
include_once("private/models/giaymodel.php");
include_once("private/models/hoadonmodel.php");
include_once("private/models/giamgiamodel.php");
include_once("private/models/bannermodel.php");
include_once("private/modules/config.php");


class TimKiemController{
    
    //
    // Xác định chức năng tìm kiếm
    //

    public function TimKiem()
    {
        // Kiểm tra đế từ trang nào
        if (isset($_GET["from"])) {
            $from = $_GET["from"];
            switch ($from) {

                    // Đến từ bản thân
                case 'self':
                    $this->TimKiemTuFillter();
                    break;

                    // đến từ trang khác
                case 'another':
                    $this->TimKiemTuTrangKhac();
                    break;
                default:
                    // header("Location: ./?to=home");
                    break;
            }
        } else {
            // header("Location: ./?to=home");
        }
    }
    private function TimKiemTuFillter()
    {

        // Lấy tham số tìm kiếm: thương hiệu, giá, size
        $thuonghieu = isset($_GET["thuonghieu"]) ? $_GET["thuonghieu"] : -1;
        $gia = isset($_GET["gia"]) ? $_GET["gia"] : -1;
        $size = isset($_GET["size"]) ? $_GET["size"] : -1;

        //Truy vấn danh sách giày
        $giays = array();
        $giayModel = new GiayModel();
        $giays = $giayModel->LoadGiayTheoFiller($thuonghieu,  $gia, $size);



        //Kiểm tra có phân trang chưa
        $page = isset($_GET["page"]) ? $_GET["page"] : 1;
        $this->LoadGiays($giays, $page);

        // Lưu danh sách giày vào session
        $_SESSION['giays'] = $giays;
    }
    private function TimKiemTuTrangKhac()
    {
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
                    header("Location: ./?to=home");
                    break;
            }
        } else {
            header("Location: ./?to=home");
        }
    }

    //
    // Tim kiếm từ các trang khác
    //
    private function LoadLoaiSP()
    {

        if (isset($_GET["value"])) {

            // Truy vấn danh sách sản phẩm theo loại
            $giayModel = new GiayModel();
            $giays = $giayModel->LoadGiayTheoLoai($_GET["value"]);


            //Kiểm tra có phân trang chưa
            $page = isset($_GET["page"]) ? $_GET["page"] : 1;
            $this->LoadGiays($giays, $page);

            // Lưu danh sách giày vào session
            $_SESSION['giays'] = $giays;
        } else {
            
            header("Location: ./?to=home");
        }
        

    }
    private function LoadXemThem()
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
                    header("Location: ./?to=home");

                    break;
            }
        } else {
            header("Location: ./?to=home");
        }
    }

    private function LoadSPMoi()
    {

        //Truy vấn danh sách sản phẩm newarrival
        $giayModel = new GiayModel();
        $giays = $giayModel->LoadNewArrival("2021-1-1");

        //Kiểm tra có phân trang chưa
        $page = isset($_GET["page"]) ? $_GET["page"] : 1;
        $this->LoadGiays($giays, $page);

        // Lưu danh sách giày vào session
        $_SESSION['giays'] = $giays;
    }
    private function LoadSPBanChay()
    {

        // Truy vấn danh sách sản phẩm BestSeller
        $giayModel = new GiayModel();
        $giays = $giayModel->LoadBestSeller(1);

        //Kiểm tra có phân trang chưa
        $page = isset($_GET["page"]) ? $_GET["page"] : 1;
        $this->LoadGiays($giays, $page);

        // Lưu danh sách giày vào session
        $_SESSION['giays'] = $giays;
    }

    private function LoadSPGiamGia()
    {

        // Truy vấn danh sách sản phẩm HoteSale
        $giayModel = new GiayModel();
        $giays = $giayModel->LoadHotSale();

        //Kiểm tra có phân trang chưa
        $page = isset($_GET["page"]) ? $_GET["page"] : 1;
        $this->LoadGiays($giays, $page);

        // Lưu danh sách giày vào session
        $_SESSION['giays'] = $giays;
    }

    public function LoadBottomBanner()
    {
        $bannerModel = new  BannerModel();
        $banners = $bannerModel->LoadBanners("tim kiem", "bot");
        for ($i = 0; $i < count($banners); $i++) {
            if ($i == 0) {
                echo
                "
                <div class='carousel-item active'>
                    <img src='" . $banners[$i]["diachianh"] . "' class='d-block w-100' alt=''>
                </div>
                ";
            } else {
                echo
                "
                    <div class='carousel-item'>
                    <img src='" . $banners[$i]["diachianh"] . "' class='d-block w-100' alt=''>
                    </div>
                    ";
            }
        }
    }

    //
    // Hiển thị sản phẩm và tạo thanh phân trang
    //
    public function LoadThanhPhanTrang()
    {

        if (isset($_SESSION["giays"])) {

            $giays = $_SESSION["giays"];

            // Số lượng sản phẩm hiện có            
            $soluongsanphamhienco = count($giays);

            // Số trang hiển thị
            $total = ceil($soluongsanphamhienco / SO_SP_TREN_TRANG);

            // Kiểm tra đến từ trang nào
            if ($_GET["from"] == "self") {
                
                // Lấy url hiện tại
                $thuonghieu = isset($_GET["thuonghieu"]) ? $_GET["thuonghieu"] : -1;
                $gia = isset($_GET["gia"]) ? $_GET["gia"] : -1;
                $size = isset($_GET["size"]) ? $_GET["size"] : -1;

                $href = "./?to=search&from=self";
                if ($thuonghieu != -1) {
                    for (
                        $i = 0;
                        $i < count($thuonghieu);
                        $i++
                    ) {
                        $href .= "&thuonghieu%5B%5D=" . $thuonghieu[$i] . "";
                    }
                }
                if ($gia != -1) {
                    for ($i = 0; $i < count($gia); $i++) {
                        $href .= "&gia%5B%5D=" . $gia[$i] . "";
                    }
                }
                if ($size != -1) {
                    for ($i = 0; $i < count($size); $i++) {
                        $href .= "&size%5B%5D=" . $size[$i] . "";
                    }
                }

                // Hiển thị thanh phân trang
                for ($i = 1; $i <= $total; $i++) {

                    echo
                    "
                      <a class='to-num' href='$href&page=$i' >$i</a>
                    ";
                }
            } else {

                // Lấy url
                $name = $_GET["name"];
                $value = $_GET["value"];

                // Hiển thị thanh phân trang
                for ($i = 1; $i <= $total; $i++) {

                    echo
                    "
                        <a class='to-num' href='./?to=search&from=another&name=" . $name . "&value=" . $value . "&page=" . $i . "'>" . $i . "</a>
                    ";
                }
            }
        }
    }
    private function LoadGiays($giays, $page)
    {
        $from = ($page - 1) * SO_SP_TREN_TRANG;
        $dem = 1;
        for ($i = $from; $i < count($giays) && $dem <= SO_SP_TREN_TRANG; $i++) {

            // Trường hợp giày có thông tin giảm giá
            if (isset($giays[$i]["phantramgiam"])) {
                $giasaugiam = $giays[$i]["gia"] * (100 - $giays[$i]["phantramgiam"]) / 100;
                echo ("
                        <div class='col-lg-3 col-md-6 col-6 products'>
                            <div class='pro-img'>
                                <div class='pro-sale'><span>-" . $giays[$i]["phantramgiam"] . "%</span></div>
                                <a href='./?to=detail&id=" . $giays[$i]["id_giay"] . "'>
                                    <img class='pro-img pro-img-1' src='" . $giays[$i]["anhchinh"] . "'>
                                    <img class='pro-img' src='" . $giays[$i]["anhphu1"] . "'>

                                </a>
                                <div class='pro-btn d-flex'>
                                    <a href='./?to=cart&id=" . $giays[$i]["id_giay"] . "&from=muangay' class='hidden-btn'><button type='submit' class='hidden-btn'>Mua ngay</button></a>
                                    <a href='./?to=cart&id=" . $giays[$i]["id_giay"] . "&from=themvaogio' class='hidden-btn ms-1'><button type='submit' class='hidden-btn'>Thêm vào giỏ</button></a>
                                </div>
                            </div>
                            <div class='pro-detail'>
                                <h3 class='pro-name'><a href='./?to=detail&id=" . $giays[$i]["id_giay"] . "'>" . $giays[$i]["ten"] . "</a></h3>
                                <div class='pro-price'>
                                    <p class='pro-price sale'>" . $giasaugiam . "đ 
                                        <span class='pro-price-retail'><del>" . $giays[$i]["gia"] . "₫</del></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                     ");
            }

            // Trường hợp giày không có thông tin giảm giá
            else {
                echo ("
                        <div class='col-lg-3 col-md-6 col-6 products'>
                            <div class='pro-img'>
                                
                                <a href='./?to=detail&id=" . $giays[$i]["id_giay"] . "'>
                                    <img class='pro-img pro-img-1' src='" . $giays[$i]["anhchinh"] . "'>
                                    <img class='pro-img' src='" . $giays[$i]["anhphu1"] . "'>

                                </a>
                                <div class='pro-btn d-flex'>
                                    <a href='./?to=cart&id=" . $giays[$i]["id_giay"] . "&from=muangay' class='hidden-btn'><button type='submit' class='hidden-btn'>Mua ngay</button></a>
                                    <a href='./?to=cart&id=" . $giays[$i]["id_giay"] . "&from=themvaogio' class='hidden-btn ms-1'><button type='submit' class='hidden-btn'>Thêm vào giỏ</button></a>
                                </div>
                            </div>
                            <div class='pro-detail'>
                                <h3 class='pro-name'><a href='./?to=detail&id=" . $giays[$i]["id_giay"] . "'>" . $giays[$i]["ten"] . "</a></h3>
                                <div class='pro-price'>
                                    <p class='pro-price sale'> 
                                        <span class='pro-price-retail'>" . $giays[$i]["gia"] . "₫</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                     ");
            }

            $dem++;
        }
    }

    
}
?>