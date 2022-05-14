<?php
require_once( "private/Modules/db_module.php" );
class TinCanMuaModel {
  public function LoadTinCanMuaDaDuyet() {
    $tincanmua = array();
    $link = "";
    taoKetNoi( $link );
    $result = chayTruyVanTraVeDL( $link, "SELECT * FROM tbl_tincanmua WHERE tbl_tincanmua.trangthai = 1 " );
    while ( $rows = mysqli_fetch_assoc( $result ) ) {
      array_push( $tincanmua, $rows );

    }
    giaiPhongBoNho( $link, $result );
    return $tincanmua;
  }
  public function LoadTinCanMuaChoDuyet() {
    $tincanmua = array();
    $link = "";
    taoKetNoi( $link );
    $result = chayTruyVanTraVeDL( $link, "SELECT * FROM tbl_tincanmua WHERE tbl_tincanmua.trangthai = 0 " );
    while ( $rows = mysqli_fetch_assoc( $result ) ) {
      array_push( $tincanmua, $rows );

    }
    giaiPhongBoNho( $link, $result );
    return $tincanmua;
  }
  public function LoadTinCanMuaDaHuy() {
    $tincanmua = array();
    $link = "";
    taoKetNoi( $link );
    $result = chayTruyVanTraVeDL( $link, "SELECT * FROM tbl_tincanmua WHERE tbl_tincanmua.trangthai = -1 " );
    while ( $rows = mysqli_fetch_assoc( $result ) ) {
      array_push( $tincanmua, $rows );

    }
    giaiPhongBoNho( $link, $result );
    return $tincanmua;
  }
  public function LoadTinCanMuaFull( $idtaikhoan ) {
    $tincanmua = array();
    $mangrong = array();
    $link = "";
    taoKetNoi( $link );
    $result = chayTruyVanTraVeDL( $link, "SELECT * FROM tbl_tincanmua WHERE tbl_tincanmua.idtaikhoan = $idtaikhoan ORDER BY tbl_tincanmua.thoigian " );
    if ( $result == true ) {
      while ( $rows = mysqli_fetch_assoc( $result ) ) {
        array_push( $tincanmua, $rows );

      }
      giaiPhongBoNho( $link, $result );
      return $tincanmua;
    } else {
      return $mangrong;
    }
  }
  public function LoadChiTietTinCanMua( $idtincanmua ) {
    $tincanmua = array();
    $link = "";
    taoKetNoi( $link );
    $result = chayTruyVanTraVeDL( $link, "SELECT * FROM (SELECT tbl_tincanmua.*, tbl_taikhoan.anhnguoidung FROM tbl_tincanmua INNER JOIN tbl_taikhoan ON tbl_tincanmua.idtaikhoan = tbl_taikhoan.idtaikhoan) AS tcmua WHERE tcmua.idtincanmua = $idtincanmua" );
    while ( $rows = mysqli_fetch_assoc( $result ) ) {
      array_push( $tincanmua, $rows );
      break;
    }
    return $tincanmua[ 0 ];
  }
	public function LoadTinCanMuaMoi() {
	$ngay = date("Y-m-d",mktime(0,0,0, date("m")-2, date("d"), date("Y")));
    $tincanmua = array();
    $link = "";
    taoKetNoi( $link );
    $result = chayTruyVanTraVeDL( $link, "SELECT * FROM tbl_tincanmua AS tcmua WHERE tcmua.trangthai = 1 AND tcmua.thoigian >= '$ngay' ORDER BY tcmua.thoigian DESC" );
    while ( $rows = mysqli_fetch_assoc( $result ) ) {
      array_push( $tincanmua, $rows );
    }
    return $tincanmua;
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
	public function LoadTinCanMuaTheoLoai($idtheloai) {
    $tincanmua = array();
    $link = "";
    taoKetNoi( $link );
    $result = chayTruyVanTraVeDL( $link, "SELECT * FROM (SELECT tbl_tincanmua.*, tbl_theloai.tentheloai, tbl_theloai.anhloai FROM tbl_tincanmua INNER JOIN tbl_theloai ON tbl_tincanmua.idtheloai = tbl_theloai.idtheloai) AS tcmua WHERE tcmua.trangthai=1 AND tcmua.idtheloai = $idtheloai" );
    while ( $rows = mysqli_fetch_assoc( $result ) ) {
      array_push( $tincanmua, $rows );

    }
    giaiPhongBoNho( $link, $result );
    return $tincanmua;
  }
	public function LoadBaiDangTuThanhTimKiem($key) {
    $tincanmua = array();
	$mangrong = array();
    $link = "";
    taoKetNoi( $link );
    $result = chayTruyVanTraVeDL( $link, "SELECT * FROM (SELECT tbl_tincanmua.*, tbl_theloai.tentheloai, tbl_theloai.anhloai FROM tbl_tincanmua INNER JOIN tbl_theloai ON tbl_tincanmua.idtheloai = tbl_theloai.idtheloai) AS tcmua WHERE (tcmua.trangthai = 1 AND tcmua.tensach LIKE '%".$key."%') OR (tcmua.trangthai = 1 AND tcmua.tentheloai LIKE '%".$key."%')" );
    if ( $result == true ) {
      while ( $rows = mysqli_fetch_assoc( $result ) ) {
        array_push( $tincanmua, $rows );

      }
      giaiPhongBoNho( $link, $result );
      return $tincanmua;
    } else {
      return $mangrong;
    }
  }
	public function LoadTinCanMuaFillter($tinhthanh, $domoi, $gia) {
		$query = "SELECT * FROM (SELECT tbl_tincanmua.*, bang2.tentinhthanh, bang2.idtinhthanh FROM tbl_tincanmua INNER JOIN (SELECT tbl_taikhoan.*, tbl_tinhthanh.tentinhthanh FROM tbl_taikhoan INNER JOIN tbl_tinhthanh ON tbl_taikhoan.idtinhthanh = tbl_tinhthanh.idtinhthanh) AS bang2 ON tbl_tincanmua.idtaikhoan = bang2.idtaikhoan) AS bang1 ";
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
						$query .= " And (bang1.chatluongmax " . $domoi[$i] . " ";
						
					} else {
						if ($i == 0 && !$tinhthanh != -1) {
							$query .= " (bang1.chatluongmax " . $domoi[$i] . " ";
							
						} else {
							$query .= " OR bang1.chatluongmax " . $domoi[$i] . " ";
							
						}
					}
				}
				$query .= " ) ";
			}

			if ($gia != -1) {
				for ($i = 0; $i < count($gia); $i++) {

					if ($i == 0 && $domoi != -1 || $tinhthanh != -1) {
						$query .= " And ( bang1.giamax " . $gia[$i] . " ";
						
					} else {
						if ($i == 0 && !($domoi != -1) || $tinhthanh != -1) {
							$query .= " ( bang1.giamax " . $gia[$i] . " ";
							
						} else {
							$query .= " OR bang1.giamax " . $gia[$i] . " ";
							
						}
					}
					
				}
				$query .= " ) ";
			}

			
		}
    $tincanmua = array();
	$mangrong = array();
    $link = "";
    taoKetNoi( $link );
    $result = chayTruyVanTraVeDL( $link, $query);
    if ( $result == true ) {
      while ( $rows = mysqli_fetch_assoc( $result ) ) {
        array_push( $tincanmua, $rows );

      }
      giaiPhongBoNho( $link, $result );
      return $tincanmua;
    } else {
      return $mangrong;
    }
  }
}
?>