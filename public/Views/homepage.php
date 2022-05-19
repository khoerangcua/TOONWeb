<!DOCTYPE html>
<html lang="en">
<?php 
	require_once("private/Controllers/TrangchuController.php");
	require_once( "private/Controllers/HeaderController.php" );
	
?>
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
    <?php
    include_once("public/Views/header.php");
    ?>
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
            <div class="heading row" alignment="center">
				<div class="col-6">
					
					<a href="?to=trangchu&xem=mua">
						<button class="button mua-btn" type="button" style="align-content: center">Thuận Mua</button>
					</a>
				</div>
				<div class="col-6">
					
					<a href="?to=trangchu&xem=ban">
						<button class="button ban-btn" type="button" style="align-content: center">Vừa Bán</button>	
					</a>
				</div>
                <!--<h3 class="text-uppercase">Hàng mới</h3>
                <a class="more" href="">Xem thêm</a>-->
            </div>
            <div class="row pro-list">
                <?php 
					require_once("private/Controllers/TrangchuController.php");
					$trangchuCtrl = new TrangChuCtrl();
					$trangchuCtrl->LoadBaiDangTrangChu();
				?>
            </div>


            
            </div>
        </div>
    </div>
    <?php
        include_once("public/views/footer.php");
    ?>
</body>

</html>