<?php
require_once( "private/models/baidangban_model.php" );
require_once( "private/models/tincanmua_model.php" );
require_once( "private/models/dondathang_model.php" );
class TrangQuanLyCaNhanCtrl {
  public function LoadThongTinTrang() {
    $idtaikhoan = $_GET[ "id" ];
    if ( isset( $idtaikhoan ) ) {
      if ( isset( $_GET[ "xem" ] ) ) {
        switch ( $_GET[ "xem" ] ) {
          case "tinban":
            $this->LoadTinBanFull( $idtaikhoan );
            break;
          case "donban":
            $this->LoadDonBanFull( $idtaikhoan );
            break;
          case "tinmua":
            $this->LoadTinMuaFull( $idtaikhoan );
            break;
          case "donmua":
            $this->LoadDonMuaFull( $idtaikhoan );
            break;
        }
      } else echo '<script>alert("Không tìm thấy bài đăng!")</script>';
    } else echo '<script>alert("Không tìm thấy bài đăng!")</script>';
  }
  public function LoadTinBanFull( $idtaikhoan ) {
    $idtaikhoan = $_GET[ "id" ];
    if ( isset( $idtaikhoan ) == false ) {
      echo '<script>alert("Không tìm thấy bài đăng!")</script>';
    } else {
      $baidangbanModel = new BaiDangBanModel();
      $baidangban = $baidangbanModel->LoadBaiDangBanFull( $idtaikhoan );

      for ( $i = 0; $i < count( $baidangban ); $i++ ) {
        echo '
			<div class="row items">
                    <div class="col-md-3 col-lg-2 col-xl-2 col-5">
                        <a href="index.php?to=chitiettincanban&id=' . $baidangban[ $i ][ "idbaidang" ] . '" class="img-wrapper">
                            <img class="pro-img" src="' . $baidangban[ $i ][ "diachianh" ] . '">
                        </a>
                    </div>
                    <div class="col-md-9 col-lg-10 col-xl-10 col-7">
                        <div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="index.php?to=chitiettincanban&id=' . $baidangban[ $i ][ "idbaidang" ] . '">' . $baidangban[ $i ][ "tensach" ] . '</a>
                                    <p class="mb-5 pro-price">' . $baidangban[ $i ][ "gia" ] . 'd</p>
                                    <p class="buying">' . $this->LoadTrangThaiBaiDang( $baidangban[ $i ][ "trangthai" ] ) . '</p>
									
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			';
      }
    }
  }
  public function LoadTinMuaFull( $idtaikhoan ) {
    $idtaikhoan = $_GET[ "id" ];
    if ( isset( $idtaikhoan ) == false ) {
      echo '<script>alert("Không tìm thấy bài đăng!")</script>';
    } else {
      $tincanmuaModel = new TinCanMuaModel();
      $tincanmua = $tincanmuaModel->LoadTinCanMuaFull( $idtaikhoan );
      for ( $i = 0; $i < count( $tincanmua ); $i++ ) {
        echo '
			<div class="row items">
                    <div class="col-md-3 col-lg-2 col-xl-2 col-5">
                        <a href="index.php?to=chitiettincanmua&id=' . $tincanmua[ $i ][ "idtincanmua" ] . '" class="img-wrapper">
                            <img class="pro-img" src="' . $tincanmua[ $i ][ "hinhanh" ] . '">
                        </a>
                    </div>
                    <div class="col-md-9 col-lg-10 col-xl-10 col-7">
                        <div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="index.php?to=chitiettincanmua&id=' . $tincanmua[ $i ][ "idtincanmua" ] . '">' . $tincanmua[ $i ][ "tensach" ] . '</a>
                                    <p class="mb-5 pro-price">' . $tincanmua[ $i ][ "giamax" ] . 'd</p>
                                    <p class="buying">' . $this->LoadTrangThaiBaiDang( $tincanmua[ $i ][ "trangthai" ] ) . '</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			';
      }
    }
  }
  public function LoadDonBanFull( $idtaikhoan ) {
    $idtaikhoan = $_GET[ "id" ];
    if ( isset( $idtaikhoan ) == false ) {
      echo '<script>alert("Không tìm thấy bài đăng!")</script>';
    } else {
      $dondathangModel = new DonDatHangModel();
      $dondathang = $dondathangModel->LoadDonBanHangFull( $idtaikhoan );
      for ( $i = 0; $i < count( $dondathang ); $i++ ) {
        echo '
			<div class="row items">
                    <div class="col-md-3 col-lg-2 col-xl-2 col-5">
                        <a href="index.php?to=chitietdondathang&id=' . $dondathang[ $i ][ "iddondathang" ] . '" class="img-wrapper">
                            <img class="pro-img" src="' . $dondathang[ $i ][ "diachianh" ] . '">
                        </a>
                    </div>
                    <div class="col-md-9 col-lg-10 col-xl-10 col-7">
                        <div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="index.php?to=chitietdondathang&loai=donbanhang&id=' . $dondathang[ $i ][ "iddondathang" ] . '">' . $dondathang[ $i ][ "tensach" ] . '</a>
                                    <p class="mb-5 pro-price">' . $dondathang[ $i ][ "dongia" ] . 'd</p>
                                    <p class="buying">' . $this->LoadTrangThaiDonHang( $dondathang[ $i ][ "tinhtrang" ] ) . '</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			';
      }
    }
  }
  public function LoadDonMuaFull( $idtaikhoan ) {
    $idtaikhoan = $_GET[ "id" ];
    if ( isset( $idtaikhoan ) == false ) {
      echo '<script>alert("Không tìm thấy bài đăng!")</script>';
    } else {
      $dondathangModel = new DonDatHangModel();
      $dondathang = $dondathangModel->LoadDonMuaHangFull( $idtaikhoan );
      for ( $i = 0; $i < count( $dondathang ); $i++ ) {
        echo '
			<div class="row items">
                    <div class="col-md-3 col-lg-2 col-xl-2 col-5">
                        <a href="index.php?to=chitietdondathang&id=' . $dondathang[ $i ][ "iddondathang" ] . '" class="img-wrapper">
                            <img class="pro-img" src="' . $dondathang[ $i ][ "diachianh" ] . '">
                        </a>
                    </div>
                    <div class="col-md-9 col-lg-10 col-xl-10 col-7">
                        <div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="index.php?to=chitietdondathang&loai=dondatmua&id=' . $dondathang[ $i ][ "iddondathang" ] . '">' . $dondathang[ $i ][ "tensach" ] . '</a>
                                    <p class="mb-5 pro-price">' . $dondathang[ $i ][ "dongia" ] . 'd</p>
                                    <p class="buying">' . $this->LoadTrangThaiDonHang( $dondathang[ $i ][ "tinhtrang" ] ) . '</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			';
      }
    }
  }
  public function LoadTrangThaiBaiDang( $trangthai ) {
    if ($trangthai == -1) {
      return "Đã hủy";
    }

    if ($trangthai == 0) {
      return "Đang chờ phê duyệt";
    }

    if ($trangthai == 1) {
      return "Đã được phê duyệt";
    }

  }
  public function LoadTrangThaiDonHang( $trangthai ) {

    if ($trangthai == -1) {
      return "Đã bị hủy";
    }

    if ($trangthai == 0) {
      return "Đang chờ người bán chấp nhận";
    }

    if ($trangthai == 1) {
      return "Người bán đã chấp nhận";
    }

    if ($trangthai == 2) {
      return "Người mua đã nhận hàng";
    }


  }
  public function LoadDropDown() {
    $id = $_GET[ "id" ];
	  $xem = $this->TrangThaiDropDown();
    if ( isset( $id ) ) {
      echo '
			<div class="manage wtb">
                    <div class="menu">
                    <span onClick="buymenutoggle(this)">Tin đăng mua ▼</span>
                    </div>
                    <ul id="dropmenu-buy">
                        <li class="form-check '.$xem.'">
                            <a href="index.php?to=quanlycanhan&id=' . $id . '&xem=tinmua">Bài đăng mua</a>
                        </li>
                        <li class="form-check '.$xem.'">
                            <a href="index.php?to=quanlycanhan&id=' . $id . '&xem=donmua">Đơn đặt mua</a>
                        </li>
                    </ul>
                </div>
                <div class="manage wts">
                    <div class="menu"> 
                        <span onClick="sellmenutoggle(this)">Tin đăng bán ▼</span>
                    </div>
                    <ul id="dropmenu-sell">
                        <li class="form-check '.$xem.'">
                            <a href="index.php?to=quanlycanhan&id=' . $id . '&xem=tinban">Bài đăng bán</a>
                        </li>
                        <li class="form-check '.$xem.'">
                            <a href="index.php?to=quanlycanhan&id=' . $id . '&xem=donban">Đơn bán hàng</a>
                        </li>
                    </ul>
                </div>
		';
    }
  }
	public function TrangThaiDropDown() {
		$xem = $_GET["xem"];
		switch($xem){
			case "tinmua":
				return "menu-active";
				break;
			case "donmua":
				return "menu-active";
				break;
			case "tinban":
				return "menu-active";
				break;
			case "donban":
				return "menu-active";
				break;
		}
	}
}
?>