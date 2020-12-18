<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/Frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/Frontend/icon_font/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Assets/Frontend/css/trangchu.css">
      <link rel="stylesheet" href="../Assets/Frontend/css/trangdanhmuc.css">
    
    <title>Trang chủ</title>
</head>
<body>
    <!-- header -->
    <?php include "Views/NavbarVIew.php";?>
    <!--/header  -->

    <!-- main -->
    <div class="main">
        <div class="main-title">
            <a class="home" href="TrangChu.html">Trang chủ</a>
            <i class="fa fa-caret-right" aria-hidden="true"></i>
            <a >Phòng trọ</a>
            <h4>Cho thuê phòng trọ, Tìm nhà trọ giá rẻ mới nhất 2020</h4>
            <p>Cho thuê phòng trọ, tìm nhà trọ giá rẻ, không chung chủ, an ninh và nhiều tiện nghi mới nhất tại Việt Nam. Đăng tin cho thuê phòng trọ nhanh chóng và hiệu quả cao.</p>
        </div>
        <div class="container">
            <div class="col-lg-3 pull-right text-right">
                <select class="form-control" onchange="location.href ='index.php?controller=products&action=categories&id=<?php echo $category_id?>&sort='+this.value;">
                  <option value="0">Sắp xếp</option>
                  <option value="priceAsc">Giá tăng dần</option>
                  <option value="priceDesc">Giá giảm dần</option>
                  <option value="nameAsc">Sắp xếp A-Z</option>
                  <option value="nameDesc">Sắp xếp Z-A</option>
                </select>
            </div>
        </div>
        <br>
        <!-- main-content -->
        <div class="main-content row">
            <div class="danhsachphong col-md-12 col-lg-8">
                <div class="phong d-flex">
                    <img src="../Assets/Frontend/images/phong.jpg" alt="">
                    <div>
                        <h6>Nhà, phòng trọ khép kín 25m2 mới xây khép kín hoàn kiếm hà nội</h6>
                        <p class="tomtat">Cho thuê phòng trọ mới xây dựng khép kín chính chủ rộng đẹp thoáng mát ở khu vực hoàn kiếm hà nội. Phù hợp cho người làm văn phòng và hộ gia đình ở Địa chỉ : Số nhà 44B Phố</p>
                        <p class="gia">3.5 Triệu/tháng</p>
                        <p class="dientich">Diện tích: 25 m² &nbsp;&nbsp; Khu vực: Hoàn Kiếm, Hà Nội</p>
                    </div>
                </div>
                <div class="phong d-flex">
                    <img src="../Assets/Frontend/images/phong.jpg" alt="">
                    <div>
                        <h6>Nhà, phòng trọ khép kín 25m2 mới xây khép kín hoàn kiếm hà nội</h6>
                        <p class="tomtat">Cho thuê phòng trọ mới xây dựng khép kín chính chủ rộng đẹp thoáng mát ở khu vực hoàn kiếm hà nội. Phù hợp cho người làm văn phòng và hộ gia đình ở Địa chỉ : Số nhà 44B Phố</p>
                        <p class="gia">3.5 Triệu/tháng</p>
                        <p class="dientich">Diện tích: 25 m² &nbsp;&nbsp; Khu vực: Hoàn Kiếm, Hà Nội</p>
                    </div>
                </div>
                <div class="phong d-flex">
                    <img src="../Assets/Frontend/images/phong.jpg" alt="">
                    <div>
                        <h6>Nhà, phòng trọ khép kín 25m2 mới xây khép kín hoàn kiếm hà nội</h6>
                        <p class="tomtat">Cho thuê phòng trọ mới xây dựng khép kín chính chủ rộng đẹp thoáng mát ở khu vực hoàn kiếm hà nội. Phù hợp cho người làm văn phòng và hộ gia đình ở Địa chỉ : Số nhà 44B Phố</p>
                        <p class="gia">3.5 Triệu/tháng</p>
                        <p class="dientich">Diện tích: 25 m² &nbsp;&nbsp; Khu vực: Hoàn Kiếm, Hà Nội</p>
                    </div>
                </div>
                <div class="phong d-flex">
                    <img src="../Assets/Frontend/images/phong.jpg" alt="">
                    <div>
                        <h6>Nhà, phòng trọ khép kín 25m2 mới xây khép kín hoàn kiếm hà nội</h6>
                        <p class="tomtat">Cho thuê phòng trọ mới xây dựng khép kín chính chủ rộng đẹp thoáng mát ở khu vực hoàn kiếm hà nội. Phù hợp cho người làm văn phòng và hộ gia đình ở Địa chỉ : Số nhà 44B Phố</p>
                        <p class="gia">3.5 Triệu/tháng</p>
                        <p class="dientich">Diện tích: 25 m² &nbsp;&nbsp; Khu vực: Hoàn Kiếm, Hà Nội</p>
                    </div>
                </div>
                <div class="phong d-flex">
                    <img src="../Assets/Frontend/images/phong.jpg" alt="">
                    <div>
                        <h6>Nhà, phòng trọ khép kín 25m2 mới xây khép kín hoàn kiếm hà nội</h6>
                        <p class="tomtat">Cho thuê phòng trọ mới xây dựng khép kín chính chủ rộng đẹp thoáng mát ở khu vực hoàn kiếm hà nội. Phù hợp cho người làm văn phòng và hộ gia đình ở Địa chỉ : Số nhà 44B Phố</p>
                        <p class="gia">3.5 Triệu/tháng</p>
                        <p class="dientich">Diện tích: 25 m² &nbsp;&nbsp; Khu vực: Hoàn Kiếm, Hà Nội</p>
                    </div>
                </div>
                <div class="phong d-flex">
                    <img src="../Assets/Frontend/images/phong.jpg" alt="">
                    <div>
                        <h6>Nhà, phòng trọ khép kín 25m2 mới xây khép kín hoàn kiếm hà nội</h6>
                        <p class="tomtat">Cho thuê phòng trọ mới xây dựng khép kín chính chủ rộng đẹp thoáng mát ở khu vực hoàn kiếm hà nội. Phù hợp cho người làm văn phòng và hộ gia đình ở Địa chỉ : Số nhà 44B Phố</p>
                        <p class="gia">3.5 Triệu/tháng</p>
                        <p class="dientich">Diện tích: 25 m² &nbsp;&nbsp; Khu vực: Hoàn Kiếm, Hà Nội</p>
                    </div>
                </div>
                <nav aria-label="...">
                    <ul class="pagination">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                      </li>
                    </ul>
                  </nav>
            </div>
            <div class="timkiemphong col-md-12 col-lg-3">
                <div class="card">
                        <h5 class="card-header bg-info">Tìm kiếm</h5>
                        <div class="card-body khuvuc">
                            <h5 class="card-title">Theo địa điểm</h5>
                            <p class="card-text"><a href="#">Hoàn Kiếm</a></p>
                            <p class="card-text"><a href="#">Hoàn Kiếm</a></p>
                            <p class="card-text"><a href="#">Hoàn Kiếm</a></p>
                        </div>
                        <div class="card-body mucgia">
                            <h5 class="card-title">Theo mức giá</h5>
                            <p class="card-text"><a href="#">Hoàn Kiếm</a></p>
                            <p class="card-text"><a href="#">Hoàn Kiếm</a></p>
                            <p class="card-text"><a href="#">Hoàn Kiếm</a></p>
                        </div>
                        <div class="card-body dientich">
                            <h5 class="card-title">Theo diện tích</h5>
                            <p class="card-text"><a href="#">Hoàn Kiếm</a></p>
                            <p class="card-text"><a href="#">Hoàn Kiếm</a></p>
                            <p class="card-text"><a href="#">Hoàn Kiếm</a></p>
                        </div>
                  </div>
             </div>     
            </div>
        </div>
    </div>

    <!-- /main -->
    <!-- footer -->
    <?php include "FooterView.php"; ?>
    <!-- /footer -->
    <script src="../Assets/Frontend/js/jquery-3.5.1.min.js"></script>
    <script src="../Assets/Frontend/js/bootstrap.bundle.min.js"></script>
    
    <script>
        $(document).ready(function(){
            $(".img").mousemove(function(event){
                var mousex = event.pageX - $(this).offset().left;
                var mousey = event.pageY - $(this).offset().top;
                var imgx = (mousex - 300) / 40;
                var imgy = (mousey - 200) / 40;
                $(this).css("transform", "translate(" + imgx + "px," + imgy + "px)");
            });
            $(".img").mouseout(function(){
                $(this).css("transform", "translate(0px,0px)");
            });
        });
    </script>
</body>
</html>

