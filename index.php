<?php
include_once("private/ctrls/switchpage_ctrl.php");
$switchpagecontroler = new SwichPage_Controler();
$switchpagecontroler->SwitchPage();

require_once("private/Bridge.php");


?>