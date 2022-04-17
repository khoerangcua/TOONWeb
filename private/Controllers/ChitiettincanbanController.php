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
							<p class='name-buy'>'".$baidangban["tensach"]."'</p>
							<p>Tác giả:'".$baidangban["tacgia"]."'</p>
							<p>Tác giả:'".$baidangban["theloai"]."'</p>
							<p class='price-buy'>'".$baidangban["gia"]."'</p>
							<p>Số lượng:'".$baidangban["soluong"]."' </p>
							
							<p class='info-buy tx'>Mô tả: '".$baidangban["mota"]."'</p>
					
						</div>
					</div>
				</div>
        			<p style='float:right; margin:20px 0 0 0;''>Bạn muốn sở hữu cuốn sách này?  </p>
        				<br style='clear:both'>
					<div class='row contact'>
						<div class='info-buyer'>
							<button class='button contactbtn'> Lien he ngay</button>
							<a href='' ><img class='img-buyer' src='../images/275225020_3180982448841648_1157249981496616579_n.png'></a>
						<div>

						</div>
					</div>
				</div>
			</div>";
			
		}
	}
}
?>