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
    <header>
        <div class="container">
            <div class="navbar">
                <a style="font-size: 24px" href="index.php?to=trangchu&xem=ban"><img src="public/images/275225020_3180982448841648_1157249981496616579_n.png" width="100px">TOON</a>
                <div class="searchbar">
                	<form class="d-flex justify-content-center px-5" >
                   		<div class="search"> 
							<input type="hidden" name="to" value="timkiem">
							<input type="hidden" name="xem" value="ban">
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
                <div class="navbar action-menu">
                    <div>
                        <a href="../page/?to=login" title="Tài khoản">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                            </svg> Đăng nhập
                        </a>
                    </div>
                    <div class="action-manage">
                        <a href="index.php?to=quanlycanhan&id=1&xem=tinmua" title="Quản lí tin">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-boxes" viewBox="0 0 16 16">
                                <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434L7.752.066ZM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567L4.25 7.504ZM7.5 9.933l-2.75 1.571v3.134l2.75-1.571V9.933Zm1 3.134 2.75 1.571v-3.134L8.5 9.933v3.134Zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567-2.742 1.567Zm2.242-2.433V3.504L8.5 5.076V8.21l2.75-1.572ZM7.5 8.21V5.076L4.75 3.504v3.134L7.5 8.21ZM5.258 2.643 8 4.21l2.742-1.567L8 1.076 5.258 2.643ZM15 9.933l-2.75 1.571v3.134L15 13.067V9.933ZM3.75 14.638v-3.134L1 9.933v3.134l2.75 1.571Z" />
                            </svg>Quản lí tin
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-12 col-md-2">
                <div class="d-xxl-none d-xl-none d-lg-none d-md-none filter-heading filter-control" onClick="filtertoogle(this)">
					
                    <span class="">Bộ lọc ▲</span>
                </div>
                <form action="./" method="get" id="filter">
                    <input type="hidden" name="to" value="timkiem">
					<input type="hidden" name="xem" value="ban">
                    <input type="hidden" name="from" value="fillter">

                    <div class="filter">
                        <div class="filter-places">
                            <span class="filter-select">Nơi bán</span>
                            <span class="filter-control filter-select" onClick="filterplacestoggle(this)">-</span>
                            <ul id="filter-places-items">
                                <li class="form-check">
                                    <input class="form-check-input" type="checkbox" name="idtinhthanh[]" value="1" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Hà Nội
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="checkbox" name="idtinhthanh[]" value="2" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        TP.Hồ Chí Minh
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="checkbox" name="idtinhthanh[]" value="3" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Đà Nẵng
                                    </label>
                                </li>
                            </ul>
                        </div>



                        <div class="filter-condition">
                            <span class="filter-select">Độ mới</span>
                            <span class="filter-control filter-select" onClick="filtercondtoggle(this)">-</span>
                            <ul id="filter-condition-items">
                                <li class="form-check">
                                    <input class="form-check-input" type="checkbox" name="domoi[]" value=">80" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Trên 80%
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="checkbox" name="domoi[]" value="BETWEEN 50 AND 80" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        50% - 80%
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="checkbox" name="domoi[]" value="<50" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Dưới 50%
                                    </label>
                                </li>
                            </ul>
                        </div>

                        <div class="filter-price">
                            <span class="filter-select">Giá</span>
                            <span class="filter-control filter-select" onClick="filterpricetoggle(this)">-</span>
                            <ul id="filter-price-items">
                                <li class="form-check">
                                    <input class="form-check-input" type="checkbox" name="gia[]" value=" > 500000 " id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Trên 500,000₫
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="checkbox" name="gia[]" value=" BETWEEN 200000 AND 500000 " id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        200,000₫ - 500,000₫
                                    </label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="checkbox" name="gia[]" value=" < 200000 " id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Dưới 200,000₫
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
					<button class="btn-close-white" type="submit">Lọc</button>
                </form>
            </div>
            <div class="col-lg-10 col-md-10 col-12">
                <div class="row pro-list">
                    <?php 
					require_once("private/Controllers/TrangtimkiemController.php");
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