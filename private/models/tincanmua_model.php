<?php
require_once("../backend/private/mobules/db_module.php");
 class TinCanMuaModel{
	 public function LoadTinCanMua(){
		$tincanmua = array();
		$link = "";
		taoKetNoi($link);
		$result = chayTruyVanTraVeDL($link,"select * from tbl_tincanmua");
		while($rows = mysqli_fetch_assoc($result)){
		array_push($tincanmua, $rows);
		break;
		}
		giaiPhongBoNho($link, $result);
		return $tincanmua;
	 }
	public function LoadChiTietTCMua($idtincanmua){
		$tincanmua = array();
		$link = "";
		taoKetNoi($link);
		$result = chayTruyVanTraVeDL($link,"select * from tbl_tincanmua");
		while($rows = mysqli_fetch_assoc($result)){
		array_push($tincanmua, $rows);
		break;
		}
		return $tincanmua[0];
	}
 }
?>