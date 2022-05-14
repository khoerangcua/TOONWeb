<?php
include_once("private/Models/taikhoan_model.php");
class DangKyController{
    public function HienThiGiaoDienDangKy(){
        if (isset($_GET["dangky"])) {
            $this->DangKy();
        }
        else{
            $this->HienThiGiaoDienDangKyMacDinh();
        }
    }

    private function DangKy(){
        $ho = $_GET["ho"];
        $ten = $_GET["ten"];
        $tendangnhap = $_GET["tendangnhap"];
        $matkhau = $_GET["matkhau"];
        $nhaplaimatkhau = $_GET["nhaplaimatkhau"];
        $sodienthoai = $_GET["sodienthoai"];
        $email = $_GET["email"];



        $taiKhoanModel = new TaiKhoanModel();
        $datontai = $taiKhoanModel->kiemTraTonTaiTenDangNhap($tendangnhap);


        if ($datontai == false && $matkhau == $nhaplaimatkhau) {
            $taiKhoanModel->DangKy($tendangnhap, $matkhau, $ho, $ten,$sodienthoai, $email);
            $this->HienThiGiaoDienDangKyThanhCong();
        }
        else{
            $this->HienThiGiaoDienDangKyThatBai();
        }
        
    }

    private function HienThiGiaoDienDangKyMacDinh(){
        echo
        "
        <div class='container'>
            <div class='row vh-100 justify-content-center align-items-center'>
                <div class='col-sm-8 col-md-8 col-lg-6 shadow dky-ui'>
                    <a class='row justify-content-center' href='./?to=trangchu'><img src='public/images/275225020_3180982448841648_1157249981496616579_n.png' class='icon'></a>
                    <div class='row dky-header'>
                        <h3>đăng ký tài khoản</h3>
                    </div>

                    <form class='dky-form' method='get' action='./'>
                        <input type='hidden' name='dangky' value='true'>
                        <input type='hidden' name='to' value='dangky'>
                        <div class='row'>
                            <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6'>
                                <!--Họ-->
                                <div class='form-floating mb-3'>
                                    <input type='text' class='form-control' name='ho' id='floatingInput' placeholder='họ'>
                                    <label for='floatingInput'>Họ</label>
                                </div>
                            </div>
                            <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6'>
                                <!--Tên-->
                                <div class='form-floating mb-3'>
                                    <input type='text' class='form-control' name='ten' id='floatingInput_Ten' placeholder='tên'>
                                    <label for='floatingInput_Ten'>Tên</label>
                                </div>
                            </div>
                        </div>

                        <div class='form-floating mb-3'>
                            <input type='text' name='tendangnhap' class='form-control' id='floatingInput_Username' placeholder='Tên tài khoản'>
                            <label for='floatingInput_Username'>Tên đăng nhập</label>
                        </div>

                        <div class='row'>
                            <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6'>
                                <div class='form-floating mb-3'>
                                    <input type='password' name='matkhau' class='form-control' id='floatingInput_Password' placeholder='Mật khẩu'>
                                    <label for='floatingInput_Password'>Mật khẩu</label>
                                </div>
                            </div>
                            <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6'>
                                <div class='form-floating mb-3'>
                                    <input type='password' name='nhaplaimatkhau' class='form-control' id='floatingInput_CPassword' placeholder='Nhập lại mật khẩu'>
                                    <label for='floatingInput_CPassword'>Nhập lại mật khẩu</label>
                                </div>
                            </div>
                        </div>
                        <div class='form-floating mb-3'>
                            <input type='tel' name='sodienthoai' class='form-control' id='floatingInput_Pnumber' placeholder='Số điện thoại'>
                            <label for='floatingInput_Pnumber'>Số điện thoại</label>
                        </div>
                        <div class='form-floating mb-2'>
                            <input type='email' name='email' class='form-control' id='floatingInput_Email' placeholder='Email'>
                            <label for='floatingInput_Email'>Email</label>
                        </div>
                        <div class='form-check mb-3'>
                            <input class='form-check-input' name='chapnhan' type='checkbox' value='co' id='flexCheckDefault'>
                            <label class='form-check-label' for='flexCheckDefault'>
                                Chấp nhận với <span><a href=''>Điều khoản</a></span>
                            </label>
                        </div>
                        <button type='submit' name='dangky' class='dky-btn mb-5'>Đăng ký</button>
                        <p class='dky-login'>Bạn đã có tài khoản? <a href='./?to=dangnhap'>Đăng nhập</a></p>
                    </form>
                </div>
            </div>
        </div>
        ";
    }

    private function HienThiGiaoDienDangKyThanhCong(){
        header("Location: ./?to=dangnhap");
    }

    private function HienThiGiaoDienDangKyThatBai(){
        echo("Dang ky that bai");
    }
}

?>