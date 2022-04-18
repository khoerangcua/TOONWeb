<?php 
require_once("private/Models/tincanmua_model.php");
class ChiTietTinCanMuaCtrl
{
	public function LoadChiTietTinCanMua()
	{
		
		$id_TCMua = isset($_GET["id"]) ? $_GET["id"] : -1;
		if ($id_TCMua == -1 ){
			 echo '<script>alert("Không tìm thấy bài đăng!")</script>';
		}
		else{
			$tincanmuaModel = new TinCanMuaModel();
			$tincanmua = $tincanmuaModel->LoadChiTietTinCanMua($id_TCMua);
			echo'
			<style>
				body {
					background-color: #FFD954;
				}
			</style>
			<div class="container">
				<div class="row ">
					<p class="detail-header">Chi tiết Tin Đăng Mua</p>
				</div>

				<div class="row info-item-buy">
					<div class="col-md-4 col-lg-3 col-xl-3 col-12 text-center">
						<img class="imgchitietMNCDT" src="'.$tincanmua["hinhanh"].'" alt="Hình ảnh sách cần mua">
					</div>
					<div class="col-md-8 col-lg-9 col-xl-9 col-12">
				
						<div class="desc">
							<p class="name-buy">'.$tincanmua["tensach"].'</p>
							<p>Thể loại: '.$tincanmua["theloai"].'</p>
							<p>Tác giả: '.$tincanmua["tacgia"].'</p>
							<p class="price-buy">Giá tiền mong muốn: '.$tincanmua["giamin"].'đ - '.$tincanmua["giamax"].'đ</p>
							<p>Chất lượng mong muốn: '.$tincanmua["chatluongmin"].' - '.$tincanmua["chatluongmax"].'</p>
							<p>Số lượng: '.$tincanmua["soluong"].'</p>
							<p class="info-buy tx">Mô tả: '.$tincanmua["mota"].'</p>
						</div>
					</div>
				</div>
        		<p style="float:right; margin:20px 0 0 0;">Bạn đang có sản phẩm này và muốn bán?</p>
        			<br style="clear:both">
				<div class="row contact">
				<div class="info-buyer">
					<button class="button contactbtn"> Lien he ngay</button>
					<a href="" ><img class="img-buyer" src="'.$tincanmua["anhnguoidung"].'"></a>
					<div>

					</div>
				</div>
			</div>
			</div>
			';
			
		}
	}
}
?>