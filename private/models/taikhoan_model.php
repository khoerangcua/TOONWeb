<?php 
require_once("../backend/private/mobules/db_module.php");
class TaiKhoanModel{
	
	public function LoadTaiKhoanInfor($idtaikhoan)
    {
        $link = "";
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_taikhoan ");
        $khachhanginfor = array();
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($khachhanginfor, $row);
            break;
        }
        return $khachhanginfor[0];
    }
}
?>