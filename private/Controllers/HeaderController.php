<?php 
require_once("private/models/taikhoan_model.php");
require_once("private/models/baidangban_model.php");
require_once("private/models/tincanmua_model.php");
class HeaderCtrl{
	public function LoadTaiKhoanHeader()
	{
		

		if(isset($_SESSION["idtaikhoan"])){
			$idtaikhoan = $_SESSION["idtaikhoan"];
			
			$taikhoanModel = new TaiKhoanModel();
			$taikhoan = $taikhoanModel->LoadThongTinTaiKhoan($idtaikhoan);
			
				echo '
				<a href="?to=thongtincanhan&id='.$idtaikhoan.'">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg>
                    <p class="d-none d-md-block d-lg-block">'.$taikhoan["tentaikhoan"].'</p>
                </a>
				<a href="?to=quanlycanhan&xem=tinban&id='.$idtaikhoan.'">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
                        <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
                    </svg>
                    <p class="d-none d-md-block d-lg-block">Quản lí tin</p>
                </a>
				';
			
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
				<a href="?to=dangnhap">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
                        <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
                    </svg>
                    <p class="d-none d-md-block d-lg-block">Quản lí tin</p>
                </a>
			';
		}
		
	}
	public function LoadTimKiem()
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
	public function LoadTinMuaFull()
	{
		$tincanmuaModel = new TinCanMuaModel();
		$tincanmua = $tincanmuaModel->LoadTinCanMuaDaDuyet();
		$this->LoadTinMua($tincanmua);
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
                                <p class="pro-price sale">'.number_format($baidangban[$i]["gia"], 0, ',', '.').'₫</p>
                            </div>
                        </div>

                    </div>
			';
			
		}
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
                                <p class="pro-price sale">'.number_format($tincanmua[$i]["giamax"], 0, ',', '.').'₫</p>
                            </div>
                        </div>

                    </div>
			';
		}
	}
	
}
?>