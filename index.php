<?php
session_start();
require_once("private/ctrls/switchpage_ctrl.php");
$switchpagecontroler = new SwichPage_Controler();
$switchpagecontroler->SwitchPage();
?>   