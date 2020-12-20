<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/Frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/Frontend/icon_font/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Assets/Frontend/css/trangchu.css">

    
    <title>NHATRO VIP</title>
</head>
<body>
    <!-- header -->
    <?php include "Views/NavbarVIew.php";?>
    <!--/header  -->

    <!-- main -->
    <div class="main">
        <!-- dichvu -->
        <div class="dichvu">
            <div class="dichvu-main row">
                <div class="col-lg-4"><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;&nbsp;<span>Chọn lọc <b>chất lượng nhất</b></span></div>
                <div class="col-lg-4"><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;&nbsp;<span>Bảo đảm <b>giá tốt nhất</b></span></div>
                <div class="col-lg-4"><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;&nbsp;<span>Đội ngũ tư vấn <b>chi tiết và tận tình</b></span></div>
            </div>
        </div>
        <!-- danh sach phong -->
        <div class="col-xs-12 content no-padding">
            <!-- cho thuê vip -->
            <div class="chothuevip">
                <div class="chothuevip-title">
                    <h4>CHO THUÊ VIP</h4>
                    <a href="#">Xem tất cả <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
                <div class="chothuevip-main row">
                    <?php  
                        include "Controllers/HomeHotProductsController.php";
                        $obj= new HomeHotProductsController();
                        $obj->read();
                    ?>
                </div>
            </div>
            <!-- chothuemoi -->
            <div class="chothuevip chothuemoi">
                <div class="chothuevip-title">
                    <h4>CHO THUÊ MỚI NHẤT</h4>
                    <a href="#">Xem tất cả <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
                <div class="chothuevip-main row">   
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <div class="card">
                            <a href="#">
                                <img src="../Assets/Frontend/images/20200808181616-3ysp4.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6>Phòng studio đủ đồ chỉ việc xách vali đến ở. số 51a ngách 33 văn chương2</h6>
                                    <p class="area">
                                        <i class="fa fa-area-chart" aria-hidden="true"></i> 30 m2
                                        <span>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </span>
                                    </p>
                                    <p class="address">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> Đống Đa, Hà Nội
                                    </p>
                                    <p class="price">
                                        <i class="fa fa-usd" aria-hidden="true"></i> 4 Triệu/tháng
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <div class="card">
                            <a href="#">
                                <img src="../Assets/Frontend/images/20200808181616-3ysp4.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6>Phòng studio đủ đồ chỉ việc xách vali đến ở. số 51a ngách 33 văn chương2</h6>
                                    <p class="area">
                                        <i class="fa fa-area-chart" aria-hidden="true"></i> 30 m2
                                        <span>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </span>
                                    </p>
                                    <p class="address">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> Đống Đa, Hà Nội
                                    </p>
                                    <p class="price">
                                        <i class="fa fa-usd" aria-hidden="true"></i> 4 Triệu/tháng
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <div class="card">
                            <a href="#">
                                <img src="../Assets/Frontend/images/20200808181616-3ysp4.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6>Phòng studio đủ đồ chỉ việc xách vali đến ở. số 51a ngách 33 văn chương2</h6>
                                    <p class="area">
                                        <i class="fa fa-area-chart" aria-hidden="true"></i> 30 m2
                                        <span>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </span>
                                    </p>
                                    <p class="address">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> Đống Đa, Hà Nội
                                    </p>
                                    <p class="price">
                                        <i class="fa fa-usd" aria-hidden="true"></i> 4 Triệu/tháng
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <div class="card">
                            <a href="#">
                                <img src="../Assets/Frontend/images/20200808181616-3ysp4.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6>Phòng studio đủ đồ chỉ việc xách vali đến ở. số 51a ngách 33 văn chương2</h6>
                                    <p class="area">
                                        <i class="fa fa-area-chart" aria-hidden="true"></i> 30 m2
                                        <span>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </span>
                                    </p>
                                    <p class="address">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> Đống Đa, Hà Nội
                                    </p>
                                    <p class="price">
                                        <i class="fa fa-usd" aria-hidden="true"></i> 4 Triệu/tháng
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <div class="card">
                            <a href="#">
                                <img src="../Assets/Frontend/images/20200808181616-3ysp4.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6>Phòng studio đủ đồ chỉ việc xách vali đến ở. số 51a ngách 33 văn chương2</h6>
                                    <p class="area">
                                        <i class="fa fa-area-chart" aria-hidden="true"></i> 30 m2
                                        <span>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </span>
                                    </p>
                                    <p class="address">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> Đống Đa, Hà Nội
                                    </p>
                                    <p class="price">
                                        <i class="fa fa-usd" aria-hidden="true"></i> 4 Triệu/tháng
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <div class="card">
                            <a href="#">
                                <img src="../Assets/Frontend/images/20200808181616-3ysp4.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6>Phòng studio đủ đồ chỉ việc xách vali đến ở. số 51a ngách 33 văn chương2</h6>
                                    <p class="area">
                                        <i class="fa fa-area-chart" aria-hidden="true"></i> 30 m2
                                        <span>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </span>
                                    </p>
                                    <p class="address">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> Đống Đa, Hà Nội
                                    </p>
                                    <p class="price">
                                        <i class="fa fa-usd" aria-hidden="true"></i> 4 Triệu/tháng
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tintucmoi -->
            <div class="tintucmoi chothuevip">
                <div class="chothuevip-title">
                    <h4>TIN TỨC MỚI</h4>
                    <a href="#">Xem tất cả <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
                <div class="tintucmoi-main row">
                    <a href="#" class="col-lg-6 col-md-12">
                        <div class="tintucmoi-content d-flex">
                            <img src="../Assets/Frontend/images/chothuematbang01-1_1591697241.jpg" alt="">
                            <div>
                                <h5>Top 5 website đăng tin cho thuê mặt bằng hiệu quả nhất hiện nay</h5>
                                <p>Hiện nay, do ảnh hưởng của Virut Corona, nhiều mặt bằng đã bị trả lại hàng loạt do kinh doanh buôn bán ế ẩm. Để kích thích người thuê, nhiều chủ nhà đã giảm 10-30% tuy nhiên tình hình cho thuê vẫn chưa được cải thiện là mấy.</p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="col-lg-6 col-md-12">
                        <div class="tintucmoi-content d-flex">
                            <img src="../Assets/Frontend/images/chothuematbang01-1_1591697241.jpg" alt="">
                            <div>
                                <h5>Top 5 website đăng tin cho thuê mặt bằng hiệu quả nhất hiện nay</h5>
                                <p>Hiện nay, do ảnh hưởng của Virut Corona, nhiều mặt bằng đã bị trả lại hàng loạt do kinh doanh buôn bán ế ẩm. Để kích thích người thuê, nhiều chủ nhà đã giảm 10-30% tuy nhiên tình hình cho thuê vẫn chưa được cải thiện là mấy.</p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="col-lg-6 col-md-12">
                        <div class="tintucmoi-content d-flex">
                            <img src="../Assets/Frontend/images/chothuematbang01-1_1591697241.jpg" alt="">
                            <div>
                                <h5>Top 5 website đăng tin cho thuê mặt bằng hiệu quả nhất hiện nay</h5>
                                <p>Hiện nay, do ảnh hưởng của Virut Corona, nhiều mặt bằng đã bị trả lại hàng loạt do kinh doanh buôn bán ế ẩm. Để kích thích người thuê, nhiều chủ nhà đã giảm 10-30% tuy nhiên tình hình cho thuê vẫn chưa được cải thiện là mấy.</p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="col-lg-6 col-md-12">
                        <div class="tintucmoi-content d-flex">
                            <img src="../Assets/Frontend/images/chothuematbang01-1_1591697241.jpg" alt="">
                            <div>
                                <h5>Top 5 website đăng tin cho thuê mặt bằng hiệu quả nhất hiện nay</h5>
                                <p>Hiện nay, do ảnh hưởng của Virut Corona, nhiều mặt bằng đã bị trả lại hàng loạt do kinh doanh buôn bán ế ẩm. Để kích thích người thuê, nhiều chủ nhà đã giảm 10-30% tuy nhiên tình hình cho thuê vẫn chưa được cải thiện là mấy.</p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="col-lg-6 col-md-12">
                        <div class="tintucmoi-content d-flex">
                            <img src="../Assets/Frontend/images/chothuematbang01-1_1591697241.jpg" alt="">
                            <div>
                                <h5>Top 5 website đăng tin cho thuê mặt bằng hiệu quả nhất hiện nay</h5>
                                <p>Hiện nay, do ảnh hưởng của Virut Corona, nhiều mặt bằng đã bị trả lại hàng loạt do kinh doanh buôn bán ế ẩm. Để kích thích người thuê, nhiều chủ nhà đã giảm 10-30% tuy nhiên tình hình cho thuê vẫn chưa được cải thiện là mấy.</p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="col-lg-6 col-md-12">
                        <div class="tintucmoi-content d-flex">
                            <img src="../Assets/Frontend/images/chothuematbang01-1_1591697241.jpg" alt="">
                            <div>
                                <h5>Top 5 website đăng tin cho thuê mặt bằng hiệu quả nhất hiện nay</h5>
                                <p>Hiện nay, do ảnh hưởng của Virut Corona, nhiều mặt bằng đã bị trả lại hàng loạt do kinh doanh buôn bán ế ẩm. Để kích thích người thuê, nhiều chủ nhà đã giảm 10-30% tuy nhiên tình hình cho thuê vẫn chưa được cải thiện là mấy.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Cac dia diem cho thue noi tieng -->
            <div class="diadiemnoi chothuevip">
                <div class="chothuevip-title">
                    <h4>CÁC ĐỊA ĐIỂM CHO THUÊ PHỔ BIẾN</h4>
                </div>
                <div class="diadiemnoi-main row">
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="img-container">
                            <div class="diadiem">
                                <a href="#"><img class="img" src="../Assets/Frontend/images/ho-hoan-kiem-1.png" alt=""></a>
                            </div>
                            <div class="tenquan"><i class="fa fa-map-marker" style="color: orange;" aria-hidden="true"></i> Hoàn Kiếm</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="img-container">
                            <div class="diadiem">
                                <a href="#"><img class="img" src="../Assets/Frontend/images/20200222151632-0d67_wm.jpg" alt=""></a>
                            </div>
                            <div class="tenquan"><i class="fa fa-map-marker" style="color: orange;" aria-hidden="true"></i> Cầu Giấy</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="img-container">
                            <div class="diadiem">
                                <a href="#"><img class="img" src="../Assets/Frontend/images/unnamed.jpg" alt=""></a>
                            </div>
                            <div class="tenquan"><i class="fa fa-map-marker" style="color: orange;" aria-hidden="true"></i> Thanh Xuân</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="img-container">
                            <div class="diadiem">
                                <a href="#"><img class="img" src="../Assets/Frontend/images/a16.jpg" alt=""></a>
                            </div>
                            <div class="tenquan"><i class="fa fa-map-marker" style="color: orange;" aria-hidden="true"></i> Đống Đa</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="img-container">
                            <div class="diadiem">
                                <a href="#"><img class="img" src="../Assets/Frontend/images/1541794002754279644.jpg" alt=""></a>
                            </div>
                            <div class="tenquan"><i class="fa fa-map-marker" style="color: orange;" aria-hidden="true"></i> Hai Bà Trưng</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="img-container">
                            <div class="diadiem">
                                <a href="#"><img class="img" src="../Assets/Frontend/images/tayho.jpg" alt=""></a>
                            </div>
                            <div class="tenquan"><i class="fa fa-map-marker" style="color: orange;" aria-hidden="true"></i> Tây Hồ</div>
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

