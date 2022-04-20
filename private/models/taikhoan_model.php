<?php 
require_once("../backend/private/mobules/db_module.php");
class TaiKhoanModel{
	
	public function LoadThongTinTaiKhoan($idtaikhoan)
    {
        $link = "";
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_taikhoan WHERE tbl_taikhoan.idtaikhoan = $idtaikhoan");
        $khachhanginfor = array();
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($khachhanginfor, $row);
            break;
        }
        return $khachhanginfor[0];
    }
}
?>