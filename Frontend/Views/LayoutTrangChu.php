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
        
        <!-- danh sach phong -->
        <div class="col-xs-12 content no-padding">
            <!-- cho thuê vip -->
            <div class="chothuevip">   
                <?php  
                    include "Controllers/HomeHotProductsController.php";
                    $obj= new HomeHotProductsController();
                    $obj->read();
                ?>
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
                                <a href="index.php?controller=products&action=locations&id=3"><img class="img" src="../Assets/Frontend/images/ho-hoan-kiem-1.png" alt=""></a>
                            </div>
                            <div class="tenquan"><i class="fa fa-map-marker" style="color: orange;" aria-hidden="true"></i> Hoàn Kiếm</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="img-container">
                            <div class="diadiem">
                                <a href="index.php?controller=products&action=locations&id=1"><img class="img" src="../Assets/Frontend/images/20200222151632-0d67_wm.jpg" alt=""></a>
                            </div>
                            <div class="tenquan"><i class="fa fa-map-marker" style="color: orange;" aria-hidden="true"></i> Cầu Giấy</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="img-container">
                            <div class="diadiem">
                                <a href="index.php?controller=products&action=locations&id=7"><img class="img" src="../Assets/Frontend/images/unnamed.jpg" alt=""></a>
                            </div>
                            <div class="tenquan"><i class="fa fa-map-marker" style="color: orange;" aria-hidden="true"></i> Thanh Xuân</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="img-container">
                            <div class="diadiem">
                                <a href="index.php?controller=products&action=locations&id=2"><img class="img" src="../Assets/Frontend/images/a16.jpg" alt=""></a>
                            </div>
                            <div class="tenquan"><i class="fa fa-map-marker" style="color: orange;" aria-hidden="true"></i> Đống Đa</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="img-container">
                            <div class="diadiem">
                                <a href="index.php?controller=products&action=locations&id=9"><img class="img" src="../Assets/Frontend/images/1541794002754279644.jpg" alt=""></a>
                            </div>
                            <div class="tenquan"><i class="fa fa-map-marker" style="color: orange;" aria-hidden="true"></i> Ba Đình</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="img-container">
                            <div class="diadiem">
                                <a href="index.php?controller=products&action=locations&id=10"><img class="img" src="../Assets/Frontend/images/tayho.jpg" alt=""></a>
                            </div>
                            <div class="tenquan"><i class="fa fa-map-marker" style="color: orange;" aria-hidden="true"></i> Tây Hồ</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- Tintucmoi -->
        <div class="tintucmoi chothuevip">
             <?php  
                    include "Controllers/HotNewsController.php";
                    $obj= new HotNewsController();
                    $obj->readHomeHotNews();
                ?>   
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

