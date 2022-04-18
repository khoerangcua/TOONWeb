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
}
?>