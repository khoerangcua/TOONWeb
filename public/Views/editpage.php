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
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <!--my style-->
    <link rel="stylesheet" href="/public/style/style.css">
    <link rel="stylesheet" href="/public/style/editstyle.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="pro-img">
                    <img class="pro-img" src="/public/resource/qT7fictFknJ9.jpg">
                </div>
            </div>
            <div class="col-9 pro-info">
                <h3>Thong tin chi tiet</h3>
                <p style="font-size: 12px; color:#C1C1C1; margin-top:14px">Tinh trang</p>
                <form class='' method='get' action='./'>
                    <input class="form-check-input" type="radio" name="status" id="status1" value="option1" checked>
                    <label class="form-check-label" for="status1">
                        New
                    </label>
                    <input class="form-check-input" type="radio" name="status" id="status2" value="option1">
                    <label class="form-check-label" for="status2">
                        Used
                    </label>

                    <div class='form-floating mb-3 mt-4'>
                        <input type='text' name='price' class='form-control' id='floatingInput_price' placeholder='Gia'>
                        <label for='floatingInput_price'>Gia</label>
                    </div>
                    <div class='form-floating mb-3'>
                        <input type='text' name='name' class='form-control' id='floatingInput_name' placeholder='Ten sach'>
                        <label for='floatingInput_name'>Ten sach</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>The loai</option>
                            <option value="1">The loai 1</option>
                            <option value="2">The loai 2</option>
                            <option value="3">The loai 3</option>
                        </select>
                        <label for="floatingSelect">The loai</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="pro-desc form-control" placeholder="Mo ta chi tiet" id="description" name="description"></textarea>
                        <label for="description">Mo ta chi tiet</label>
                    </div>

                    <button type='submit' name='dangky' class='btn1 btn-post mt-5' style="width: 40%; ">Dang bai</button>

                </form>
            </div>
        </div>
    </div>



</body>

</html>