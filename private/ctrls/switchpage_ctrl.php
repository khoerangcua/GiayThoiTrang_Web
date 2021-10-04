<?php
class SwichPage_Controler
{
    public function SwitchPage()
    {
        if (isset($_GET['page'])) {
            switch ($_GET['page']) {
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
