<?php
require_once("private/Modules/db_module.php");
 class BaiDangBanModel{
	 public function LoadBaiDangBan(){
		$baidangban = array();
		$link = "";
		taoKetNoi($link);
		$result = chayTruyVanTraVeDL($link,"select * from tbl_baidangban");
		while($rows = mysqli_fetch_assoc($result)){
		array_push($baidangban, $rows);
		break;
		}
		giaiPhongBoNho($link, $result);
		return $baidangban;
	 }
	public function LoadChiTietBDBan($idbaidangban){
		$baidangban = array();
		$link = "";
		taoKetNoi($link);
		$result = chayTruyVanTraVeDL($link,"select * from tbl_baidangban where `idbaidang` = $idbaidangban");
		while($rows = mysqli_fetch_assoc($result)){
		array_push($baidangban, $rows);
		break;
		}
		return $baidangban[0];
	}
	 public function LoadTaiKhoan($idtaikhoan){
		$taikhoan = array();
		$link = "";
		taoKetNoi($link);
		$result = chayTruyVanTraVeDL($link,"select * from tbl_baidangban where `idbaidang` = $idbaidangban");
		while($rows = mysqli_fetch_assoc($result)){
		array_push($taikhoan, $rows);
		break;
		}
		return $taikhoan[0];
	 }
 }
?>