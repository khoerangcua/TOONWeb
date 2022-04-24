<?php 
require_once("private/models/baidangban_model.php");
require_once("private/models/tincanmua_model.php");
class TrangKiemDuyetCtrl
{
	public function LoadBaiDangTrangKiemDuyet()
	{
		$xem = $_GET["xem"];
		if (isset($xem)) 
		{
			switch($xem)
			{
				case "ban":
					if(isset($_GET["duyet"])){
						switch($_GET["duyet"]){
							case "da":
								$this->LoadTinBanDaDuyet();
								break;
							case "cho":
								$this->LoadTinBanChoDuyet();
								break;
							case "huy":
								$this->LoadTinBanDaHuy();
								break;
							case "full":
								$this->LoadTinBanFull();
								break;
						}
					}
					break;
				case "mua":
					if(isset($_GET["duyet"])){
						switch($_GET["duyet"]){
							case "da":
								$this->LoadTinMuaDaDuyet();
								break;
							case "cho":
								$this->LoadTinMuaChoDuyet();
								break;
							case "huy":
								$this->LoadTinMuaDaHuy();
								break;
							case "full":
								$this->LoadTinMuaFull();
								break;
						}
					}
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
                                    <p class="buying">'.$this->Loadtrangthai($baidangban[$i]["trangthai"]).'</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			';
		}
	}
	public function LoadTinBanDaDuyet()
	{
		$baidangbanModel = new BaiDangBanModel();
		$baidangban = $baidangbanModel->LoadBaiDangBanDaDuyet();
			
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
                                    <p class="buying">'.$this->Loadtrangthai($baidangban[$i]["trangthai"]).'</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			';
		}
	}
	public function LoadTinBanChoDuyet()
	{
		$baidangbanModel = new BaiDangBanModel();
		$baidangban = $baidangbanModel->LoadBaiDangBanChoDuyet();
			
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
                                    <p class="buying">'.$this->Loadtrangthai($baidangban[$i]["trangthai"]).'</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			';
		}
	}
	public function LoadTinBanDaHuy()
	{
		$baidangbanModel = new BaiDangBanModel();
		$baidangban = $baidangbanModel->LoadBaiDangBanDaHuy();
			
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
                                    <p class="buying">'.$this->Loadtrangthai($baidangban[$i]["trangthai"]).'</p>
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
                                    <p class="buying">'.$this->Loadtrangthai($tincanmua[$i]["trangthai"]).'</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			';
		}
	}
	public function LoadTinMuaDaDuyet()
	{
		$tincanmuaModel = new TinCanMuaModel();
		$tincanmua = $tincanmuaModel->LoadTinCanMuaDaDuyet();
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
                                    <p class="buying">'.$this->Loadtrangthai($tincanmua[$i]["trangthai"]).'</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			';
		}
	}
	public function LoadTinMuaChoDuyet()
	{
		$tincanmuaModel = new TinCanMuaModel();
		$tincanmua = $tincanmuaModel->LoadTinCanMuaChoDuyet();
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
                                    <p class="buying">'.$this->Loadtrangthai($tincanmua[$i]["trangthai"]).'</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			';
		}
	}
	public function LoadTinMuaDaHuy()
	{
		$tincanmuaModel = new TinCanMuaModel();
		$tincanmua = $tincanmuaModel->LoadTinCanMuaDaHuy();
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
                                    <p class="buying">'.$this->Loadtrangthai($tincanmua[$i]["trangthai"]).'</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			';
		}
	}
	public function Loadtrangthai($trangthai){
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
}
?>