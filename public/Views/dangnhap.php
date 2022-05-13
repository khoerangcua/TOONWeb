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
    <link rel="stylesheet" href="../style/dangnhap.css">

</head>

<body>
<div class='container'>
            <div class='row vh-100 justify-content-center align-items-center'>
                <div class='col-sm-9 col-md-9 col-lg-9 shadow login-ui'>
                    <div class="row">
                        <div class="col-5 text-center align-items-center">
                         

                            <a href=""><img class="logo-img" src="../images/275225020_3180982448841648_1157249981496616579_n.png"></a>
                            </div>
                        
                        <div class="col-7">
                            <div class='row login-header'>
                                <h4>đăng nhập</h4>
                            </div>
                            <form method='post' class='login-form' action=''>
                                <input type='hidden' name='dangnhap' value='true'>
                                <div class='form-floating mb-4'>
                                    <input type='text' name='tendangnhap' class='form-control' id='floatingInput' placeholder='Tên đăng nhập'>
                                    <label for='floatingInput'>Tên đăng nhập</label>
                                </div>
                                <div class='form-floating mb-2'>
                                    <input type='password' name='matkhau' class='form-control' id='floatingPassword' placeholder='Mật khẩu'>
                                    <label for='floatingPassword'>Mật khẩu</label>
                                </div>
                                <div class='mb-4 form-check'>
                                    <input type='checkbox' name='remember' class='form-check-input' id='exampleCheck1'>
                                    <label class='form-check-label' for='exampleCheck1'>Ghi nhớ đăng nhập</label>
                                    <a href='' class='forgot'>Quên mật khẩu?</a>
                                </div>
                                <button type='submit' class='login-btn mb-4'>Đăng nhập</button>
                                <p class='login-signup'>Chưa có tài khoản? <a href=''>Đăng ký tại đây</a></p>
                            </form>
                        </div> 
                    </div>
                   
                    
                </div>
            </div>
	    </div>

</body>

</html>