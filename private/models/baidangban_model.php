<?php
require_once( "private/Modules/db_module.php" );
class BaiDangBanModel {
  public function LoadBaiDangBanDaDuyet() {
    $baidangban = array();
    $link = "";
    taoKetNoi( $link );
    $result = chayTruyVanTraVeDL( $link, "SELECT * FROM tbl_baidangban WHERE tbl_baidangban.trangthai = 1 " );
    while ( $rows = mysqli_fetch_assoc( $result ) ) {
      array_push( $baidangban, $rows );

    }
    giaiPhongBoNho( $link, $result );
    return $baidangban;
  }
  public function LoadBaiDangBanChoDuyet() {
    $baidangban = array();
    $link = "";
    taoKetNoi( $link );
    $result = chayTruyVanTraVeDL( $link, "SELECT * FROM tbl_baidangban WHERE tbl_baidangban.trangthai = 0 " );
    while ( $rows = mysqli_fetch_assoc( $result ) ) {
      array_push( $baidangban, $rows );

    }
    giaiPhongBoNho( $link, $result );
    return $baidangban;
  }
  public function LoadBaiDangBanDaHuy() {
    $baidangban = array();
    $link = "";
    taoKetNoi( $link );
    $result = chayTruyVanTraVeDL( $link, "SELECT * FROM tbl_baidangban WHERE tbl_baidangban.trangthai = -1 " );
    while ( $rows = mysqli_fetch_assoc( $result ) ) {
      array_push( $baidangban, $rows );

    }
    giaiPhongBoNho( $link, $result );
    return $baidangban;
  }
  public function LoadBaiDangBanFull( $idtaikhoan ) {
    $baidangban = array();
    $mangrong = array();
    $link = "";
    taoKetNoi( $link );
    $result = chayTruyVanTraVeDL( $link, "SELECT * FROM tbl_baidangban WHERE tbl_baidangban.idtaikhoan = $idtaikhoan ORDER BY tbl_baidangban.thoigian " );
    if ( $result == true ) {
      while ( $rows = mysqli_fetch_assoc( $result ) ) {
        array_push( $baidangban, $rows );

      }
      giaiPhongBoNho( $link, $result );
      return $baidangban;
    } else {
      return $mangrong;
    }
  }
  public function LoadChiTietBDBan( $idbaidangban ) {
    $baidangban = array();
    $link = "";
    taoKetNoi( $link );
    $result = chayTruyVanTraVeDL( $link, "SELECT * FROM (SELECT bang2.*, tbl_theloai.tentheloai FROM (SELECT tbl_baidangban.*, tbl_taikhoan.anhnguoidung FROM tbl_baidangban INNER JOIN tbl_taikhoan ON tbl_baidangban.idtaikhoan = tbl_taikhoan.idtaikhoan) AS bang2 INNER JOIN tbl_theloai ON bang2.idtheloai = tbl_theloai.idtheloai ) AS bang1 WHERE bang1.idbaidang = $idbaidangban" );
    while ( $rows = mysqli_fetch_assoc( $result ) ) {
      array_push( $baidangban, $rows );
      break;
    }
    return $baidangban[ 0 ];
  }
  public function LoadChiTietBDBanChoKD( $idbaidangban ) {
    $baidangban = array();
    $link = "";
    taoKetNoi( $link );
    $result = chayTruyVanTraVeDL( $link, "SELECT * FROM tbl_baidangban AS bdban WHERE bdban.trangthai = 0 AND bdban.idbaidang = $idbaidangban" );
    while ( $rows = mysqli_fetch_assoc( $result ) ) {
      array_push( $baidangban, $rows );
      break;
    }
    return $baidangban[ 0 ];
  }
public function LoadBaiDangBanMoi() {
	$ngay = date("Y-m-d",mktime(0,0,0, date("m")-2, date("d"), date("Y")));
    $baidangban = array();
    $link = "";
    taoKetNoi( $link );
    $result = chayTruyVanTraVeDL( $link, "SELECT * FROM tbl_baidangban AS bdban WHERE bdban.trangthai = 1 AND bdban.thoigian >= '$ngay' ORDER BY bdban.thoigian DESC" );
    while ( $rows = mysqli_fetch_assoc( $result ) ) {
      array_push( $baidangban, $rows );
    }
    return $baidangban;
  }
	public function LoadDanhMucTheLoai() {
    $theloai = array();
    $link = "";
    taoKetNoi( $link );
    $result = chayTruyVanTraVeDL( $link, "SELECT * FROM `tbl_theloai` ORDER BY tentheloai ASC" );
    while ( $rows = mysqli_fetch_assoc( $result ) ) {
      array_push( $theloai, $rows );

    }
    giaiPhongBoNho( $link, $result );
    return $theloai;
  }
	public function LoadBaiDangBanTheoLoai($idtheloai) {
    $baidangban = array();
    $link = "";
    taoKetNoi( $link );
    $result = chayTruyVanTraVeDL( $link, "SELECT * FROM (SELECT tbl_baidangban.*, tbl_theloai.tentheloai, tbl_theloai.anhloai FROM tbl_baidangban INNER JOIN tbl_theloai ON tbl_baidangban.idtheloai = tbl_theloai.idtheloai) AS bdban WHERE bdban.trangthai=1 AND bdban.idtheloai = $idtheloai" );
    while ( $rows = mysqli_fetch_assoc( $result ) ) {
      array_push( $baidangban, $rows );

    }
    giaiPhongBoNho( $link, $result );
    return $baidangban;
  }
	public function LoadBaiDangTuThanhTimKiem($key) {
    $baidangban = array();
	$mangrong = array();
    $link = "";
    taoKetNoi( $link );
    $result = chayTruyVanTraVeDL( $link, "SELECT * FROM (SELECT tbl_baidangban.*, tbl_theloai.tentheloai, tbl_theloai.anhloai FROM tbl_baidangban INNER JOIN tbl_theloai ON tbl_baidangban.idtheloai = tbl_theloai.idtheloai) AS bdban WHERE (bdban.trangthai = 1 AND bdban.tensach LIKE '%".$key."%') OR (bdban.trangthai = 1 AND bdban.tentheloai LIKE '%".$key."%')" );
    if ( $result == true ) {
      while ( $rows = mysqli_fetch_assoc( $result ) ) {
        array_push( $baidangban, $rows );

      }
      giaiPhongBoNho( $link, $result );
      return $baidangban;
    } else {
      return $mangrong;
    }
  }
	public function LoadBaiDangBanFillter($tinhthanh, $domoi, $gia) {
		$query = "SELECT * FROM (SELECT tbl_baidangban.*, bang2.tentinhthanh, bang2.idtinhthanh FROM tbl_baidangban INNER JOIN (SELECT tbl_taikhoan.*, tbl_tinhthanh.tentinhthanh FROM tbl_taikhoan INNER JOIN tbl_tinhthanh ON tbl_taikhoan.idtinhthanh = tbl_tinhthanh.idtinhthanh) AS bang2 ON tbl_baidangban.idtaikhoan = bang2.idtaikhoan) AS bang1 ";
		if($tinhthanh !=-1 || $domoi !=-1 || $gia !=-1){
			$query .="WHERE bang1.trangthai = 1 AND";
			if ($tinhthanh != -1) {
				$query .= " ( ";
				for ($i = 0; $i < count($tinhthanh); $i++) {

					if ($i == 0) {
						$query .= " bang1.idtinhthanh = " . $tinhthanh[$i] . " ";
						
					} else {
						$query .= " OR bang1.idtinhthanh = " . $tinhthanh[$i] . " ";
						
					}
				}
				$query .= " ) ";
			}

			if ($domoi != -1) {

				for ($i = 0; $i < count($domoi); $i++) {
					if ($i == 0 && $tinhthanh != -1) {
						$query .= " And (bang1.chatluong " . $domoi[$i] . " ";
						
					} else {
						if ($i == 0 && !$tinhthanh != -1) {
							$query .= " (bang1.chatluong " . $domoi[$i] . " ";
							
						} else {
							$query .= " OR bang1.chatluong " . $domoi[$i] . " ";
							
						}
					}
				}
				$query .= " ) ";
			}

			if ($gia != -1) {
				for ($i = 0; $i < count($gia); $i++) {

					if ($i == 0 && $domoi != -1 || $tinhthanh != -1) {
						$query .= " And ( bang1.gia " . $gia[$i] . " ";
						
					} else {
						if ($i == 0 && !($domoi != -1) || $tinhthanh != -1) {
							$query .= " ( bang1.gia " . $gia[$i] . " ";
							
						} else {
							$query .= " OR bang1.gia " . $gia[$i] . " ";
							
						}
					}
					
				}
				$query .= " ) ";
			}

			
		}
    $baidangban = array();
	$mangrong = array();
    $link = "";
    taoKetNoi( $link );
    $result = chayTruyVanTraVeDL( $link, $query);
    if ( $result == true ) {
      while ( $rows = mysqli_fetch_assoc( $result ) ) {
        array_push( $baidangban, $rows );

      }
      giaiPhongBoNho( $link, $result );
      return $baidangban;
    } else {
      return $mangrong;
    }
  }
}
?>