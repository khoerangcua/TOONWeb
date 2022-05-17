<?php 
include_once("private/Models/baidangban_model.php");
include_once("private/Models/tincanmua_model.php");
include_once("private/Models/taikhoan_model.php");
class DangBaiCtrl{
	public function LoadForm(){
		if(isset($_POST["tin"])){
			$this->DangBai();
		}
		else{
			$this->LoadGiaoDienDangBai();
		}
	}
	public function LoadTheLoai(){
		
		$selected = "selected";
		$baidangbanModel = new BaiDangBanModel();
		$danhmuc = $baidangbanModel->LoadDanhMucTheLoai();
		echo '
		<select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="theloai">';
		
		for($i = 0; $i < count($danhmuc); $i++){
			echo '
			<option  value="'.$danhmuc[$i]["idtheloai"].'">'.$danhmuc[$i]["tentheloai"].'</option>
			';
		}
		echo '
			</select>
           	<label for="floatingSelect">Thể loại</label>
		';
	}
	public function DangBai(){
		$idtaikhoan = $_SESSION["idtaikhoan"];
		$tin = $_POST["tin"];
		$tensach = $_POST["tensach"];
		$tacgia = $_POST["tacgia"];
		$gia = $_POST["gia"];
		$soluong = $_POST["soluong"];
		$theloai = $_POST["theloai"];
		$chatluong = $_POST["chatluong"];
		$mota = $_POST["mota"];
		$file = $_FILES["file"];
		$fileName = $file["name"];
		$fileType = $file["type"];
		$fileTempname = $file["tmp_name"];
		$fileError = $file["error"];
		$fileSize = $file["size"];
		
		$fileExt = explode(".", $fileName);
		$fileActualExt = strtolower(end($fileExt));
		
		$allow = array("jpg", "png");
		if(in_array($fileActualExt, $allow)){
			if($fileError == 0){
				if($fileSize<7000000){
					$imgfullname = "image.".$fileName;
					$duongdananh = "public/resource/images/".$imgfullname;
					$up = move_uploaded_file($fileTempname, $duongdananh);
					if($up){
						if(empty($tensach) || empty($tacgia) || empty($gia) || empty($theloai) || empty($chatluong) || empty($soluong) || empty($mota)){
							echo "Cần phải nhập đầy đủ các trường!";
						}
						else{
							if(isset($tin)){
								switch($tin)
								{
									case "ban":{
										
										$baidganbanModel = new BaiDangBanModel();
										$baidangbanModel->DangBaiBan($idtaikhoan, $tensach, $tacgia, $gia, $theloai, $chatluong, $soluong, $mota, $duongdananh);
										header("Location: ./?to=quanlycanhan&xem=tinban&id=$idtaikhoan");
										break;
									}
									case "mua":{
										$tincanmuaModel = new TinCanMuaModel();
										$tincanmuaModel->DangBaiMua($idtaikhoan, $tensach, $tacgia, $gia, $theloai, $chatluong, $soluong, $mota, $duongdananh);
										header("Location: ./?to=quanlycanhan&xem=tinmua&id=$idtaikhoan");
										
										break;
									}
								}
							}
						}
					
					}
					else{
						echo "Không thể upload ảnh";
					}
				}
				else{
					echo 'Kích thước file cần nhỏ hơn 5MB';
					exit();
				}
			}
			else{
				echo 'File lỗi!';
				exit();
			}
		}
		else{
			echo 'Cần upload đúng kiểu file png hoặc jpg';
			exit();
		}
		
	}
	public function LoadGiaoDienDangBai(){
		
		echo'
		<form class="" method="post" enctype="multipart/form-data" >
                    <div class="mb-2">
                        <p style="font-size: 14px; color:#C1C1C1; margin-bottom:7px ">Loại tin đăng</p>
                        <input class="form-check-input" type="radio" name="tin" id="classify1" value="mua" >
                        <label class="form-check-label ms-1" for="status1">
                            Mua
                        </label>
                        <input class="form-check-input ms-4" type="radio" name="tin" id="classify2" value="ban">
                        <label class="form-check-label ms-1" for="status2">
                            Bán
                        </label>
                    </div>


                    <div class="form-floating mb-3 mt-4">
                        <input type="text" name="tensach" class="form-control" id="floatingInput_name" placeholder="Ten sach">
                        <label for="floatingInput_name">Tên sách</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="gia" class="form-control" id="floatingInput_price" placeholder="Gia">
                        <label for="floatingInput_price">Giá</label>
                    </div>
					
					<div class="form-floating mb-3 mt-4">
                        <input type="text" name="tacgia" class="form-control" id="floatingInput_name" placeholder="Tac gia">
                        <label for="floatingInput_name">Tác giả</label>
                    </div>

                    <div class="form-floating mb-3">
<!--
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            
                            <option value="1" >The loai 1</option>
                            <option value="2">The loai 2</option>
                            <option value="3">The loai 3</option>
                        </select>
                        <label for="floatingSelect">Thể loại</label>

					
-->';
						
							$this->LoadTheLoai();
						echo '
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" name="chatluong" class="form-control" id="floatingInput_name" placeholder="Độ mới">
                        <label for="floatingInput_name">Độ mới</label>
                    </div>
					
					<div class="form-floating mb-3">
                        <input type="number" name="soluong" class="form-control" id="floatingInput_name" placeholder="So luong">
                        <label for="floatingInput_name">Số lượng</label>
                    </div>

                    <div class="form-floating mb-2">
                        <textarea class="pro-desc form-control" placeholder="Mo ta chi tiet" id="description" name="mota"></textarea>
                        <label for="description">Mô tả chi tiết</label>
                    </div>

                    <div class="mb-5">
                        <label for="formFile" class="form-label">Ảnh sản phẩm</label>
                        <input class="form-control" type="file" name="file" id="formFile" placeholder="Chọn Ảnh">
                    </div>

                    <button type="submit" name="dangbai" class="button btn-post mb-2">Đăng bài</button>
					
                </form>
		';
			
	}
	
}
?>