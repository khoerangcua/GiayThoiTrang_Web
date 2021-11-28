<?php
class SwichPage_Controler
{
    public function SwitchPage()
    {
        if (isset($_GET['to'])) {
            switch ($_GET['to']) {
                case 'detail':
                    include_once("public/views/chitietsp.php");
                    break;
                case 'cart':
                    include_once("public/views/giohang.php");
                    break;
                case 'search':
                    include_once("public/views/ketquatimkiem.php");
                    break;
                case 'login':
                    include_once("public/views/login.php");
                    break;
                case 'signup':
                    include_once("public/views/dangky.php");
                    break;
                case 'rspw':
                    include_once("public/views/resetpassword.php");
                    break;
                case 'admin':
                        include_once("indexAD.php");
                        break;
				case 'bannerAD':
					include_once("public/views/thaotacBanner.php");
					break;
				case 'giayAD':
					include_once("public/views/thaotacSP.php");
					break;
				case 'brandAD':
					include_once("public/views/thaotacBrand.php");
					break;
                case 'purchase':
                    include_once("public/views/thanhtoan.php");
                    break;
                case 'account':
                    include_once("public/views/thongtintaikhoan.php");
                    break;
                case 'changepassword':
                    include_once("public/views/doimatkhau.php");
                    break;
                default:
                    include_once("public/views/trangchu.php");
                    break;
            }
        } else {
            include_once("public/views/trangchu.php");
        }
    }
}
?>
