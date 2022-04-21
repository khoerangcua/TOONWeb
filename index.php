<?php
session_start();
require_once("private/Controllers/Switchpagecontroller.php");
$_REQUEST
$switchpagecontroler = new SwichPageControler();
$switchpagecontroler->SwitchPage();
?>