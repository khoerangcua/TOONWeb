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
    <link rel="stylesheet" href="../style/thanhtoanstyle.css">

</head>

<body>
<div class='container'>
            <a href=''><img src='../resource/275415790_351273863444344_4713147307608182994_n.jpg' class='d-none d-lg-block icon-lg'></a>
            <br style='clear:both'> 
            <form method='GET' action=''>
                <div class='row'>
                    <div class='col-6'>
                        <div class='login-form row'>
                            <h4 class='order-heading'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-card-text' viewBox='0 0 16 16'>
                                    <path d='M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z' />
                                    <path d='M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z' />
                                </svg> Thông tin giao hàng</h4>
                            <div class='col-12'>
                                <div class='form-floating mb-2'>
                                    <input type='text' name='hoten' class='form-control' id='floatingInput' placeholder='Họ và tên'>
                                    <label for='floatingInput'>Họ và tên</label>
                                </div>
                            </div>
                            <div class='col-7'>
                                <div class='form-floating mb-2'>
                                    <input type='email' name='email' class='form-control' id='floatingPassword' placeholder='Email'>
                                    <label for='floatingPassword'>Email</label>
                                </div>
                            </div>
                            <div class='col-5'>
                                <div class='form-floating mb-2'>
                                    <input type='number' name='sodienthoai' class='form-control' id='floatingPassword' placeholder='Số điện thoại'>
                                    <label for='floatingPassword'>Số điện thoại</label>
                                </div>
                            </div>

                            <div class='col-12'>
                                <div class='form-floating mb-3'>
                                    <input type='text' name='diachi' class='form-control' id='floatingPassword' placeholder='Địa chỉ'>
                                    <label for='floatingPassword'>Địa chỉ</label>
                                </div>
                            </div>

                            <div class='col-12 mb-3'>
                                <h4 class='order-heading'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-truck' viewBox='0 0 16 16'>
                                        <path d='M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z' />
                                    </svg> Hình thức vận chuyển</h4>
                                <div class='tbl-purchase'>
                                    <div class='form-check purchase1'>
                                        <input class='form-check-input' id='giaohangtieuchuan' type='radio' name='hinhthucvanchuyen' value='tieuchuan' id=''>
                                        <label class='form-check-label' for='flexRadioDefault1'>
                                            Giao hàng tiêu chuẩn
                                        </label>
                                    </div>
                                    <div class='form-check purchase2'>
                                        <input class='form-check-input' id='giaohangnhanh' type='radio' name='hinhthucvanchuyen' value='nhanh' id='' checked>
                                        <label class='form-check-label' for='flexRadioDefault2'>
                                            Giao hàng nhanh
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class='col-12'>
                                <h4 class='order-heading'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-credit-card-2-back' viewBox='0 0 16 16'>
                                        <path d='M11 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1z' />
                                        <path d='M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm13 2v5H1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm-1 9H2a1 1 0 0 1-1-1v-1h14v1a1 1 0 0 1-1 1z' />
                                    </svg> Hình thức thanh toán</h4>

                                <div class='tbl-purchase mb-3'>
                                    <div class='form-check purchase1'>
                                        <input class='form-check-input' type='radio' name='hinhthucthanhtoan' value='tienmat' id='' checked>
                                        <label class='form-check-label' for='flexRadioDefault1'>
                                            Thanh toán khi nhận hàng (COD)
                                        </label>
                                    </div>
                                    <div class='form-check purchase2'>
                                        <input class='form-check-input' type='radio' name='hinhthucthanhtoan' value='chuyenkhoan' id=''>
                                        <label class='form-check-label' for='flexRadioDefault2'>
                                            Chuyển khoản qua ngân hàng
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class='col-lg-5 col-sm-12'>
                        <h3 class='order-heading'>Chi tiết về đơn hàng</h3>
                        <table class='product-table'>
                            <thead>
                                <tr>
                                    <th><span class='visually-hidden'>Ảnh sản phẩm</span></th>
                                    <th><span class='visually-hidden'>Tên sản phẩm</span</th>
                                    <th><span class='visually-hidden'>Giá</span</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                <tr class='product'>
                                    <td class='product-image'>
                                        <div class='product-thumbnail'>
                                            <div class='thumbnail-wrapper'>
                                                <img class='thumbnail-img' src='../resource/images/275225020_3180982448841648_1157249981496616579_n.png'>
                                            </div>
                                        </div>
                                    </td>
                                    <th class='product-desc'>
                                        <span class='product-name'>Truyen tranh</span>
                                    </th>
                                    <td class='product-price'>
                                        <span>2,000,150₫</span>
                                    </td>
                                </tr>
                                <tr class='product'>
                                    <td class='product-image'>
                                        <div class='product-thumbnail'>
                                            <div class='thumbnail-wrapper'>
                                                <img class='thumbnail-img' src='../resource/images/275225020_3180982448841648_1157249981496616579_n.png'>
                                            </div>
                                        </div>
                                    </td>
                                    <th class='product-desc'>
                                        <span class='product-name'>Truyen tranh</span>
                                    </th>
                                    <td class='product-price'>
                                        <span>2,000,150₫</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class='col-12 d-md-none d-sm-none d-lg-block'>
                            <h3 class='order-heading mt-2'>Tóm tắt đơn hàng</h3>
                            <div class='summary'>
                                <p>
                                    Tạm tính: <span id='tamtinh2' value='$tamtinh'>2,000,000₫</span>
                                </p>
                                <p>
                                    Phí vận chuyển: <span id='chiphivanchuyen_ui2' value='50000'>50,000₫</span>
                                </p>
                            </div>
                            <div class='total'>
                                <p>
                                    Tổng cộng: <span>2,000,000₫</span>
                                </p>
                            </div>
                        </div>

                        <div class='col-6' style="float: right;">
                            <button type='submit' class='button order-btn'>Đặt hàng</button>
                        </div>
                    </div>
                </div>
            </form>
	    </div>

</body>

</html>