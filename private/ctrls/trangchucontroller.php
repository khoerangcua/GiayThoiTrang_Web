<?php
require_once("private/models/bannermodel.php");
require_once("private/models/hoadonmodel.php");
require_once("private/models/giamgiamodel.php");
require_once("private/models/giaymodel.php");

class TrangChuController 
{
    public function LoadTopBanner(){
        $bannerModel = new BannerModel();
        $banners = $bannerModel->showSlideBanner();

        echo "<div class='carousel-indicators'>";
        
        for ($i=0; $i < count($banners) ; $i++) { 
            $active = "";
            
            if ($i == 0) {
                
                echo "
                <button 
                type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide-to='".$i."' class ='active' aria-current='true' aria-label='Slide ". $i + 1 ."'>
                </button> 
                " ;
            }
            else {                    
                    echo "
                    <button 
                    type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide-to='".$i."' class ='' aria-current='true' aria-label='Slide ". $i + 1 ."'>
                    </button> 
                    " ;
            }
            
            
            
        }
        echo "</div>";

        echo "<div class='carousel-inner'>";
        
        for ($i=0; $i < count($banners) ; $i++) { 
            $active = "";
            
            if ($i == 0) {
                $active = "active";
            }
            else {
                    $active = "";
            }
            
             echo "<a href='./? page=search&name=". $banners[$i]['name']."&value=". $banners[$i]["value"]."' class='carousel-item ". $active." '>
             <img src='".$banners[$i]["diachianh"]."' class='d-block w-100' alt=''>
             </a> ";
             
        }
        echo("</div>");
        

    }
    public function LoadNewArrivals(){
        $giayModel = new GiayModel();
        $giays = $giayModel->LoadNew("2021-1-1");
        $i = 0;
        foreach ($giays as $key => $value) {
            if ($i<8) {
                $giasaudiscount = ( $value["gia"] * $value["phantramgiam"]) /100;
            echo
            "
            <div class='col-lg-3 col-md-6 col-6 products'>
						<div class='pro-img'>
							<div class='pro-sale'><span>-".$value["phantramgiam"]."%</span></div>
							<a href='?page=cart&id=".$value["id_giay"]."'>
								<img class='pro-img pro-img-1' src='".$value["anhchinh"]."'>
								<img class='pro-img' src='".$value["anhphu1"]."'>

							</a>
							<div class='pro-btn d-flex'>
								<button type='submit' class='hidden-btn'>Mua ngay</button>
								<button type='submit' class='hidden-btn ms-1'>Thêm vào giỏ</button>
							</div>
						</div>
						<div class='pro-detail'>
							<h3 class='pro-name'><a href='?page=cart&id=".$value["id_giay"]."'>".$value["ten"]."</a></h3>
							<div class='pro-price'>
								<p class='pro-price sale'>".$giasaudiscount. "₫
									<span class='pro-price-retail'><del>".$value["gia"]." ₫</del></span>
								</p>
							</div>
						</div>
					</div>

            ";
            }
            else {
                break;
            }
            $i++;
            
        }



    }
    public function LoadBestSeller(){
        $hoadonModel = new HoaDonModel();
        $giays = $hoadonModel->BestSeller(1);
        $i = 0;
        foreach ($giays as $key => $value) {
            if ($i < 8) {
                $giasaudiscount = ($value["gia"] * $value["phantramgiam"]) / 100;
                
                echo
                "
            <div class='col-lg-3 col-md-6 col-6 products'>
						<div class='pro-img'>
							<div class='pro-sale'><span>-" . $value["phantramgiam"] . "%</span></div>
							<a href='?page=cart&id=" . $value["id_giay"] . "'>
								<img class='pro-img pro-img-1' src='" . $value["anhchinh"] . "'>
								<img class='pro-img' src='" . $value["anhphu1"] . "'>

							</a>
							<div class='pro-btn d-flex'>
								<button type='submit' class='hidden-btn'>Mua ngay</button>
								<button type='submit' class='hidden-btn ms-1'>Thêm vào giỏ</button>
							</div>
						</div>
						<div class='pro-detail'>
							<h3 class='pro-name'><a href='?page=cart&id=" . $value["id_giay"] . "'>" . $value["ten"] . "</a></h3>
							<div class='pro-price'>
								<p class='pro-price sale'>" . $giasaudiscount . "₫
									<span class='pro-price-retail'><del>" . $value["gia"] . " ₫</del></span>
								</p>
							</div>
						</div>
					</div>

            ";
            } else {
                break;
            }
            $i++;
            
        }

    }
    public function LoadHotSale(){
        $giamgiaModel = new GiamGiaModel();
        $giays = $giamgiaModel->HotSale();
        $i = 0;
        foreach ($giays as $key => $value) {
            if ($i < 8) {
                $giasaudiscount = ($value["gia"] * $value["phantramgiam"]) / 100;
                
                echo
                "
            <div class='col-lg-3 col-md-6 col-6 products'>
						<div class='pro-img'>
							<div class='pro-sale'><span>-" . $value["phantramgiam"] . "%</span></div>
							<a href='?page=cart&id=" . $value["id_giay"] . "'>
								<img class='pro-img pro-img-1' src='" . $value["anhchinh"] . "'>
								<img class='pro-img' src='" . $value["anhphu1"] . "'>

							</a>
							<div class='pro-btn d-flex'>
								<button type='submit' class='hidden-btn'>Mua ngay</button>
								<button type='submit' class='hidden-btn ms-1'>Thêm vào giỏ</button>
							</div>
						</div>
						<div class='pro-detail'>
							<h3 class='pro-name'><a href='?page=cart&id=" . $value["id_giay"] . "'>" . $value["ten"] . "</a></h3>
							<div class='pro-price'>
								<p class='pro-price sale'>" . $giasaudiscount . "₫
									<span class='pro-price-retail'><del>" . $value["gia"] . " ₫</del></span>
								</p>
							</div>
						</div>
					</div>

            ";
            } else {
                break;
            }
            $i++;
            
        }

    }
    public function LoadBottomBanner(){
        $bannerModel = new  BannerModel();
        $banner = $bannerModel->showImgBanner();
        echo "<a href='?page=search&name=".$banner["name"]."&value=".$banner["value"]."'><img width='100%' src='".$banner["diachianh"]."'></a>";

    }

}



?>