<?php
require_once("private/Models/dondathang_model.php");
class ChiTietDonDatHangCtrl
{
	public function LoadChiTietDonDatHang()
	{
		
		$id_DDHang = isset($_GET["id"]) ? $_GET["id"] : -1;
		if ($id_DDHang == -1) {
			echo '<script>alert("Không tìm thấy đơn hàng!")</script>';
		} else {

			if (isset($_GET["action"])) {
				if ($_GET["action"] == "chapnhandonhang") {
					$this->ChapNhanDonHang($id_DDHang);
				
				}
				else{
					$this->XacNhanDaNhanHang($id_DDHang);
				
				}
			}
	

			if ($_GET["loai"] == "dondatmua") {
				$this->LoadChiTietDonDatMua($id_DDHang);
			} else {
				$this->LoadChiTietDonBanHang($id_DDHang);
			}
		}
	}

	private function LoadChiTietDonBanHang($id_DDHang)
	{
		$dondathangModel = new DonDatHangModel();
		$dondathang = $dondathangModel->LoadChiTietDonDatHang($id_DDHang);
		echo '
			<div class="container">
				<div class="row ">
					<p class="detail-header">Chi tiết đơn bán hàng</p>
				</div>

				<div class="row info-item-buy">
					<div class="col-md-4 col-lg-3 col-xl-3 col-12 text-center">
						<img class="imgchitietMNCDT" src="' . $dondathang["diachianh"] . '">
					</div>
					<div class="col-md-8 col-lg-9 col-xl-9 col-12">
				
						<div class="desc">
							<p class="name-buy">' . $dondathang["tensach"] . '</p>
							<p class="price-buy">Giá: ' . $dondathang["dongia"] . 'đ</p>
							<p>Tình trạng: ' . $dondathang["tinhtrang"] . '</p>
							<p class="info-buy tx"> Địa chỉ nhận hàng: ' . $dondathang["diachi"] . '</p>
							<p>Mã giao dịch người bán: ' . $dondathang["idnguoiban"] . '</p>
							<p>Mã giao dịch người mua: ' . $dondathang["idnguoimua"] . '</p>
						</div>
					</div>
				</div>
				<form action="" method="get">
					<div class="row confirm justify-content-end">
						<p class="col-3">Bạn có muốn chấp nhận đơn hàng này?</p>
						<input type="hidden" name="action" value="chapnhandonhang"></input>
						<input type="hidden" name="to" value="chitietdondathang"></input>
						<input type="hidden" name="loai" value="donbanhang"></input>
						<input type="hidden" name="id" value="' . $dondathang["iddondathang"] . '"></input>
						<button class="button btn-allow col-2" style="width: 300px;padding: 5px 20px; font-size:14px">Chấp nhận đơn hàng</button>
					</div>
				</form>
			</div>
			';
	}

	private function LoadChiTietDonDatMua($id_DDHang)
	{

		$dondathangModel = new DonDatHangModel();
		$dondathang = $dondathangModel->LoadChiTietDonDatHang($id_DDHang);
		echo '
			<div class="container">
				<div class="row ">
					<p class="detail-header">Chi tiết đơn đặt mua</p>
				</div>

				<div class="row info-item-buy">
					<div class="col-md-4 col-lg-3 col-xl-3 col-12 text-center">
						<img class="imgchitietMNCDT" src="' . $dondathang["diachianh"] . '">
					</div>
					<div class="col-md-8 col-lg-9 col-xl-9 col-12">
				
						<div class="desc">
							<p class="name-buy">' . $dondathang["tensach"] . '</p>
							<p class="price-buy">Giá: ' . $dondathang["dongia"] . 'đ</p>
							<p>Tình trạng: ' . $dondathang["tinhtrang"] . '</p>
							<p class="info-buy tx"> Địa chỉ nhận hàng: ' . $dondathang["diachi"] . '</p>
							<p>Mã giao dịch người bán: ' . $dondathang["idnguoiban"] . '</p>
							<p>Mã giao dịch người mua: ' . $dondathang["idnguoimua"] . '</p>
						</div>
					</div>
				</div>
				<form action="" method="get">
					<div class="row confirm justify-content-end">
						<p class="col-3">Đơn hàng này đã được giao tới bạn?</p>	
						<input type="hidden" name="action" value="xacnhandanhanhang"></input>
						<input type="hidden" name="to" value="chitietdondathang"></input>
						<input type="hidden" name="loai" value="dondatmua"></input>
						<input type="hidden" name="id" value="' . $dondathang["iddondathang"] . '"></input>
						<button class="button btn-allow col-2" style="width: 300px;padding: 5px 20px; font-size:14px">Xác nhận đã nhận hàng</button>
					</div>
				</form>
			</div>
			';
	}

	private function ChapNhanDonHang($id_DDHang){
		$dondathangModel = new DonDatHangModel();
		$dondathangModel->CapNhatTinhTrang($id_DDHang, 1);
	}

	private function XacNhanDaNhanHang($id_DDHang){
		$dondathangModel = new DonDatHangModel();
		$dondathangModel->CapNhatTinhTrang($id_DDHang, 2);
	}
}
