<?php 
require_once("private/models/baidangban_model.php");
require_once("private/models/tincanmua_model.php");
class TrangTimKiemCtrl
{
	public function LoadTrangTimKiem()
	{
		if (isset($_GET["xem"])) 
		{
			switch($_GET["xem"])
			{
				case "mua":{
					if (isset($_GET["from"])) 
					{
						switch($_GET["from"])
						{
							case "fillter":
								$this->LoadTinBanTheoFillter();
								break;
							case "kind":
								$this->LoadTinBanTheoLoai();
								break;
							case "searchbar":
								$this->LoadTinBanTuThanhTimKiem();
								break;
						}
					}
					else{
						$this->LoadTinBanfull();
						break;
					}
				}
					
				case "ban":{
					if (isset($_GET["from"])) 
					{
						switch($_GET["from"])
						{
							case "fillter":
								$this->LoadTinMuaTheoFillter();
								break;
							case "kind":
								$this->LoadTinMuaTheoLoai();
								break;
							case "searchbar":
								$this->LoadTinMuaTuThanhTimKiem();
								break;
						}
					}
					else{
						$this->LoadTinMuaFull();
						break;
					}
				}
					
			}	
		}
		
		
	}
	public function LoadTinBanTheoFillter()
	{
		if($_GET["xem"] == "mua"){
			$tinhthanh = isset($_GET["idtinhthanh"]) ? $_GET["idtinhthanh"] : -1;
        	$domoi = isset($_GET["domoi"]) ? $_GET["domoi"] : -1;
        	$gia = isset($_GET["gia"]) ? $_GET["gia"] : -1;
			$baidangban = array();
			$baidangbanModel = new BaiDangBanModel();
			$baidangban = $baidangbanModel->LoadBaiDangBanFillter($tinhthanh, $domoi, $gia);
			$this->LoadTinBan($baidangban);
		}
		
	}
	
	public function LoadTinBanTheoLoai()
	{
		 if (isset($_GET["idloai"])) {
			$baidangbanModel = new BaiDangBanModel();
			$baidangban = $baidangbanModel->LoadBaiDangBanTheoLoai($_GET["idloai"]);
			 $this->LoadTinBan($baidangban);
		 }
		else{
			$this->LoadTinBanfull();
		}
	}
	public function LoadTinBanTuThanhTimKiem(){
		if (isset($_GET["key"])) {
			$baidangbanModel = new BaiDangBanModel();
			$baidangban = $baidangbanModel->LoadBaiDangTuThanhTimKiem($_GET["key"]);
			 $this->LoadTinBan($baidangban);
		 }
		else{
			echo "Không có kết quả!";
			
		}
		
	}
	
	public function LoadTinBanfull()
	{
		$baidangbanModel = new BaiDangBanModel();
		$baidangban = $baidangbanModel->LoadBaiDangBanDaDuyet();
			
		
		$this->LoadTinBan($baidangban);
		
	}
	public function LoadTinBan($baidangban){
		echo '<a href="index.php?to=timkiem&xem=mua" class="switch-page">Bạn muốn ai đang cần mua sách? Hãy nhấp vào <b>đây</b> </a>';
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
	public function LoadTinMuaTheoFillter()
	{
		if($_GET["xem"] == "ban"){
		$tinhthanh = isset($_GET["idtinhthanh"]) ? $_GET["idtinhthanh"] : -1;
        $domoi = isset($_GET["domoi"]) ? $_GET["domoi"] : -1;
        $gia = isset($_GET["gia"]) ? $_GET["gia"] : -1;
		$tincanmua = array();
		$tincanmuaModel = new TinCanMuaModel();
		$tincanmua = $tincanmuaModel->LoadTinCanMuaFillter($tinhthanh, $domoi, $gia);
		$this->LoadTinmua($tincanmua);
		}
		
	}
	
	public function LoadTinMuaTheoLoai()
	{
		 if (isset($_GET["idloai"])) {
			$tincanmuaModel = new TinCanMuaModel();
			$tincanmua = $tincanmuaModel->LoadTinCanMuaTheoLoai($_GET["idloai"]);
			 $this->LoadTinMua($tincanmua);
		 }
		else{
			echo "Không có kết quả!";
		}
	}
	
	public function LoadTinMuaTuThanhTimKiem()
	{
		if(isset($_GET["key"])){
			$tincanmuaModel = new TinCanMuaModel();
			$tincanmua = $tincanmuaModel->LoadBaiDangTuThanhTimKiem();
			$this->LoadTinMua($tincanmua);
		}
		else{
			echo "Không có kết quả!";
			
		}
		
	}
	
	public function LoadTinMuaFull()
	{
		$tincanmuaModel = new TinCanMuaModel();
		$tincanmua = $tincanmuaModel->LoadTinCanMuaDaDuyet();
		$this->LoadTinMua($tincanmua);
	}
	
	public function LoadTinMua($tincanmua)
	{
		echo '<a href="index.php?to=timkiem&xem=ban" class="switch-page">Bạn muốn mua vài cuốn sách? Hãy nhấp vào <b>đây</b> </a>';
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