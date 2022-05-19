<?php 
require_once("private/models/baidangban_model.php");
class ChiTietBaiDangBanCtrl
{
	public function LoadChiTietBaiDangBan()
	{
		
		$id_BDBan = isset($_GET["id"]) ? $_GET["id"] : -1;
		if ($id_BDBan == -1 ){
			 echo '<script>alert("Không tìm thấy bài đăng!")</script>';
		}
		else{
			$baidangbanModel = new BaiDangBanModel();
			$baidangban = $baidangbanModel->LoadChiTietBDBan($id_BDBan);
			echo"
			<style>
				body {
					background-color: #FFD954;
				}
			</style>
			<div class='container'>
				<div class='row'>
					<p class='detail-header'>Chi tiết Tin Đăng Bán</p>
				</div>

				<div class='row info-item-buy'>
					<div class='col-md-4 col-lg-3 col-xl-3 col-12 text-center'>
						<img class='imgchitietMNCDT' src='".$baidangban["diachianh"]."' alt='Hình ảnh sách cần mua'>
					</div>
					<div class='col-md-8 col-lg-9 col-xl-9 col-12'>
						<div class='desc'>
							<p class='name-buy'>".$baidangban["tensach"]."</p>
							<p>Tác giả: ".$baidangban["tacgia"]."</p>
							<p>Thể loại: ".$baidangban["tentheloai"]."</p>
							<p class='price-buy'>Giá: ".number_format($baidangban["gia"], 0, ',', '.')."</p>
							<p>Số lượng: ".$baidangban["soluong"]." </p>
							<p class='info-buy tx'>Mô tả: ".$baidangban["mota"]."</p>
						</div>
					</div>
				</div>
        			<p style='float:left; margin:20px 0 0 0;''>Bạn muốn sở hữu cuốn sách này?  </p>
        				<br style='clear:both'>
					<div class='row contact'>
						<div class='info-buyer'>
							<button class='button contactbtn'>Liên hệ ngay</button>
							<a href='?to=thongtincanhan&id=".$baidangban["idtaikhoan"]."' ><img class='img-buyer' src='".$baidangban["anhnguoidung"]."'></a>
						<div>
						<form action='' method='get'>
							<input type='hidden' name='to' value='thanhtoan'>
							<input type='hidden' name='idbaidangban' value='".$baidangban["idbaidang"]."'>
							<button class='button orderbtn' type='submit'>Đặt hàng</button>
						</form>
						</div>
					</div>
					<!--TODO-->
					
				</div>

				
			</div>";
			
		}
	}
}
?>