<?php
include_once("private/Models/taikhoan_model.php");
include_once("private/Models/baidangban_model.php");
include_once("private/Models/dondathang_model.php");
class ThanhToanController{
    public function ThanhToan(){
        // Kiểm tra có đăng nhập hay chưa
        if (!isset($_SESSION["idtaikhoan"])) {
            header("Location: ./?to=dangnhap");
            return;
        }

        // Kiểm tra load giao diện hay thực hiện thanh toán
        if (isset($_GET["thanhtoan"])) {
            $this->ThucHienThanhToan();
        }else{
            $this->LoadGiaoDienThanhToanMacDinh();
        }
        

    }

    private function LoadGiaoDienThanhToanMacDinh(){
        
        
        $taiKhoanModel = new TaiKhoanModel();
        $thongTinTaiKhoan = $taiKhoanModel->LoadThongTinTaiKhoan($_SESSION["idtaikhoan"]);

        $baiDangBanModel = new BaiDangBanModel();
        $thongTinBaiDangBan = $baiDangBanModel->LoadChiTietBDBan($_GET["idbaidangban"]);

        echo
        "
        <div class='container'>
            <a href='./to=trangchu&xem=ban'><img src='public/resource/Logo/logo.png' class='d-none d-lg-block icon-lg'></a>
            <br style='clear:both'>
            <form method='GET' action=''>
                <div class='row'>
                    <div class='col-6'>
                        <div class='login-form row'>
                            <h4 class='order-heading'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-card-text' viewBox='0 0 16 16'>
                                    <path d='M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z' />
                                    <path d='M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z' />
                                </svg> Thông tin giao hàng</h4>
                            <div class='col-12'>
                                <div class='form-floating mb-2'>
                                    <input type='text' value='".$thongTinTaiKhoan["hoten"]."' class='form-control' id='floatingInput' placeholder='Họ và tên'>
                                    <label for='floatingInput'>Họ và tên</label>
                                </div>
                            </div>
                            <div class='col-7'>
                                <div class='form-floating mb-2'>
                                    <input type='email' value='".$thongTinTaiKhoan["email"]."' class='form-control' id='floatingPassword' placeholder='Email'>
                                    <label for='floatingPassword'>Email</label>
                                </div>
                            </div>
                            <div class='col-5'>
                                <div class='form-floating mb-2'>
                                    <input type='number' value='".$thongTinTaiKhoan["sdt"]."' class='form-control' id='floatingPassword' placeholder='Số điện thoại'>
                                    <label for='floatingPassword'>Số điện thoại</label>
                                </div>
                            </div>

                            <div class='col-12'>
                                <div class='form-floating mb-3'>
                                    <input type='text' value='".$thongTinTaiKhoan["diachi"]."' class='form-control' id='floatingPassword' placeholder='Địa chỉ'>
                                    <label for='floatingPassword'>Địa chỉ</label>
                                </div>
                            </div>

                            <div class='col-12 mb-3'>
                                <h4 class='order-heading'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-truck' viewBox='0 0 16 16'>
                                        <path d='M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z' />
                                    </svg> Hình thức vận chuyển</h4>
                                <div class='tbl-purchase'>
                                    <div class='form-check purchase1'>
                                        <input class='form-check-input' id='giaohangtieuchuan' type='radio' name='hinhthucvanchuyen' value='tieuchuan' id=''>
                                        <label class='form-check-label' for='flexRadioDefault1'>
                                            Giao hàng tiêu chuẩn
                                        </label>
                                    </div>
                                    <div class='form-check purchase2'>
                                        <input class='form-check-input' id='giaohangnhanh' type='radio' name='hinhthucvanchuyen' value='nhanh' id='' checked>
                                        <label class='form-check-label' for='flexRadioDefault2'>
                                            Giao hàng nhanh
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class='col-12'>
                                <h4 class='order-heading'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-credit-card-2-back' viewBox='0 0 16 16'>
                                        <path d='M11 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1z' />
                                        <path d='M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm13 2v5H1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm-1 9H2a1 1 0 0 1-1-1v-1h14v1a1 1 0 0 1-1 1z' />
                                    </svg> Hình thức thanh toán</h4>

                                <div class='tbl-purchase mb-3'>
                                    <div class='form-check purchase1'>
                                        <input class='form-check-input' type='radio' name='hinhthucthanhtoan' value='tienmat' id='' checked>
                                        <label class='form-check-label' for='flexRadioDefault1'>
                                            Thanh toán khi nhận hàng (COD)
                                        </label>
                                    </div>
                                    <div class='form-check purchase2'>
                                        <input class='form-check-input' type='radio' name='hinhthucthanhtoan' value='chuyenkhoan' id=''>
                                        <label class='form-check-label' for='flexRadioDefault2'>
                                            Chuyển khoản qua ngân hàng
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class='col-lg-5 col-sm-12'>
                        <h3 class='order-heading'>Chi tiết về đơn hàng</h3>
                        <table class='product-table'>
                            <thead>
                                <tr>
                                    <th><span class='visually-hidden'>Ảnh sản phẩm</span></th>
                                    <th><span class='visually-hidden'>Tên sản phẩm</span< /th>
                                    <th><span class='visually-hidden'>Giá</span< /th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr class='product'>
                                    <td class='product-image'>
                                        <div class='product-thumbnail'>
                                            <div class='thumbnail-wrapper'>
                                                <img class='thumbnail-img' src='".$thongTinBaiDangBan["diachianh"]."''>
                                            </div>
                                        </div>
                                    </td>
                                    <th class='product-desc'>
                                        <span class='product-name'>".$thongTinBaiDangBan["tensach"]."</span>
                                    </th>
                                    <td class='product-price'>
                                        <span>".number_format($thongTinBaiDangBan["gia"], 0, ',', '.')." </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <input type='hidden' name='to' value='thanhtoan'></input>
                        <input type='hidden' name='thanhtoan' value='true'></input>
                        <input type='hidden' name='idbaidang' value='".$thongTinBaiDangBan["idbaidang"]."'></input>
                        <input type='hidden' name='idnguoiban' value='".$thongTinBaiDangBan["idtaikhoan"]."'></input>
                        <input type='hidden' name='idnguoimua' value='".$thongTinTaiKhoan["idtaikhoan"]."'></input>
                        <input type='hidden' name='soluong' value='1'></input>
                        <input type='hidden' name='tinhtrang' value='0'></input>
                        <input type='hidden' name='thanhtoan' value='0'></input>
                        <input type='hidden' name='dongia' value='".number_format($thongTinBaiDangBan["gia"], 0, ',', '.')."'></input>
                        

                        <div class='col-6' style='float: right;'>
                            <button type='submit' class='button order-btn'>Đặt hàng</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        ";
    }

    private function ThucHienThanhToan(){
        $idbaidang = $_GET["idbaidang"];
        $idnguoiban = $_GET["idnguoiban"];
        $idnguoimua = $_GET["idnguoimua"];
        $soluong = $_GET["soluong"];
        $tinhtrang = $_GET["tinhtrang"];
        $thanhtoan = $_GET["thanhtoan"];
        $dongia = $_GET["dongia"];
        $thoigian = date("Y-m-d H:i:s",mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y")));
        $hinhthucvanchuyen = $_GET["hinhthucvanchuyen"];
        $hinhthucthanhtoan = $_GET["hinhthucthanhtoan"];


        $donDatHangModel = new DonDatHangModel();
        $donDatHangModel->AddDonDatHang($idbaidang, $idnguoiban, $idnguoimua, $soluong, $tinhtrang, $thanhtoan, $dongia, $thoigian, $hinhthucvanchuyen, $hinhthucthanhtoan);
        $this->DatHangThanhCong();
    }

    private function DatHangThanhCong(){
        header("Location: ./?to=trangchu&xem=ban");
    }
}
?>