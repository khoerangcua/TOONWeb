<?php
require_once("../backend/private/modules/db_module.php");
 class TinCanMuaModel{
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
		$result = chayTruyVanTraVeDL($link,"select * from tbl_baidangban");
		while($rows = mysqli_fetch_assoc($result)){
		array_push($baidangban, $rows);
		break;
		}
		return $baidangban[0];
	}
 }
?>