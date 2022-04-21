<?php 
require_once("private/models/baidangban_model.php");
require_once("private/models/tincanmua_model.php");
require_once("private/models/dondathang_model.php");
class TrangQuanLyCaNhanCtrl
{
	public function LoadThongTinTrang()
	{
		if (isset($_GET["xem"])) 
		{
			switch($_GET["xem"])
			{
				case "tinban":
					$this->LoadTinBanFull();
					break;
				case "donban":
					$this->LoadDonBanFull();
					break;
				case "tinmua":
					$this->LoadTinMuaFull();
					break;
				case "donmua":
					$this->LoadDonBanFull();
					break;
			}	
		}
		else echo '<script>alert("Không tìm thấy bài đăng!")</script>';
	}
	public function LoadTinBanFull()
	{
		$baidangbanModel = new BaiDangBanModel();
		$baidangban = $baidangbanModel->LoadBaiDangBanFull();
			
		for($i = 0; $i < count($baidangban); $i++){
			echo '
			<div class="row items">
                    <div class="col-md-3 col-lg-2 col-xl-2 col-5">
                        <a href="index.php?to=chitiettincanban&id='.$baidangban[$i]["idbaidang"].'" class="img-wrapper">
                            <img class="pro-img" src="'.$baidangban[$i]["diachianh"].'">
                        </a>
                    </div>
                    <div class="col-md-9 col-lg-10 col-xl-10 col-7">
                        <div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="index.php?to=chitiettincanban&id='.$baidangban[$i]["idbaidang"].'">'.$baidangban[$i]["tensach"].'</a>
                                    <p class="mb-5 pro-price">'.$baidangban[$i]["gia"].'d</p>
                                    <p class="buying">'.$this->LoadTrangThaiBaiDang($baidangban[$i]["trangthai"]).'</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			';
		}
	}
	public function LoadTinMuaFull()
	{
		$tincanmuaModel = new TinCanMuaModel();
		$tincanmua = $tincanmuaModel->LoadTinCanMuaFull();
		for($i = 0; $i < count($tincanmua); $i++){
			echo '
			<div class="row items">
                    <div class="col-md-3 col-lg-2 col-xl-2 col-5">
                        <a href="index.php?to=chitiettincanmua&id='.$tincanmua[$i]["idtincanmua"].'" class="img-wrapper">
                            <img class="pro-img" src="'.$tincanmua[$i]["hinhanh"].'">
                        </a>
                    </div>
                    <div class="col-md-9 col-lg-10 col-xl-10 col-7">
                        <div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="index.php?to=chitiettincanmua&id='.$tincanmua[$i]["idtincanmua"].'">'.$tincanmua[$i]["tensach"].'</a>
                                    <p class="mb-5 pro-price">'.$tincanmua[$i]["giamax"].'d</p>
                                    <p class="buying">'.$this->LoadTrangThaiBaiDang($tincanmua[$i]["trangthai"]).'</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			';
		}
	}
	public function LoadDonBanFull()
	{
		$dondathangModel = new DonDatHangModel();
		$dondathang = $dondathangModel->LoadDonDatHangFull();
		for($i = 0; $i < count($dondathang); $i++){
			echo '
			<div class="row items">
                    <div class="col-md-3 col-lg-2 col-xl-2 col-5">
                        <a href="index.php?to=chitietdondathang&id='.$dondathang[$i]["iddondathang"].'" class="img-wrapper">
                            <img class="pro-img" src="'.$dondathang[$i]["diachianh"].'">
                        </a>
                    </div>
                    <div class="col-md-9 col-lg-10 col-xl-10 col-7">
                        <div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="index.php?to=chitietdondathang&id='.$dondathang[$i]["iddondathang"].'">'.$dondathang[$i]["tensach"].'</a>
                                    <p class="mb-5 pro-price">'.$dondathang[$i]["dongia"].'d</p>
                                    <p class="buying">'.$this->LoadTrangThaiDonHang($dondathang[$i]["tinhtrang"]).'</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			';
		}
	}
	public function LoadTrangThaiBaiDang($trangthai){
		if($trangthai = 1){
			echo "Đã duyệt";
		}
		elseif($trangthai = 0){
			echo "Đang chờ duyệt";
		}
		else {
			echo "Đã bị hủy";
		}
	}
	public function LoadTrangThaiDonHang($trangthai){
		if($trangthai = 1){
			echo "Đã thanh toán";
		}
		elseif($trangthai = 0){
			echo "Chưa thanh toán";
		}
		else {
			echo "Đã bị hủy";
		}
	}
}
?>