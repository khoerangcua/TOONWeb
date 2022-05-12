<?php
session_start();
require_once("private/Controllers/Switchpagecontroller.php");
$switchpagecontroler = new SwichPageControler();
$switchpagecontroler->SwitchPage();
$ngay = date("Y-m-d",mktime(0,0,0, date("m")-2, date("d"), date("Y")));
echo $ngay;
?>

