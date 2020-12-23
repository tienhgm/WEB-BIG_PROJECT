     <!-- header -->
    <header class=" container-fluid">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background: #003C71;">
            <a class="navbar-brand logo" href="index.php">NHÀ TRỌ TOT</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse m-auto" id="navbarSupportedContent">
                <ul class="Category navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php?controller=products&action=categories&id=1">Phòng trọ</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php?controller=products&action=categories&id=2">Chung cư mini</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php?controller=products&action=categories&id=3">Nhà nguyên căn</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php?controller=products&action=categories&id=4">Chung cư nguyên căn</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php?controller=news&action=read">Tin tức</a>
                    </li>
                </ul>
              
                <ul class="navbar-nav " style="margin-right: 115px;">
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
                        <a class="dropdown-item" href="index.php?controller=account&action=login"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp&nbspĐăng nhập</a>
                        <a class="dropdown-item" href="index.php?controller=account&action=register"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp&nbspĐăng ký</a>
                        <?php else: ?>
                        <a class="dropdown-item" href="#"><i class="fa fa-user" aria-hidden="true"></i>&nbsp&nbspThông tin tài khoản</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp&nbspCài đặt</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php?controller=account&action=logout"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp&nbspĐăng xuất</a>
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
           
            <div class="search">
                <h2>Tìm kiếm phòng!</h2>
                <div class="search-content">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Phòng bạn cần tìm" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-danger" type="button" id="button-addon2">Tìm</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </header>
    <!-- /header -->