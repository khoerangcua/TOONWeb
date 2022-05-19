<?php 
require_once("private/models/baidangban_model.php");
require_once("private/models/tincanmua_model.php");

class ChiTietTinKiemDuyetCtrl
{
	public function LoadChiTiet()
	{
		if (isset($_GET["xem"])) 
		{
			switch($_GET["xem"])
			{
				case "ban":
					$this->LoadChiTietKiemDuyetTinBan();
					break;
				case "mua":
					$this->LoadChiTietKiemDuyetTinMua();
					break;
			}	
		}
		else echo '<script>alert("Không tìm thấy bài đăng!")</script>';
	}
	public function LoadChiTietKiemDuyetTinBan()
	{
		
		$id_BDBan = isset($_GET["id"]) ? $_GET["id"] : -1;
		if ($id_BDBan == -1 ){
			 echo '<script>alert("Không tìm thấy bài đăng!")</script>';
		}
		else{
			$baidangbanModel = new BaiDangBanModel();
			$baidangban = $baidangbanModel->LoadChiTietBDBan($id_BDBan);
			
				echo'
					<div class="row info-item-buy">
            			<div class="col-md-4 col-lg-3 col-xl-3 col-12 text-center">
                			<img class="imgchitietMNCDT" src="'.$baidangban["diachianh"].'" alt="">
            			</div>
            			<div class="col-md-8 col-lg-9 col-xl-9 col-12">

                			<div class="desc">
                    			<p class="name-buy">'.$baidangban["tensach"].'</p>
                    			<p>Thể loại: '.$baidangban["tentheloai"].'</p>
                    			<p>Tác giả: '.$baidangban["tacgia"].'</p>
								<p class="price-buy">'.number_format($baidangban["gia"], 0, ',', '.').'đ</p>
                    			<p>Số lượng: '.$baidangban["soluong"].'</p>
								<p>Thời gian gửi: '.$baidangban["thoigian"].'</p>
                    			<p class="info-buy tx">Mô tả: '.$baidangban["mota"].'</p>

                			</div>
            			</div>
					</div>
				';
				
			}
	}
	public function LoadChiTietKiemDuyetTinMua()
	{
		
		$id_TCMua = isset($_GET["id"]) ? $_GET["id"] : -1;
		if ($id_TCMua == -1 ){
			 echo '<script>alert("Không tìm thấy bài đăng!")</script>';
		}
		else{
			$tincanmuaModel = new TinCanMuaModel();
			$tincanmua = $tincanmuaModel->LoadChiTietTinCanMua($id_TCMua);
			
				echo'
					<div class="row info-item-buy">
            			<div class="col-md-4 col-lg-3 col-xl-3 col-12 text-center">
                			<img class="imgchitietMNCDT" src="'.$tincanmua["hinhanh"].'" alt="">
            			</div>
            			<div class="col-md-8 col-lg-9 col-xl-9 col-12">

                			<div class="desc">
                    			<p class="name-buy">'.$tincanmua["tensach"].'</p>
                    			<p>Thể loại: '.$tincanmua["tentheloai"].'</p>
                    			<p>Tác giả: '.$tincanmua["tacgia"].'</p>
								<p class="price-buy">Giá MAX: '.number_format($tincanmua["giamax"], 0, ',', '.').'đ</p>
								<p class="price-buy">Giá MIN: '.number_format($tincanmua["giamin"], 0, ',', '.').'đ</p>
								<p>Chất lượng mong muốn cao nhất: '.$tincanmua["chatluongmax"].'</p>
								<p>Chất lượng mong muốn thấp nhất: '.$tincanmua["chatluongmin"].'</p>
                    			<p>Số lượng: '.$tincanmua["soluong"].'</p>
								<p>Thời gian gửi: '.$tincanmua["thoigian"].'</p>
                    			<p class="info-buy tx">Mô tả: '.$tincanmua["mota"].'</p>

                			</div>
            			</div>
					</div>
				';
				
		}
	}
	public function LoadCNKiemDuyet(){
		
		if(isset($_GET["kduyet"])){
			switch($_GET["xem"])
			{
				case "ban":
					$this->PheDuyetTinBan();
					break;
				case "mua":
					$this->PheDuyetTinMua();
					break;
			}	
		}
		else{
			echo '
				<form method="get">
					<input type="hidden" name="to" value="chitietkiemduyet">
					<input type="hidden" name="xem" value="'.$_GET["xem"].'">
					<input type="hidden" name="id" value="'.$_GET["id"].'">
                	<button type="" name="kduyet" value="pduyet" class="button btn-allow">Phê duyệt ✓</button>
                	<button type="submit" name="kduyet" value="huy" class="button btn-reject">Từ chối ✕</button>
				</form>
			';
		}
	}
	public function PheDuyetTinBan(){
		$id_BDBan = isset($_GET["id"]) ? $_GET["id"] : -1;
		if ($id_BDBan == -1 ){
			 echo '<script>alert("Không tìm thấy bài đăng!")</script>';
		}
		else{
			switch($_GET["kduyet"])
			{
				case "pduyet":
					$baidangbanModel = new BaiDangBanModel();
					$baidangbanModel->PheDuyet($id_BDBan);
					header("Location: ./?to=kiemduyet&xem=ban&duyet=da");
					break;
				case "huy":
					$baidangbanModel = new BaiDangBanModel();
					$baidangbanModel->TuChoi($id_BDBan);
					header("Location: ./?to=kiemduyet&xem=ban&duyet=da");
					break;
			}	
			
		}
		
	}
	public function PheDuyetTinMua(){
		$id_TCMua = isset($_GET["id"]) ? $_GET["id"] : -1;
		if ($id_TCMua == -1 ){
			 echo '<script>alert("Không tìm thấy bài đăng!")</script>';
		}
		else{
			switch($_GET["kduyet"])
			{
				case "pduyet":
					$tincanmuaModel = new TinCanMuaModel();
					$tincanmuaModel->PheDuyet($id_TCMua);
					header("Location: ./?to=kiemduyet&xem=ban&duyet=da");
					break;
				case "huy":
					$tincanmuaModel = new TinCanMuaModel();
					$tincanmuaModel->TuChoi($id_TCMua);
					header("Location: ./?to=kiemduyet&xem=mua&duyet=da");
					break;
			}	
			
		}
		
	}
}
?>