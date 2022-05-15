<?php 
require_once("private/models/baidangban_model.php");
require_once("private/models/tincanmua_model.php");
require_once("private/models/taikhoan_model.php");
class TrangTimKiemCtrl
{
	public function LoadTaiKhoanHeader(){
		$idtaikhoan = $_SESSION["idtaikhoan"];
		$taikhoanModel = new TaiKhoanModel();
		$taikhoan = $taikhoanModel->LoadThongTinTaiKhoan($idtaikhoan);
		if($taikhoan){
			echo '
			<div> <a href="?to=timkiem&xem=ban" title="Tài khoản">
          		<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
            		<path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
          		</svg> '.$taikhoan["tentaikhoan"].' </a> 
			</div>
			';
	
		}
		else{
			echo '
			<div> <a href="../page/?to=login" title="Tài khoản">
          		<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
            		<path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
          		</svg> Đăng nhập </a> 
			</div>
			';
		}
	}
	
	public function LoadTrangTimKiem()
	{
		if (isset($_GET["xem"])) 
		{
			switch($_GET["xem"])
			{
				case "ban":{
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
					
				case "mua":{
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
		if($_GET["xem"] == "ban"){
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
		if($_GET["xem"] == "ban"){
			 if (isset($_GET["idloai"])) {
				$baidangbanModel = new BaiDangBanModel();
				$baidangban = $baidangbanModel->LoadBaiDangBanTheoLoai($_GET["idloai"]);
				 $this->LoadTinBan($baidangban);
			 }
			else{
				$this->LoadTinBanfull();
			}
		}
	}
	public function LoadTinBanTuThanhTimKiem(){
		if($_GET["xem"] == "ban"){
			if (isset($_GET["key"])) {
				$baidangbanModel = new BaiDangBanModel();
				$baidangban = $baidangbanModel->LoadBaiDangTuThanhTimKiem($_GET["key"]);
				 $this->LoadTinBan($baidangban);
			 }
			else{
				echo "Không có kết quả!";

			}
		}
		
	}
	
	public function LoadTinBanfull()
	{
		$baidangbanModel = new BaiDangBanModel();
		$baidangban = $baidangbanModel->LoadBaiDangBanDaDuyet();
			
		
		$this->LoadTinBan($baidangban);
		
	}
	public function LoadTinBan($baidangban){
		echo '<a href="index.php?to=timkiem&xem=mua" class="switch-page">Bạn muốn biết ai đang cần mua sách? Hãy nhấp vào <b>đây</b> </a>';
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
		if($_GET["xem"] == "mua"){
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
		if($_GET["xem"] == "mua"){
			 if (isset($_GET["idloai"])) {
				$tincanmuaModel = new TinCanMuaModel();
				$tincanmua = $tincanmuaModel->LoadTinCanMuaTheoLoai($_GET["idloai"]);
				 $this->LoadTinMua($tincanmua);
			 }
			else{
				echo "Không có kết quả!";
			}
		}
	}
	
	public function LoadTinMuaTuThanhTimKiem()
	{
		if($_GET["xem"] == "mua"){
			if(isset($_GET["key"])){
				$tincanmuaModel = new TinCanMuaModel();
				$tincanmua = $tincanmuaModel->LoadBaiDangTuThanhTimKiem($_GET["key"]);
				$this->LoadTinMua($tincanmua);
			}
			else{
				echo "Không có kết quả!";

			}
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