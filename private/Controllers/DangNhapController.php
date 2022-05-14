<?php
include_once("private/Models/taikhoan_model.php");
class DangNhapController{

    public function HienThiTrangDangNhap(){

      if (isset($_GET["kiemtradangnhap"])) {
          $this->KiemTraDangNhap();
      }
      else{
          $this->HienThiGiaoDienDangNhapMacDinh();
      }
      
    }

    private function HienThiGiaoDienDangNhapMacDinh(){
        echo
        "
        <div class='container'>
        <div class='row vh-100 justify-content-center align-items-center'>
            <div class='col-sm-9 col-md-9 col-lg-9 shadow login-ui'>
                <div class='row'>
                    <div class='col-5 text-center align-items-center'>
                        <a href=''><img class='logo-img' src='public/images/275225020_3180982448841648_1157249981496616579_n.png'></a>
                    </div>

                    <div class='col-7'>
                        <div class='row login-header'>
                            <h4>đăng nhập</h4>
                        </div>
                        <form method='get' class='login-form' action=''>
                            <input type='hidden' name='to' value='dangnhap'>
                            <input type='hidden' name='kiemtradangnhap' value='true'>
                            <div class='form-floating mb-4'>
                                <input type='text' name='tendangnhap' class='form-control' id='floatingInput' placeholder='Tên đăng nhập'>
                                <label for='floatingInput'>Tên đăng nhập</label>
                            </div>
                            <div class='form-floating mb-2'>
                                <input type='password' name='matkhau' class='form-control' id='floatingPassword' placeholder='Mật khẩu'>
                                <label for='floatingPassword'>Mật khẩu</label>
                            </div>
                            <div class='mb-4 form-check'>
                                <input type='checkbox' name='remember' class='form-check-input' id='exampleCheck1'>
                                <label class='form-check-label' for='exampleCheck1'>Ghi nhớ đăng nhập</label>
                                <a href='' class='forgot'>Quên mật khẩu?</a>
                            </div>
                            <button type='submit' class='login-btn mb-4'>Đăng nhập</button>
                            <p class='login-signup'>Chưa có tài khoản? <a href='./?to=dangky'>Đăng ký tại đây</a></p>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
        ";
    }
    private function KiemTraDangNhap(){
        $tenDangNhap = $_GET["tendangnhap"];
        $matKhau =  $_GET["matkhau"];

        $taiKhoanModel = new TaiKhoanModel();
        $ketqua = $taiKhoanModel->DangNhap($tenDangNhap, $matKhau);
        if ($ketqua == true) {
            $this->HienThiGiaoDienDangNhapThanhCong();
        }
        else{
             $this->HienThiGiaoDienDangNhapThatBai();
        }
    }

    private function HienThiGiaoDienDangNhapThanhCong(){
        echo"Danh nhap thanh cong  ";
        $idtaikhoan = $_SESSION["idtaikhoan"];
        echo $idtaikhoan;
        //header('Location: /directory/mypage.php'); 
    }
    private function HienThiGiaoDienDangNhapThatBai(){
        echo"Dang nhap that bai";
    }
}
?>