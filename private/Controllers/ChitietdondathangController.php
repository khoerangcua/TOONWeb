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
			<style>
				body {
					background-color: #FFD954;
				}
			</style>
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
							<p>Mã giao dịch: '.$dondathang["iddondathang"].'</p>
						</div>
					</div>
				</div>
        		<br style="clear:both">
				<div class="row contact">
					<div class="info-buyer">
						<button class="button contactbtn" style="padding: 10px 20px;">Đặt lại</button>
						<div>

						</div>
					</div>
				</div>
			</div>
			';
			
		}
	}
}
?>