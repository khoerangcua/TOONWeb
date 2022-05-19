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
                            <p class="pro-price sale">'.number_format($baidangban[$i]["gia"], 0, ',', '.').'₫</p>
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
                            <p class="pro-price sale">'.number_format($tincanmua[$i]["giamax"], 0, ',', '.').'₫</p>
                        </div>
                    </div>
                </div>
			';
		}
	}
	public function LoadDanhMuc(){
		$xem = $_GET["xem"];
		$baidangbanModel = new BaiDangBanModel();
		$danhmuc = $baidangbanModel->LoadDanhMucTheLoai();
		for($i = 0; $i < count($danhmuc); $i++){
			echo '
				<a class="col-4 col-md-3 col-lg-2 catogery-item"  href="index.php?to=timkiem&xem='.$xem.'&from=kind&idloai='.$danhmuc[$i]["idtheloai"].'">
                    <div class="card-inner align-items-center">
                        
                        <p>'.$danhmuc[$i]["tentheloai"].'</p>
                    </div>
                </a>
			';
		}
	}
}
?>