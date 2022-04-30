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
    $result = chayTruyVanTraVeDL( $link, "SELECT * FROM (SELECT tbl_baidangban.*, tbl_taikhoan.anhnguoidung FROM tbl_baidangban INNER JOIN tbl_taikhoan ON tbl_baidangban.idtaikhoan = tbl_taikhoan.idtaikhoan) AS bdban WHERE bdban.idbaidang = $idbaidangban" );
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
}
?>