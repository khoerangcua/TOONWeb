<?php
require_once("private/Controllers/HeaderController.php");
?>
    
    <header style="background-color:ffd154">
        <div class="navbar container">
            <div class="page-icon">
                <a href="?to=trangchu&xem=ban">
                    <img class="page-logo2" src="public/resource/Logo/logo.png">
                </a>
            
            </div>
            <div class="searchbar text-center">
                
            <img class="logo-txt1" src="public/resource/Logo/logotxt.png" >
                <form class="d-flex justify-content-center ">
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
					$headerCtrl = new HeaderCtrl();
					$headerCtrl->LoadTaiKhoanHeader();
				?>
            </div>
            


        </div>
    </header>