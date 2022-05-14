<?php 
require_once("private/models/baidangban_model.php");
require_once("private/models/tincanmua_model.php");
require_once("private/models/taikhoan_model.php");

class TrangChuCtrl{
	public function LoadBaiDangTrangChu()
	{
		if (isset($_GET["xem"])) 
		{
			switch($_GET["xem"])
			{
				case "ban":{
					$this->LoadTinBanMoi();
					break;
				}
				case "mua":{
					$this->LoadTinMuaMoi();
					break;
				}
			}
		}
		
	}
	public function LoadTaiKhoanHeader()
	{
		$idtaikhoan = $_SESSION["idtaikhoan"];
		if(isset($idtaikhoan)){
			$taikhoanModel = new TaiKhoanModel();
			$taikhoan = $taikhoanModel->LoadThongTinTaiKhoan();
			for($i = 0; $i < count($taikhoan); $i++){
				echo '
				<a href="?to=trangchu&xem=ban">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg>
                    <p class="d-none d-md-block d-lg-block">'.$taikhoan["tentaikhoan"].'</p>
                </a>
				';
			}
		}
		else{
			echo '
				<a href="?to=dangnhap">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg>
                    <p class="d-none d-md-block d-lg-block">Tài khoản</p>
                </a>
			';
		}
		
	}
	public function LoadTinBanMoi()
	{
		$baidangbanModel = new BaiDangBanModel();
		$baidangban = $baidangbanModel->LoadBaiDangBanMoi();
		for($i = 0; $i < count($baidangban); $i++){
			echo '
				<div class="col-lg-3 col-md-6 col-6 products">
                    <div class="pro-img">
                        <a href="index.php?to=chitiettincanban&id='.$baidangban[$i]["idbaidang"].'">
                            <img class="pro-img pro-img-1" src="'.$baidangban[$i]["diachianh"].'">
                        </a>
                    </div>
                    <div class="pro-detail">
                        <h6 class="pro-name"><a href="index.php?to=chitiettincanban&id='.$baidangban[$i]["idbaidang"].'">'.$baidangban[$i]["tensach"].'</a></h6>
                        <div class="pro-price">
                            <p class="pro-price sale">'.$baidangban[$i]["gia"].'₫</p>
                        </div>
                    </div>
                </div>
			';
		}
	}
	public function LoadTinMuaMoi()
	{
		$tincanmuaModel = new TinCanMuaModel();
		$tincanmua = $tincanmuaModel->LoadTinCanMuaMoi();
		for($i = 0; $i < count($tincanmua); $i++){
			echo '
				<div class="col-lg-3 col-md-6 col-6 products">
                    <div class="pro-img">
                        <a href="index.php?to=chitiettincanban&id='.$tincanmua[$i]["idtincanmua"].'">
                            <img class="pro-img pro-img-1" src="'.$tincanmua[$i]["hinhanh"].'">
                        </a>
                    </div>
                    <div class="pro-detail">
                        <h6 class="pro-name"><a href="index.php?to=chitiettincanban&id='.$tincanmua[$i]["idtincanmua"].'">'.$tincanmua[$i]["tensach"].'</a></h6>
                        <div class="pro-price">
                            <p class="pro-price sale">'.$tincanmua[$i]["giamax"].'₫</p>
                        </div>
                    </div>
                </div>
			';
		}
	}
	public function LoadDanhMuc(){
		$baidangbanModel = new BaiDangBanModel();
		$danhmuc = $baidangbanModel->LoadDanhMucTheLoai();
		for($i = 0; $i < count($danhmuc); $i++){
			echo '
				<a class="col-4 col-md-3 col-lg-2 catogery-item"  href="index.php?to=timkiem&xem=ban&from=kind&idloai='.$danhmuc[$i]["idtheloai"].'">
                    <div class="card-inner align-items-center">
                        
                        <p>'.$danhmuc[$i]["tentheloai"].'</p>
                    </div>
                </a>
			';
		}
	}
}
?>