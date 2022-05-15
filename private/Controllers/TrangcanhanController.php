<?php 
require_once("private/models/taikhoan_model.php");
require_once("private/models/dondathang_model.php");
class TrangCaNhanCtrl
{
	public function LoadThongTinCaNhan()
	{
		$idtaikhoan = isset($_GET["id"]) ? $_GET["id"] : -1;
		if ($idtaikhoan == -1 ){
			 echo '<script>alert("Không tìm thấy tài khoản!")</script>';
		}
		else{
			$taikhoanModel = new TaiKhoanModel();
			$taikhoan = $taikhoanModel->LoadThongTinTaiKhoan($idtaikhoan);
			echo'
			<div class="info text-center">
                <img class="avt" src="'.$taikhoan['anhnguoidung'].'">
                <p class="name">'.$taikhoan['hoten'].'<a href="" class="editinfo"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                    </svg></a></p> 
                
                <p>'.$taikhoan['sdt'].'</p>
                <p>'.$taikhoan['tentinhthanh'].'</p>
                <a href="index.php?to=quanlycanhan&id='.$taikhoan['idtaikhoan'].'&xem=tinmua"><button class="button btn-baidang">Danh sach bai dang</button></a>
            </div>
			';
		}
	}
	public function LoadSoLuongDonHang()
	{
		$idtaikhoan = $_GET["id"];
		if (isset($idtaikhoan)){
			$dondathangModel = new DonDatHangModel();
			$soluongdonban = $dondathangModel->LoadSoLuongDonBan($idtaikhoan);
			$soluongdonmua = $dondathangModel->LoadSoLuongDonMua($idtaikhoan);
			echo'
			<div class="col-lg-6 col-md-6 col-12 text-center">
                <p class="txt-traded">Đơn hàng đã bán</p>
                <p class="txt-amount">'.$soluongdonban.'</p>
            </div>
            <div class="col-lg-6 col-md-6 col-12 text-center">
                <p class="txt-traded">Đơn hàng đã mua</p>
                <p class="txt-amount">'.$soluongdonmua.'</p>
            </div>
			';
		}
		else{
			echo'
			<div class="col-lg-6 col-md-6 col-12 text-center">
                <p class="txt-traded">Đơn hàng đã bán</p>
                <p class="txt-amount">0</p>
            </div>
            <div class="col-lg-6 col-md-6 col-12 text-center">
                <p class="txt-traded">Đơn hàng đã mua</p>
                <p class="txt-amount">0</p>
            </div>
			';
		}
	}
}
?>