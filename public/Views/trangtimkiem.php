<!DOCTYPE html>
<html lang="en">
<?php
require_once( "private/Controllers/TrangtimkiemController.php" );
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
<header>
	<?php
    include_once("public/Views/header2.php");
    ?>
</header>
<div class="container">
  <div class="row">
    <div class="col-lg-2 col-12 col-md-2">
      <div class="d-xxl-none d-xl-none d-lg-none d-md-none filter-heading filter-control" onClick="filtertoogle(this)"> <span class="">Bộ lọc ▲</span> </div>
      <form action="./" method="get" id="filter">
        <input type="hidden" name="to" value="timkiem">
		<?php
		  if($_GET["xem"] == "ban"){
			echo"<input type='hidden' name='xem' value='ban'>";
	
			}
			else{
				echo"<input type='hidden' name='xem' value='mua'>";
			}
		  ?>
        <input type="hidden" name="from" value="fillter">
        <div class="filter">
          <div class="filter-places"> <span class="filter-select">Nơi bán</span> <span class="filter-control filter-select" onClick="filterplacestoggle(this)">-</span>
            <ul id="filter-places-items">
              <li class="form-check">
                <input class="form-check-input" type="checkbox" name="idtinhthanh[]" value="1" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault"> Hà Nội </label>
              </li>
              <li class="form-check">
                <input class="form-check-input" type="checkbox" name="idtinhthanh[]" value="2" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault"> TP.Hồ Chí Minh </label>
              </li>
              <li class="form-check">
                <input class="form-check-input" type="checkbox" name="idtinhthanh[]" value="3" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault"> Đà Nẵng </label>
              </li>
            </ul>
          </div>
          <div class="filter-condition"> <span class="filter-select">Độ mới</span> <span class="filter-control filter-select" onClick="filtercondtoggle(this)">-</span>
            <ul id="filter-condition-items">
              <li class="form-check">
                <input class="form-check-input" type="checkbox" name="domoi[]" value=">80" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault"> Trên 80% </label>
              </li>
              <li class="form-check">
                <input class="form-check-input" type="checkbox" name="domoi[]" value="BETWEEN 50 AND 80" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault"> 50% - 80% </label>
              </li>
              <li class="form-check">
                <input class="form-check-input" type="checkbox" name="domoi[]" value="<50" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault"> Dưới 50% </label>
              </li>
            </ul>
          </div>
          <div class="filter-price"> <span class="filter-select">Giá</span> <span class="filter-control filter-select" onClick="filterpricetoggle(this)">-</span>
            <ul id="filter-price-items">
              <li class="form-check">
                <input class="form-check-input" type="checkbox" name="gia[]" value=" > 500000 " id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault"> Trên 500,000₫ </label>
              </li>
              <li class="form-check">
                <input class="form-check-input" type="checkbox" name="gia[]" value=" BETWEEN 200000 AND 500000 " id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault"> 200,000₫ - 500,000₫ </label>
              </li>
              <li class="form-check">
                <input class="form-check-input" type="checkbox" name="gia[]" value=" < 200000 " id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault"> Dưới 200,000₫ </label>
              </li>
            </ul>
          </div>
        </div>
        <button class="button btn-filter" type="submit">Lọc</button>
      </form>
    </div>
    <div class="col-lg-10 col-md-10 col-12">
      <div class="row pro-list">
        <?php
        require_once( "private/Controllers/TrangtimkiemController.php" );
        $trangtimkiemCtrl = new TrangTimKiemCtrl();
        $trangtimkiemCtrl->LoadTrangTimKiem();
        ?>
      </div>
    </div>
  </div>
</div>

<!--script--> 
<script src="../script/trangchuscript.js"></script>
</body>
</html>