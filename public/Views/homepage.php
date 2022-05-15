<!DOCTYPE html>
<html lang="en">
<?php 
	require_once("private/Controllers/TrangchuController.php");
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
    <header class="container-fluid">
        <div class="navbar">
            <div class="page-icon">
                <a href="">
                    <img class="page-logo" src="public/resource/275415790_351273863444344_4713147307608182994_n.jpg">
                </a>
                <a class="page-name d-none d-md-inline-block d-lg-inline-block" href="">TOON</a>
            </div>
            <div class="searchbar">
                <form class="d-flex justify-content-center px-5" >
                    <div class="search"> 
						<input type="hidden" name="to" value="timkiem">
						<?php
		  					if($_GET["xem"] == "ban"){
								echo"<input type='hidden' name='xem' value='ban'>";
	
							}
							else{
								echo"<input type='hidden' name='xem' value='mua'>";
							}
		  				?>
                		<input type="hidden" name="from" value="searchbar">
						<input type="text" class="search-input" placeholder="Bạn cần tìm gì?.." name="key"> 
						<button type="submit" class="search-icon">	
							<svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg> 
						</button> 
					</div>
                </form>
            </div>
            <div class="action-bar">
                <?php 
					
					$trangchuCtrl = new TrangChuCtrl();
					$trangchuCtrl->LoadTaiKhoanHeader();
				?>
                
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
            <div class="heading row" align="center">
				<div class="col-md-6">
					
					<a href="?to=trangchu&xem=mua">
						<button class="" type="button" style="align-content: center">Thuận Mua</button>
					</a>
				</div>
				<div class="col-md-6">
					
					<a href="?to=trangchu&xem=ban">
						<button class="" type="button" style="align-content: center">Vừa Bán</button>	
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
    </div>
</body>

</html>