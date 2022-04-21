<?php 
require_once("private/models/baidangban_model.php");
require_once("private/models/tincanmua_model.php");
class TrangKiemDuyetCtrl
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
		$baidangban = $baidangbanModel->LoadBaiDangBan();
			
		for($i = 0; $i < count($baidangban); $i++){
			echo '
			<div class="row items">
                    <div class="col-md-3 col-lg-2 col-xl-2 col-5">
                        <a href="" class="img-wrapper">
                            <img class="pro-img" src="'.$baidangban[$i]["diachianh"].'">
                        </a>
                    </div>
                    <div class="col-md-9 col-lg-10 col-xl-10 col-7">
                        <div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="">'.$baidangban[$i]["tensach"].'</a>
                                    <p class="mb-5 pro-price">'.$baidangban[$i]["gia"].'d</p>
                                    <p class="buying">Đang chờ duyệt</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			';
		}
	}
	public function LoadTinMua()
	{
		$tincanmuaModel = new TinCanMuaModel();
		$tincanmua = $tincanmuaModel->LoadTinCanMua();
		for($i = 0; $i < count($tincanmua); $i++){
			echo '
			<div class="row items">
                    <div class="col-md-3 col-lg-2 col-xl-2 col-5">
                        <a href="" class="img-wrapper">
                            <img class="pro-img" src="'.$tincanmua[$i]["hinhanh"].'">
                        </a>
                    </div>
                    <div class="col-md-9 col-lg-10 col-xl-10 col-7">
                        <div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="">'.$tincanmua[$i]["tensach"].'</a>
                                    <p class="mb-5 pro-price">'.$tincanmua[$i]["giamax"].'d</p>
                                    <p class="buying">Đang chờ duyệt</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			';
		}
	}
}
?>