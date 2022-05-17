<?php 
include_once("private/Models/baidangban_model.php");
include_once("private/Models/tincanmua_model.php");
include_once("private/Models/taikhoan_model.php");
class DangBaiCtrl{
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
		$tin = $_GET["tin"];
		$tensach = $_GET["tensach"];
		$tacgia = $_GET["tacgia"];
		$gia = $_GET["gia"];
		$soluong = $_GET["soluong"];
		$theloai = $_GET["theloai"];
		$chatluong = $_GET["chatluong"];
		$mota = $_GET["mota"];
		$file = $_GET["file"];
		$fileName = $_FILES["name"];
		$fileType = $_FILES["type"];
		$fileTempname = $_FILES["tmp_name"];
		$fileError = $_FILES["error"];
		$fileSize = $_FILES["size"];
		
		$fileExt = explode(".", $fileName);
		$fileActualExt = strtolower(end($fileExt));
		
		$allow = array("jpg", "png");
		if(in_array($fileActualExt, $allow)){
			if($fileError == 0){
				if($fileSize<7000000){
					$imgfullname = "image.".$fileName;
					$duongdananh = "../resource/images/".$imgfullname;
					if(empty($tensach) || empty($tacgia) || empty($gia) || empty($theloai) || empty($chatluong) || empty($soluong) || empty($mota)){
						echo "Cần phải nhập đầy đủ các trường!";
					}
					else{
						if(isset($tin)){
							switch($tin)
							{
								case "ban":{
									$baidangbanModel = new BaiDangBanModel();
									$baidangbanModel->DangBaiBan($idtaikhoan, $tensach, $tacgia, $gia, $theloai, $chatluong, $soluong, $mota, $duongdananh);
									break;
								}
								case "mua":{
									
									break;
								}
							}
						}
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
	
}
?>