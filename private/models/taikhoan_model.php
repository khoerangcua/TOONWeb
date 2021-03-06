<?php
require_once("private/Modules/db_module.php");
class TaiKhoanModel
{

    public function LoadThongTinTaiKhoan($idtaikhoan)
    {
        $link = "";
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT * FROM(SELECT tbl_taikhoan.*, tbl_tinhthanh.tentinhthanh FROM tbl_taikhoan INNER JOIN tbl_tinhthanh ON tbl_taikhoan.idtinhthanh = tbl_tinhthanh.idtinhthanh ) AS bang WHERE bang.idtaikhoan = $idtaikhoan");
        $khachhanginfor = array();
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($khachhanginfor, $row);
            break;
        }
        return $khachhanginfor[0];
    }
	

    public function DangNhap($tendangnhap, $matkhau)
    {
        $link = null;
        taoKetNoi($link);

        $username = mysqli_real_escape_string($link, $tendangnhap);
        $password = md5($matkhau);

        $result = chayTruyVanTraVeDL($link, "SELECT * FROM `tbl_taikhoan` WHERE tentaikhoan = '$username' AND matkhau = '$password'");
        $idtaikhoan = "";
        if ($result == true) {
            while ($rows = mysqli_fetch_assoc($result)) {
                $idtaikhoan = $rows["idtaikhoan"];
                break;
            }
            giaiPhongBoNho($link, $result);
            $_SESSION["idtaikhoan"] = $idtaikhoan;
            if ($idtaikhoan != "") {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function DangKy($tendangnhap, $matkhau, $ho, $ten, $sodienthoai, $email)
    {


        $link = null;
        taoKetNoi($link);

        $username = mysqli_real_escape_string($link, $tendangnhap);
        $password = md5($matkhau);
        $hoten = $ho . " " . $ten;

        chayTruyVanKhongTraVeDL($link, "INSERT INTO `tbl_taikhoan` VALUES (NULL, 
                                                                    '$hoten', '$sodienthoai', '', 1,
                                                                    '$username', '$password', '$email', 'https://lh3.googleusercontent.com/2RKyd1W-d1ZV6aEPri7I6bd4Ss-0QcgYb9NgaJDDUeJM3BX9g_wHRiFyiPl2EvJvVh-KrA', 'fre')"
                                                                    );
        echo("dang ky thanh cong");
        
    }

    public function kiemTraTonTaiTenDangNhap($tendangnhap){
        $link = null;
        taoKetNoi($link);
        $username = mysqli_real_escape_string($link, $tendangnhap);

        $result = chayTruyVanTraVeDL($link, "SELECT * FROM `tbl_taikhoan` WHERE tentaikhoan = '$username'");
        while (mysqli_fetch_assoc($result)) {
            giaiPhongBoNho($link, $result);
            return true;
        }
        return false;
        
    }
}
