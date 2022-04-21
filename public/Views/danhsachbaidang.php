<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách bài đăng</title>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--google icon-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--font chữ-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <!--my style-->
    <link rel="stylesheet" href="public/style/style.css">
    <link rel="stylesheet" href="public/style/quanlistyle.css">
</head>

<body>
    <div class="container">
        <h3 class="title">Danh sách bài đăng</h3>
        <div class="row">
            <div class="col-12 col-md-3 col-lg-2" style="padding: 0;">
                <div class="manage wtb">
                    <div class="menu">
                    <span onClick="buymenutoggle(this)" href="index.php?to=kiemduyet&xem=mua&duyet=full">Bài đăng mua ▼</span>
					
                    </div>
                    <ul id="dropmenu-buy">
                        <li class="form-check menu-active">
                            <a href="index.php?to=kiemduyet&xem=mua&duyet=cho">Bài đang chờ duyệt</a>
                        </li>
                        <li class="form-check">
                            <a href="index.php?to=kiemduyet&xem=mua&duyet=da">Bài đã duyệt</a>
                        </li>
                        <li class="form-check">
                            <a href="index.php?to=kiemduyet&xem=mua&duyet=huy">Bài bị từ chối</a>
                        </li>
                    </ul>
                </div>
                <div class="manage wts">
                    <div class="menu"> 
                        <span onClick="sellmenutoggle(this)" href="index.php?to=kiemduyet&xem=ban&duyet=full">Bài đăng bán ▼</span>
						
                    </div>
                    <ul id="dropmenu-sell">
                        <li class="form-check">
                            <a href="index.php?to=kiemduyet&xem=ban&duyet=cho">Bài đang chờ duyệt</a>
                        </li>
                        <li class="form-check">
                            <a href="index.php?to=kiemduyet&xem=ban&duyet=da">Bài đã duyệt</a>
                        </li>
                        <li class="form-check">
                            <a href="index.php?to=kiemduyet&xem=ban&duyet=huy">Bài bị từ chối</a>
                        </li>
                    </ul>
                </div>
                
            </div>
            <div class="col-12 col-md-9 col-lg-10">
                <?php 
					require_once("private/Controllers/TrangkiemduyetController.php");
					$trangkiemduyetCtrl = new TrangKiemDuyetCtrl();
					$trangkiemduyetCtrl->LoadBaiDangTrangKiemDuyet();
					?>
        </div>
            </div>
        </div>

    </div>
<script src="../script/kiemduyetscript.js"></script>
</body>

</html>