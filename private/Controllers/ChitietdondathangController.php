<?php 
require_once("private/Models/dondathang_model.php");
class ChiTietDonDatHangCtrl
{
	public function LoadChiTietDonDatHang()
	{
		
		$id_DDHang = isset($_GET["id"]) ? $_GET["id"] : -1;
		if ($id_DDHang == -1 ){
			 echo '<script>alert("Không tìm thấy đơn hàng!")</script>';
		}
		else{
			$dondathangModel = new DonDatHangModel();
			$dondathang = $dondathangModel->LoadChiTietDonDatHang($id_DDHang);
			echo'
			<div class="container">
				<div class="row ">
					<p class="detail-header">Chi tiết Đơn đặt hàng</p>
				</div>

				<div class="row info-item-buy">
					<div class="col-md-4 col-lg-3 col-xl-3 col-12 text-center">
						<img class="imgchitietMNCDT" src="'.$dondathang["diachianh"].'">
					</div>
					<div class="col-md-8 col-lg-9 col-xl-9 col-12">
				
						<div class="desc">
							<p class="name-buy">'.$dondathang["tensach"].'</p>
							<p class="price-buy">Giá: '.$dondathang["dongia"].'đ</p>
							<p>Tình trạng: '.$dondathang["tinhtrang"].'</p>
							<p class="info-buy tx"> Địa chỉ nhận hàng: '.$dondathang["diachi"].'</p>
							<p>Mã giao dịch người bán: '.$dondathang["idnguoiban"].'</p>
							<p>Mã giao dịch người mua: '.$dondathang["idnguoimua"].'</p>
						</div>
					</div>
				</div>
				<div class="row confirm justify-content-end">
						<p class="col-3">Đơn hàng này đã được giao tới bạn?</p>
						<button class="button btn-allow col-2" style="width: 300px;padding: 5px 20px; font-size:14px">Xác nhận đã nhận hàng</button>
						<div>
					</div>
				</div>
			</div>
			';
			
		}
	}
}
?>