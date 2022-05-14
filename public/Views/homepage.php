<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--google icon-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--font chữ-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!--my style-->
    <link rel="stylesheet" href="public/style/style.css">
    <link rel="stylesheet" href="public/style/trangchustyle.css">

</head>

<body>
    <header class="container-fluid">
        <div class="navbar">
            <div class="page-icon">
                <a href="">
                    <img class="page-logo" src="resource/275415790_351273863444344_4713147307608182994_n.jpg">
                </a>
                <a class="page-name d-none d-md-inline-block d-lg-inline-block" href="">TOON</a>
            </div>
            <div class="searchbar">
                <div class="d-flex justify-content-center px-5">
                    <div class="search"> <input type="text" class="search-input" placeholder="Bạn cần tìm gì?.." name=""> <a href="#" class="search-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg> </a> </div>
                </div>
            </div>
            <div class="action-bar">
                <a href="?to=dangnhap">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg>
                    <p class="d-none d-md-block d-lg-block">Tài khoản</p>
                </a>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
                        <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
                    </svg>
                    <p class="d-none d-md-block d-lg-block">Quản lí tin</p>
                </a>
            </div>
        </div>
    </header>
    <!--body-->
    <div class="container">
        <div class="catogery">
            <p>Danh mục sản phẩm</p>
            <div class="row">
                <?php 
					require_once("private/Controllers/TrangchuController.php");
					$trangchuCtrl = new TrangChuCtrl();
					$trangchuCtrl->LoadDanhMuc();
					?>
            </div>
        </div>
        <div class="view-list">
            <div class="heading">
                <h3 class="text-uppercase">Hàng mới</h3>
                <a class="more" href="">Xem thêm</a>
            </div>
            <div class="row pro-list">
                <?php 
					require_once("private/Controllers/TrangchuController.php");
					$trangchuCtrl = new TrangChuCtrl();
					$trangchuCtrl->LoadHangMoi(8);
					?>
            </div>


            <div class="heading">
                <h3 class="text-uppercase">Hàng giảm giá</h3>
                <a class="more" href="">Xem thêm</a>
            </div>
            <div class="row pro-list">
                <div class="col-lg-3 col-md-6 col-6 products">
                    <div class="pro-img">
                        <a href="">
                            <img class="pro-img pro-img-1" src="../resource/nhung_vu_ky_an_cua_sherlock_holmestb_1_2020_05_30_12_53_10.jpg">
                        </a>
                    </div>
                    <div class="pro-detail">
                        <h6 class="pro-name"><a href="">Ma Gaming</a></h6>
                        <div class="pro-price">
                            <p class="pro-price sale">200,440₫</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 products">
                    <div class="pro-img">
                        <a href="">
                            <img class="pro-img pro-img-1" src="../resource/nhung_vu_ky_an_cua_sherlock_holmestb_1_2020_05_30_12_53_10.jpg">
                        </a>
                    </div>
                    <div class="pro-detail">
                        <h6 class="pro-name"><a href="">Ma Gaming</a></h6>
                        <div class="pro-price">
                            <p class="pro-price sale">200,440₫</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 products">
                    <div class="pro-img">
                        <a href="">
                            <img class="pro-img pro-img-1" src="../resource/nhung_vu_ky_an_cua_sherlock_holmestb_1_2020_05_30_12_53_10.jpg">
                        </a>
                    </div>
                    <div class="pro-detail">
                        <h6 class="pro-name"><a href="">Ma Gaming</a></h6>
                        <div class="pro-price">
                            <p class="pro-price sale">200,440₫</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 products">
                    <div class="pro-img">
                        <a href="">
                            <img class="pro-img pro-img-1" src="../resource/nhung_vu_ky_an_cua_sherlock_holmestb_1_2020_05_30_12_53_10.jpg">
                        </a>
                    </div>
                    <div class="pro-detail">
                        <h6 class="pro-name"><a href="">Ma Gaming</a></h6>
                        <div class="pro-price">
                            <p class="pro-price sale">200,440₫</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 products">
                    <div class="pro-img">
                        <a href="">
                            <img class="pro-img pro-img-1" src="../resource/nhung_vu_ky_an_cua_sherlock_holmestb_1_2020_05_30_12_53_10.jpg">
                        </a>
                    </div>
                    <div class="pro-detail">
                        <h6 class="pro-name"><a href="">Ma Gaming</a></h6>
                        <div class="pro-price">
                            <p class="pro-price sale">200,440₫</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 products">
                    <div class="pro-img">
                        <a href="">
                            <img class="pro-img pro-img-1" src="../resource/nhung_vu_ky_an_cua_sherlock_holmestb_1_2020_05_30_12_53_10.jpg">
                        </a>
                    </div>
                    <div class="pro-detail">
                        <h6 class="pro-name"><a href="">Ma Gaming</a></h6>
                        <div class="pro-price">
                            <p class="pro-price sale">200,440₫</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 products">
                    <div class="pro-img">
                        <a href="">
                            <img class="pro-img pro-img-1" src="../resource/nhung_vu_ky_an_cua_sherlock_holmestb_1_2020_05_30_12_53_10.jpg">
                        </a>
                    </div>
                    <div class="pro-detail">
                        <h6 class="pro-name"><a href="">Ma Gaming</a></h6>
                        <div class="pro-price">
                            <p class="pro-price sale">200,440₫</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 products">
                    <div class="pro-img">
                        <a href="">
                            <img class="pro-img pro-img-1" src="../resource/nhung_vu_ky_an_cua_sherlock_holmestb_1_2020_05_30_12_53_10.jpg">
                        </a>
                    </div>
                    <div class="pro-detail">
                        <h6 class="pro-name"><a href="">Ma Gaming</a></h6>
                        <div class="pro-price">
                            <p class="pro-price sale">200,440₫</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="heading">
                <h3 class="text-uppercase">Hàng hiếm</h3>
                <a class="more" href="">Xem thêm</a>
            </div>
            <div class="row pro-list">
                <div class="col-lg-3 col-md-6 col-6 products">
                    <div class="pro-img">
                        <a href="">
                            <img class="pro-img pro-img-1" src="../resource/nhung_vu_ky_an_cua_sherlock_holmestb_1_2020_05_30_12_53_10.jpg">
                        </a>
                    </div>
                    <div class="pro-detail">
                        <h6 class="pro-name"><a href="">Ma Gaming</a></h6>
                        <div class="pro-price">
                            <p class="pro-price sale">200,440₫</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 products">
                    <div class="pro-img">
                        <a href="">
                            <img class="pro-img pro-img-1" src="../resource/nhung_vu_ky_an_cua_sherlock_holmestb_1_2020_05_30_12_53_10.jpg">
                        </a>
                    </div>
                    <div class="pro-detail">
                        <h6 class="pro-name"><a href="">Ma Gaming</a></h6>
                        <div class="pro-price">
                            <p class="pro-price sale">200,440₫</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 products">
                    <div class="pro-img">
                        <a href="">
                            <img class="pro-img pro-img-1" src="../resource/nhung_vu_ky_an_cua_sherlock_holmestb_1_2020_05_30_12_53_10.jpg">
                        </a>
                    </div>
                    <div class="pro-detail">
                        <h6 class="pro-name"><a href="">Ma Gaming</a></h6>
                        <div class="pro-price">
                            <p class="pro-price sale">200,440₫</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 products">
                    <div class="pro-img">
                        <a href="">
                            <img class="pro-img pro-img-1" src="../resource/nhung_vu_ky_an_cua_sherlock_holmestb_1_2020_05_30_12_53_10.jpg">
                        </a>
                    </div>
                    <div class="pro-detail">
                        <h6 class="pro-name"><a href="">Ma Gaming</a></h6>
                        <div class="pro-price">
                            <p class="pro-price sale">200,440₫</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 products">
                    <div class="pro-img">
                        <a href="">
                            <img class="pro-img pro-img-1" src="../resource/nhung_vu_ky_an_cua_sherlock_holmestb_1_2020_05_30_12_53_10.jpg">
                        </a>
                    </div>
                    <div class="pro-detail">
                        <h6 class="pro-name"><a href="">Ma Gaming</a></h6>
                        <div class="pro-price">
                            <p class="pro-price sale">200,440₫</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 products">
                    <div class="pro-img">
                        <a href="">
                            <img class="pro-img pro-img-1" src="../resource/nhung_vu_ky_an_cua_sherlock_holmestb_1_2020_05_30_12_53_10.jpg">
                        </a>
                    </div>
                    <div class="pro-detail">
                        <h6 class="pro-name"><a href="">Ma Gaming</a></h6>
                        <div class="pro-price">
                            <p class="pro-price sale">200,440₫</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 products">
                    <div class="pro-img">
                        <a href="">
                            <img class="pro-img pro-img-1" src="../resource/nhung_vu_ky_an_cua_sherlock_holmestb_1_2020_05_30_12_53_10.jpg">
                        </a>
                    </div>
                    <div class="pro-detail">
                        <h6 class="pro-name"><a href="">Ma Gaming</a></h6>
                        <div class="pro-price">
                            <p class="pro-price sale">200,440₫</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 products">
                    <div class="pro-img">
                        <a href="">
                            <img class="pro-img pro-img-1" src="../resource/nhung_vu_ky_an_cua_sherlock_holmestb_1_2020_05_30_12_53_10.jpg">
                        </a>
                    </div>
                    <div class="pro-detail">
                        <h6 class="pro-name"><a href="">Ma Gaming</a></h6>
                        <div class="pro-price">
                            <p class="pro-price sale">200,440₫</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>