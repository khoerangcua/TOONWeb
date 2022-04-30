<?php
require_once("private/Modules/db_module.php");
class DonDatHangModel{
public function LoadChiTietDonDatHang($iddondathang){
		$dondathang = array();
		$link = "";
		taoKetNoi($link);
		$result = chayTruyVanTraVeDL($link,"SELECT * FROM (SELECT tbl_dondathang.*, tbl_baidangban.diachianh, tbl_baidangban.tensach, tbl_taikhoan.diachi FROM (tbl_dondathang INNER JOIN tbl_baidangban ON tbl_dondathang.idbaidang = tbl_baidangban.idbaidang) INNER JOIN tbl_taikhoan ON tbl_dondathang.idnguoimua = tbl_taikhoan.idtaikhoan) AS ddhang WHERE ddhang.iddondathang = $iddondathang");
		while($rows = mysqli_fetch_assoc($result)){
		array_push($dondathang, $rows);
		break;
		}
		return $dondathang[0];
	}
public function LoadDonDatHangFull(){
		$dondathang = array();
		$link = "";
		taoKetNoi($link);
		$result = chayTruyVanTraVeDL($link,"SELECT tbl_dondathang.* , tbl_baidangban.diachianh, tbl_baidangban.tensach FROM tbl_dondathang INNER JOIN tbl_baidangban ON tbl_dondathang.idbaidang = tbl_baidangban.idbaidang ORDER BY tbl_dondathang.thoigian");
		while($rows = mysqli_fetch_assoc($result)){
		array_push($dondathang, $rows);
		
		}
		giaiPhongBoNho($link, $result);
		return $dondathang;
	 }
public function LoadSoLuongDonBan($idnguoiban){
		$link = "";
		taoKetNoi($link);
		$result = chayTruyVanTraVeDL($link,"SELECT tbl_dondathang.idnguoiban FROM tbl_dondathang WHERE idnguoiban = $idnguoiban");
		if(isset($result)){
			$soluongdonban = mysqli_num_rows($result);
			giaiPhongBoNho($link, $result);
			return $soluongdonban;	
		}
		else {
			return(0);
		}
	 }
public function LoadSoLuongDonMua($idnguoimua){
		$link = "";
		taoKetNoi($link);
		$result = chayTruyVanTraVeDL($link,"SELECT tbl_dondathang.idnguoimua FROM tbl_dondathang WHERE idnguoimua = $idnguoimua");
		if(isset($result)){
			$soluongdonmua = mysqli_num_rows($result);
			giaiPhongBoNho($link, $result);
			return $soluongdonmua;	
		}
		else {
			return(0);
		}
	 }
}
?>