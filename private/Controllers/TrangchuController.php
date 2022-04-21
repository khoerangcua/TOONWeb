<?php 
require_once("private/models/baidangban_model.php");
require_once("private/models/tincanmua_model.php");
class TrangChuCtrl
{
	public function LoadBaiDangTrangChu()
	{
		if (isset($_GET["xem"])) 
		{
			switch($_GET["xem"])
			{
				case "ban":
					$this->LoadTinBan();
					break;
				case "":
					$this->LoadTinBan();
					break;
				case "mua":
					$this->LoadTinMua();
					break;
			}	
		}
		else echo '<script>alert("Không tìm thấy bài đăng!")</script>';
		
	}
	
	public function LoadTinBan()
	{
		$baidangbanModel = new BaiDangBanModel();
		$baidangban = $baidangbanModel->LoadBaiDangBanDaDuyet();
			
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
	public function LoadTinMua()
	{
		$tincanmuaModel = new TinCanMuaModel();
		$tincanmua = $tincanmuaModel->LoadTinCanMuaDaDuyet();
		for($i = 0; $i < count($tincanmua); $i++){
			echo '
				<div class="col-lg-3 col-md-6 col-6 products">
                        <div class="pro-img">
                            <a href="index.php?to=chitiettincanmua&id='.$tincanmua[$i]["idtincanmua"].'">
                                <img class="pro-img pro-img-1" src="'.$tincanmua[$i]["hinhanh"].'">
                            </a>
                        </div>
                        <div class="pro-detail">
                            <h6 class="pro-name"><a href="index.php?to=chitiettincanmua&id='.$tincanmua[$i]["idtincanmua"].'">'.$tincanmua[$i]["tensach"].'</a></h6>
                            <div class="pro-price">
                                <p class="pro-price sale">'.$tincanmua[$i]["giamax"].'₫</p>
                            </div>
                        </div>

                    </div>
			';
		}
	}
}
?>