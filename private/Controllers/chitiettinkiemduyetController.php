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
			if($baidangban["trangthai"]){
				echo'
					<div class="row info-item-buy">
            			<div class="col-md-4 col-lg-3 col-xl-3 col-12 text-center">
                			<img class="imgchitietMNCDT" src="'.$baidangban["diachianh"].'" alt="">
            			</div>
            			<div class="col-md-8 col-lg-9 col-xl-9 col-12">

                			<div class="desc">
                    			<p class="name-buy">'.$baidangban["tensach"].'</p>
                    			<p>Thể loại: '.$baidangban["theloai"].'</p>
                    			<p>Tác giả: '.$baidangban["tacgia"].'</p>
								<p class="price-buy">'.$baidangban["gia"].'đ</p>
                    			<p>Số lượng: '.$baidangban["soluong"].'</p>
								<p>Thời gian gửi: '.$baidangban["thoigian"].'</p>
                    			<p class="info-buy tx">Mô tả: '.$baidangban["mota"].'</p>

                			</div>
            			</div>
					</div>
				';
				}
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
			if($tincanmua["trangthai"]){
				echo'
					<div class="row info-item-buy">
            			<div class="col-md-4 col-lg-3 col-xl-3 col-12 text-center">
                			<img class="imgchitietMNCDT" src="'.$tincanmua["hinhanh"].'" alt="">
            			</div>
            			<div class="col-md-8 col-lg-9 col-xl-9 col-12">

                			<div class="desc">
                    			<p class="name-buy">'.$tincanmua["tensach"].'</p>
                    			<p>Thể loại: '.$tincanmua["theloai"].'</p>
                    			<p>Tác giả: '.$tincanmua["tacgia"].'</p>
								<p class="price-buy">Giá MAX: '.$tincanmua["giamax"].'đ</p>
								<p class="price-buy">Giá MIN: '.$tincanmua["giamin"].'đ</p>
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
	}
}
?>