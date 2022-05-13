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
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/dangki.css">

</head>

<body>
    <div class='container'>
        <div class='row vh-100 justify-content-center align-items-center'>
            <div class='col-sm-8 col-md-8 col-lg-6 shadow dky-ui'>
                <a class='row justify-content-center' href='./?to=trangchu'><img src='../images/275225020_3180982448841648_1157249981496616579_n.png' class='icon'></a>
                <div class='row dky-header'>
                    <h3>đăng ký tài khoản</h3>
                </div>


                <form class='dky-form' method='get' action='./'>
                    <input type='hidden' name='action' value='dangky'>
                    <input type='hidden' name='to' value='signup'>
                    <div class='row'>
                        <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6'>
                            <!--Họ-->
                            <div class='form-floating mb-3'>
                                <input type='text' class='form-control' name='ho' id='floatingInput' placeholder='họ'>
                                <label for='floatingInput'>Họ</label>
                            </div>
                        </div>
                        <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6'>
                            <!--Tên-->
                            <div class='form-floating mb-3'>
                                <input type='text' class='form-control' name='ten' id='floatingInput_Ten' placeholder='tên'>
                                <label for='floatingInput_Ten'>Tên</label>
                            </div>
                        </div>
                    </div>

                    <div class='form-floating mb-3'>
                        <input type='text' name='tendangnhap' class='form-control' id='floatingInput_Username' placeholder='Tên tài khoản'>
                        <label for='floatingInput_Username'>Tên đăng nhập</label>
                    </div>

                    <div class='row'>
                        <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6'>
                            <div class='form-floating mb-3'>
                                <input type='password' name='matkhau' class='form-control' id='floatingInput_Password' placeholder='Mật khẩu'>
                                <label for='floatingInput_Password'>Mật khẩu</label>
                            </div>
                        </div>
                        <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6'>
                            <div class='form-floating mb-3'>
                                <input type='password' name='nhaplaimatkhau' class='form-control' id='floatingInput_CPassword' placeholder='Nhập lại mật khẩu'>
                                <label for='floatingInput_CPassword'>Nhập lại mật khẩu</label>
                            </div>
                        </div>
                    </div>
                    <div class='form-floating mb-3'>
                        <input type='tel' name='sodienthoai' class='form-control' id='floatingInput_Pnumber' placeholder='Số điện thoại'>
                        <label for='floatingInput_Pnumber'>Số điện thoại</label>
                    </div>
                    <div class='form-floating mb-2'>
                        <input type='email' name='email' class='form-control' id='floatingInput_Email' placeholder='Email'>
                        <label for='floatingInput_Email'>Email</label>
                    </div>
                    <div class='form-check mb-3'>
                        <input class='form-check-input' name='chapnhan' type='checkbox' value='co' id='flexCheckDefault'>
                        <label class='form-check-label' for='flexCheckDefault'>
                            Chấp nhận với <span><a href=''>Điều khoản</a></span>
                        </label>
                    </div>
                    <button type='submit' name='dangky' class='dky-btn mb-5'>Đăng ký</button>
                    <p class='dky-login'>Bạn đã có tài khoản? <a href='./?to=login'>Đăng nhập</a></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>