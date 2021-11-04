<?php
require_once("private/models/bannermodel.php");
require_once("private/models/hoadonmodel.php");
require_once("private/models/salemodel.php");
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
                $active = "active";
            }
            else {
                    $active = "";
            }
            echo "<button 
                    type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide-to='".$i."' class ='$active' aria-current='true' aria-label='Slide ". $i + 1 ."'>
                    </button>" ;   
            
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
             </a>";
        }
        echo("</div>");
        

    }
    public function LoadNewArrivals(){

    }
    public function LoadBestSeller(){

    }
    public function LoadHotSale(){

    }
    public function LoadBottomBanner(){

    }

}



?>