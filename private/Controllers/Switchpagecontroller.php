<?php
class SwichPageControler
{
    public function SwitchPage()
    {
        $to = isset($_GET['to']) ? $_GET['to'] : -1;
        if ($to == -1) {
            $to = isset($_POST['to']) ? $_POST['to'] : -1;
        }
        if ($to != -1) {
            
            switch ($to) {
                case 'chitiettincanban':
                    include_once("public/Views/chitiettincanban.php");
                    break;
                case 'chitiettincanmua':
                    include_once("public/Views/chitiettincanmua.php");
                    break;
                case 'chitietdondathang':
                    include_once("public/Views/chitietdonhangdadat.php");
                    break;
				case 'timkiem':
                    include_once("public/Views/trangtimkiem.php");
                    break;
				case 'kiemduyet':
                    include_once("public/Views/danhsachbaidang.php");
                    break;
				case 'chitietkiemduyet':
                    include_once("public/Views/chitietbaikiemduyet.php");
                    break;
				case 'quanlycanhan':
                    include_once("public/Views/trangquanly.php");
                    break;
				case 'thongtincanhan':
                    include_once("public/Views/trangcanhan.php");
                    break;
                case 'dangnhap':
                    include_once("public/Views/dangnhap.php");
                    break;
                case 'dangky':
                    include_once("public/Views/dangki.php");
                    break;
				case 'trangchu':
                    include_once("public/Views/homepage.php");
                    break;
				case 'upload':
                    include_once("public/Views/upload.php");
                    break;
                case 'thanhtoan':
                    include_once("public/Views/thanhtoan.php");
                    break;
            }
        } else {
            header("Location: ?to=trangchu&xem=ban");
        }
    }
}


?>



