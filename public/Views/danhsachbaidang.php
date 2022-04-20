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
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/quanlistyle.css">
</head>

<body>
    <div class="container">
        <h3 class="title">Danh sách bài đăng</h3>
        <div class="row">
            <div class="col-12 col-md-3 col-lg-2" style="padding: 0;">
                <div class="manage wtb">
                    <div class="menu">
                    <span onClick="buymenutoggle(this)">Bài đăng mua ▼</span>
                    </div>
                    <ul id="dropmenu-buy">
                        <li class="form-check menu-active">
                            <a href="">Bài đang chờ duyệt</a>
                        </li>
                        <li class="form-check">
                            <a href="">Bài đã duyệt</a>
                        </li>
                        <li class="form-check">
                            <a href="">Bài bị từ chối</a>
                        </li>
                    </ul>
                </div>
                <div class="manage wts">
                    <div class="menu"> 
                        <span onClick="sellmenutoggle(this)">Bài đăng bán ▼</span>
                    </div>
                    <ul id="dropmenu-sell">
                        <li class="form-check">
                            <a href="">Bài đang chờ duyệt</a>
                        </li>
                        <li class="form-check">
                            <a href="">Bài đã duyệt</a>
                        </li>
                        <li class="form-check">
                            <a href="">Bài bị từ chối</a>
                        </li>
                    </ul>
                </div>
                
            </div>
            <div class="col-12 col-md-9 col-lg-10">
                <div class="row items">
                    <div class="col-md-3 col-lg-2 col-xl-2 col-5">
                        <a href="" class="img-wrapper">
                            <img class="pro-img" src="/public/resource/qT7fictFknJ9.jpg">
                        </a>
                    </div>
                    <div class="col-md-9 col-lg-10 col-xl-10 col-7">
                        <div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="">Truyen tranh DragonBall</a>
                                    <p class="mb-5 pro-price">15.000d</p>
                                    <p class="buying">Đang chờ duyệt</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row items">
                    <div class="col-md-3 col-lg-2 col-xl-2 col-5">
                        <a href="" class="img-wrapper">
                            <img class="pro-img" src="/public/resource/qT7fictFknJ9.jpg">
                        </a>
                    </div>
                    <div class="col-md-9 col-lg-10 col-xl-10 col-7">
                        <div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="">Truyen tranh DragonBall</a>
                                    <p class="mb-5 pro-price">15.000d</p>
                                    <p class="buying">Đang chờ duyệt</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row items">
                    <div class="col-md-3 col-lg-2 col-xl-2 col-5">
                        <a href="" class="img-wrapper">
                            <img class="pro-img" src="/public/resource/qT7fictFknJ9.jpg">
                        </a>
                    </div>
                    <div class="col-md-9 col-lg-10 col-xl-10 col-7">
                        <div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="">Truyen tranh DragonBall</a>
                                    <p class="mb-5 pro-price">15.000d</p>
                                    <p class="bought">Đã duyệt</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row items">
            <div class="col-md-3 col-lg-2 col-xl-2 col-5">
                <a href="" class="img-wrapper">
                    <img class="pro-img" src="/public/resource/qT7fictFknJ9.jpg">
                </a>
            </div>
            <div class="col-md-9 col-lg-10 col-xl-10 col-7">
                <div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <a href="">Truyen tranh DragonBall</a>
                            <p class="mb-5 pro-price">15.000d</p>
                            <p class="cancel">Đã bị từ chối</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
            </div>
        </div>

    </div>
<script src="../script/kiemduyetscript.js"></script>
</body>

</html>