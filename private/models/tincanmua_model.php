<?php
require_once("private/Modules/db_module.php");
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
		$result = chayTruyVanTraVeDL($link,"SELECT * FROM (SELECT tbl_tincanmua.*, tbl_taikhoan.anhnguoidung FROM tbl_tincanmua INNER JOIN tbl_taikhoan ON tbl_tincanmua.idtaikhoan = tbl_taikhoan.idtaikhoan) AS tcmua WHERE tcmua.idtincanmua = $idtincanmua");
		while($rows = mysqli_fetch_assoc($result)){
		array_push($tincanmua, $rows);
		break;
		}
		return $tincanmua[0];
	}
 }
?>