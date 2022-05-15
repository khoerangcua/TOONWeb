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
    <link rel="stylesheet" href="/public/style/style.css">
    <link rel="stylesheet" href="/public/style/uploadstyle.css">
</head>

<body>
    <div class="container">
        <h3 class="heading-upload">Thông tin đăng bài</h3>
        <div class="row">
            <div class="col-3">
                <div class="pro-img">
                    <img class="pro-img" src="/public/resource/275415790_351273863444344_4713147307608182994_n.jpg">
                </div>
            </div>


            <div class="col-9 pro-info">
                <form class='' method='get' action='./'>
                    <div class="mb-2">
                        <p style="font-size: 14px; color:#C1C1C1; margin-bottom:7px ">Loại tin đăng</p>
                        <input class="form-check-input" type="radio" name="classify" id="classify1" value="option1" checked>
                        <label class="form-check-label ms-1" for="status1">
                            Mua
                        </label>
                        <input class="form-check-input ms-4" type="radio" name="classify" id="classify2" value="option1">
                        <label class="form-check-label ms-1" for="status2">
                            Bán
                        </label>
                    </div>


                    <div class='form-floating mb-3 mt-4'>
                        <input type='text' name='name' class='form-control' id='floatingInput_name' placeholder='Ten sach'>
                        <label for='floatingInput_name'>Tên sách</label>
                    </div>

                    <div class='form-floating mb-3'>
                        <input type='text' name='price' class='form-control' id='floatingInput_price' placeholder='Gia'>
                        <label for='floatingInput_price'>Giá</label>
                    </div>

                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>The loai</option>
                            <option value="1">The loai 1</option>
                            <option value="2">The loai 2</option>
                            <option value="3">The loai 3</option>
                        </select>
                        <label for="floatingSelect">Thể loại</label>
                    </div>

                    <div class='form-floating mb-3'>
                        <input type='number' name='condition' class='form-control' id='floatingInput_name' placeholder='Độ mới'>
                        <label for='floatingInput_name'>Độ mới</label>
                    </div>

                    <div class="form-floating mb-2">
                        <textarea class="pro-desc form-control" placeholder="Mo ta chi tiet" id="description" name="description"></textarea>
                        <label for="description">Mô tả chi tiết</label>
                    </div>

                    <div class="mb-5">
                        <label for="formFile" class="form-label">Ảnh sản phẩm</label>
                        <input class="form-control" type="file" id="formFile" placeholder="Chọn Ảnh">
                    </div>

                    <button type='submit' name='dangky' class='button btn-post mb-2'>Đăng bài</button>

                </form>
            </div>
        </div>
    </div>



</body>

</html>