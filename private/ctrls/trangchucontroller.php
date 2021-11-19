<?php
require_once("private/models/bannermodel.php");
require_once("private/models/giaymodel.php");
class TrangChuController 
{
    public function LoadTopBanner(){
        $bannerModel = new BannerModel();
        $banners = $bannerModel->LoadBanners("trang chu", "top");

        echo "<div class='carousel-indicators'>";
        for ($i = 0; $i < count($banners); $i++) {

            if ($i == 0) {

                echo ("
                        <button 
                        type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide-to='" . $i . "' class ='active' aria-current='true' aria-label='Slide " . $i + 1 . "'>
                        </button> 
                     ");
            } else {
                echo ("
                        <button 
                        type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide-to='" . $i . "' class ='' aria-current='true' aria-label='Slide " . $i + 1 . "'>
                        </button> 
                     ");
            }
        }
        echo "</div>";

        echo "<div class='carousel-inner'>";
        for ($i = 0; $i < count($banners); $i++) {
            $active = "";

            if ($i == 0) {
                $active = "active";
            } else {
                $active = "";
            }

            echo ("
                    <a href='./?to=search&from=another&name=" . $banners[$i]['name'] . "&value=" . $banners[$i]["value"] . "' class='carousel-item " . $active . " '>
                    <img src='" . $banners[$i]["diachianh"] . "' class='d-block w-100' alt=''>
                    </a> 
                 ");
        }
        echo ("</div>");
        

    }
    public function LoadNewArrival($soluonghienthi){

        // load danh sách giày mới nhất
        $giayModel = new GiayModel();
        $giays = $giayModel->LoadNewArrival("2021-1-1");

        // thực hiện in ra danh sách       
        for ($i=0; $i < $soluonghienthi && $i < $giays ; $i++) {

            // trường hợp giày có thông tin giảm giá
            if (isset($giays[$i]["phantramgiam"])) {
                $giasaugiam = $giays[$i]["gia"]* (100 - 30)/100;
                echo ("
                        <div class='col-lg-3 col-md-6 col-6 products'>
                            <div class='pro-img'>
                                <div class='pro-sale'><span>-".$giays[$i]["phantramgiam"]."%</span></div>
                                <a href='./?to=detail&id=".$giays[$i]["id_giay"]."'>
                                    <img class='pro-img pro-img-1' src='".$giays[$i]["anhchinh"]."'>
                                    <img class='pro-img' src='".$giays[$i]["anhphu1"]."'>

                                </a>
                                <div class='pro-btn d-flex'>
                                    <a href='./?to=cart&id=".$giays[$i]["id_giay"]."&from=muangay' class='hidden-btn'><button type='submit' class='hidden-btn'>Mua ngay</button></a>
                                    <a href='./?to=cart&id=".$giays[$i]["id_giay"]."&from=themvaogio' class='hidden-btn ms-1'><button type='submit' class='hidden-btn'>Thêm vào giỏ</button></a>
                                </div>
                            </div>
                            <div class='pro-detail'>
                                <h3 class='pro-name'><a href='./?to=detail&id=".$giays[$i]["id_giay"]."'>".$giays[$i]["ten"]."</a></h3>
                                <div class='pro-price'>
                                    <p class='pro-price sale'>".$giasaugiam."đ 
                                        <span class='pro-price-retail'><del>".$giays[$i]["gia"]."₫</del></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                     ");
            }
            // Trường hợp giày không có thông tin giảm giá
            else{               
                echo ("
                        <div class='col-lg-3 col-md-6 col-6 products'>
                            <div class='pro-img'>
                                
                                <a href='./?to=detail&id=".$giays[$i]["id_giay"]."'>
                                    <img class='pro-img pro-img-1' src='".$giays[$i]["anhchinh"]."'>
                                    <img class='pro-img' src='".$giays[$i]["anhphu1"]."'>

                                </a>
                                <div class='pro-btn d-flex'>
                                    <a href='./?to=cart&id=".$giays[$i]["id_giay"]."&from=muangay' class='hidden-btn'><button type='submit' class='hidden-btn'>Mua ngay</button></a>
                                    <a href='./?to=cart&id=".$giays[$i]["id_giay"]."&from=themvaogio' class='hidden-btn ms-1'><button type='submit' class='hidden-btn'>Thêm vào giỏ</button></a>
                                </div>
                            </div>
                            <div class='pro-detail'>
                                <h3 class='pro-name'><a href='./?to=detail&id=".$giays[$i]["id_giay"]."'>".$giays[$i]["ten"]."</a></h3>
                                <div class='pro-price'>
                                    <p class='pro-price sale'> 
                                        <span class='pro-price-retail'>".$giays[$i]["gia"]."₫</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                     ");
            }
        }
    }
    public function LoadBestSeller($soluonghienthi){
        // Load danh sách giày bestseller
        $giaymodel = new GiayModel();
        $giays = $giaymodel->LoadBestSeller(1);
        $i = 0;

        // thực hiện in ra danh sách       
        for ($i=0; $i < $soluonghienthi && $i < count($giays) ; $i++) {

            // trường hợp giày có thông tin giảm giá
            if (isset($giays[$i]["phantramgiam"])) {
                $giasaugiam = $giays[$i]["gia"]* (100 - 30)/100;
                echo ("
                        <div class='col-lg-3 col-md-6 col-6 products'>
                            <div class='pro-img'>
                                <div class='pro-sale'><span>-".$giays[$i]["phantramgiam"]."%</span></div>
                                <a href='./?to=detail&id=".$giays[$i]["id_giay"]."'>
                                    <img class='pro-img pro-img-1' src='".$giays[$i]["anhchinh"]."'>
                                    <img class='pro-img' src='".$giays[$i]["anhphu1"]."'>

                                </a>
                                <div class='pro-btn d-flex'>
                                    <a href='./?to=cart&id=".$giays[$i]["id_giay"]."&from=muangay' class='hidden-btn'><button type='submit' class='hidden-btn'>Mua ngay</button></a>
                                    <a href='./?to=cart&id=".$giays[$i]["id_giay"]."&from=themvaogio' class='hidden-btn ms-1'><button type='submit' class='hidden-btn'>Thêm vào giỏ</button></a>
                                </div>
                            </div>
                            <div class='pro-detail'>
                                <h3 class='pro-name'><a href='./?to=detail&id=".$giays[$i]["id_giay"]."'>".$giays[$i]["ten"]."</a></h3>
                                <div class='pro-price'>
                                    <p class='pro-price sale'>".$giasaugiam."đ 
                                        <span class='pro-price-retail'><del>".$giays[$i]["gia"]."₫</del></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                     ");
            }

            // Trường hợp giày không có thông tin giảm giá
            else{               
                echo ("
                        <div class='col-lg-3 col-md-6 col-6 products'>
                            <div class='pro-img'>
                                
                                <a href='./?to=detail&id=".$giays[$i]["id_giay"]."'>
                                    <img class='pro-img pro-img-1' src='".$giays[$i]["anhchinh"]."'>
                                    <img class='pro-img' src='".$giays[$i]["anhphu1"]."'>

                                </a>
                                <div class='pro-btn d-flex'>
                                    <a href='./?to=cart&id=".$giays[$i]["id_giay"]."&from=muangay' class='hidden-btn'><button type='submit' class='hidden-btn'>Mua ngay</button></a>
                                    <a href='./?to=cart&id=".$giays[$i]["id_giay"]."&from=themvaogio' class='hidden-btn ms-1'><button type='submit' class='hidden-btn'>Thêm vào giỏ</button></a>
                                </div>
                            </div>
                            <div class='pro-detail'>
                                <h3 class='pro-name'><a href='./?to=detail&id=".$giays[$i]["id_giay"]."'>".$giays[$i]["ten"]."</a></h3>
                                <div class='pro-price'>
                                    <p class='pro-price sale'> 
                                        <span class='pro-price-retail'>".$giays[$i]["gia"]."₫</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                     ");
            }
        }

    }
    public function LoadHotSale($soluonghienthi){

        // Load danh sách giàu hotesale
        $giaymodel = new GiayModel();
        $giays = $giaymodel->LoadHotSale();

        // thực hiện in ra danh sách       
        for ($i=0; $i < $soluonghienthi && $i < $giays ; $i++) {

            // trường hợp giày có thông tin giảm giá
            if (isset($giays[$i]["phantramgiam"])) {
                $giasaugiam = $giays[$i]["gia"]* (100 - 30)/100;
                echo ("
                        <div class='col-lg-3 col-md-6 col-6 products'>
                            <div class='pro-img'>
                                <div class='pro-sale'><span>-".$giays[$i]["phantramgiam"]."%</span></div>
                                <a href='./?to=detail&id=".$giays[$i]["id_giay"]."'>
                                    <img class='pro-img pro-img-1' src='".$giays[$i]["anhchinh"]."'>
                                    <img class='pro-img' src='".$giays[$i]["anhphu1"]."'>

                                </a>
                                <div class='pro-btn d-flex'>
                                    <a href='./?to=cart&id=".$giays[$i]["id_giay"]."&from=muangay' class='hidden-btn'><button type='submit' class='hidden-btn'>Mua ngay</button></a>
                                    <a href='./?to=cart&id=".$giays[$i]["id_giay"]."&from=themvaogio' class='hidden-btn ms-1'><button type='submit' class='hidden-btn'>Thêm vào giỏ</button></a>
                                </div>
                            </div>
                            <div class='pro-detail'>
                                <h3 class='pro-name'><a href='./?to=detail&id=".$giays[$i]["id_giay"]."'>".$giays[$i]["ten"]."</a></h3>
                                <div class='pro-price'>
                                    <p class='pro-price sale'>".$giasaugiam."đ 
                                        <span class='pro-price-retail'><del>".$giays[$i]["gia"]."₫</del></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                     ");
            }

            // Trường hợp giày không có thông tin giảm giá
            else{               
                echo ("
                        <div class='col-lg-3 col-md-6 col-6 products'>
                            <div class='pro-img'>
                                
                                <a href='./?to=detail&id=".$giays[$i]["id_giay"]."'>
                                    <img class='pro-img pro-img-1' src='".$giays[$i]["anhchinh"]."'>
                                    <img class='pro-img' src='".$giays[$i]["anhphu1"]."'>

                                </a>
                                <div class='pro-btn d-flex'>
                                    <a href='./?to=cart&id=".$giays[$i]["id_giay"]."&from=muangay' class='hidden-btn'><button type='submit' class='hidden-btn'>Mua ngay</button></a>
                                    <a href='./?to=cart&id=".$giays[$i]["id_giay"]."&from=themvaogio' class='hidden-btn ms-1'><button type='submit' class='hidden-btn'>Thêm vào giỏ</button></a>
                                </div>
                            </div>
                            <div class='pro-detail'>
                                <h3 class='pro-name'><a href='./?to=detail&id=".$giays[$i]["id_giay"]."'>".$giays[$i]["ten"]."</a></h3>
                                <div class='pro-price'>
                                    <p class='pro-price sale'> 
                                        <span class='pro-price-retail'>".$giays[$i]["gia"]."₫</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                     ");
            }
        }
    }
    public function LoadBottomBanner(){
        $bannerModel = new  BannerModel();
        $banner = $bannerModel->LoadBanner("trang chu", "bot");
        echo "<a href='./?to=search&from=another&name=".$banner["name"]."&value=".$banner["value"]."'><img width='100%' src='".$banner["diachianh"]."'></a>";

    }
}
?>