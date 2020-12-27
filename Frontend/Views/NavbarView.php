     <!-- header -->
    <header class=" container-fluid">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background: #003C71;">
            <a class="navbar-brand logo" href="home">NHÀ TRỌ TOT</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse m-auto" id="navbarSupportedContent">
                <ul class="Category navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="products/categories/phongtro/1">Phòng trọ</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="products/categories/chungcumini/2">Chung cư mini</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="products/categories/nhanguyencan/3">Nhà nguyên căn</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="products/categories/chungcunguyencan/4">Chung cư nguyên căn</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="news">Tin tức</a>
                    </li>
                </ul>
              
                <ul class="navbar-nav " style="margin-right: 110px;">
                    <li class="nav-item dropdown">
                      <?php if(isset($_SESSION["renterName"]) == false): ?>
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tài khoản
                      </a>
                      <?php else: ?>
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $_SESSION["renterName"];  ?>
                      </a>
                      <?php endif; ?>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="font-size: 14px;">
                        <?php if(isset($_SESSION["renterName"]) == false): ?>
                        <a class="dropdown-item" href="login"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp&nbspĐăng nhập</a>
                        <a class="dropdown-item" href="register"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp&nbspĐăng ký</a>
                        <?php else: ?>
                        <a class="dropdown-item" href="account/detail"><i class="fa fa-user" aria-hidden="true"></i>&nbsp&nbspThông tin tài khoản</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp&nbspCài đặt</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp&nbspĐăng xuất</a>
                        <?php endif; ?>
                      </div>
                    </li>
                </ul>
            </div>
           
        </nav>
        <!-- banner -->
        <div class="banner container-fluid">
            <?php  
                include "Controllers/SlideController.php";
                $obj= new SlideController();
                $obj->read();
            ?>
            <script>
                function smartSearch(){
                    //hien thi
                    document.getElementById("box-smart-search").setAttribute("style","display:block;");
                    //-----
                        //lay gia tri cua id=key
                        var key= document.getElementById("key").value;
                        //clear cac gia tri trong the ul truoc khi append
                        $('#box-smart-search ul').empty();
                    //----
                    //dua JQUERY vao trang cua minh
                    $.ajax({
                        url: "smartSearch.php?key="+key,
                        success: function( result ) {
                            
                            $('#box-smart-search ul').append(result);
                        }
                    });
                    //-----
                }
                function stopSmartSearch(){
                    // document.getElementById("box-smart-search").setAttribute("style","display:none;");
                }
            </script>
            <div class="box-search">
                <h2>Tìm kiếm phòng!</h2>
                <div class="search-content">
                    <form action="" id="search">
                        <div class="input-group mb-3">
                            <input type="text" autocomplete="off" onkeyup="smartSearch();" class="form-control" placeholder="Phòng bạn cần tìm" aria-label="Recipient's username" aria-describedby="button-addon2" id="key">
                            <div class="input-group-append">
                              <button class="btn btn-danger" type="button" id="button-addon2">Tìm</button>
                            </div>
                        </div>
                    </form>
                    <div id="box-smart-search">
                        <ul></ul>
                    </div>
                </div>
            </div>
            
        </div>
    </header>
    <!-- /header -->