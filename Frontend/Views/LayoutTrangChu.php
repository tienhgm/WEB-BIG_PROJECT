<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://localhost/WEB-BIG_PROJECT/Frontend/">
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
             <!-- Cac dia diem cho thue noi tieng -->
            <div class="diadiemnoi chothuevip">
                <div class="chothuevip-title">
                    <h4>CÁC ĐỊA ĐIỂM CHO THUÊ PHỔ BIẾN</h4>
                </div>
                <div class="diadiemnoi-main">
                    <!-- row1 -->
                    <div class="row">
                        <div class="col-8">
                            <div class="diadiem">
                                <a href="products/locations/hoankiem/3">
                                    <img class="anhthap" src="../Assets/Frontend/images/hoankiem.jpg" alt="">
                                    <p class="tendiadiem">Hoàn Kiếm</p>
                                </a>
                            </div>
                            <div class="row" style="margin-top: 15px;">
                                <div class="col-6 diadiem" style="padding-right: 7px;">
                                    <a href="products/locations/badinh/9">
                                        <img class="anhthap" src="../Assets/Frontend/images/badinh.jpg" alt="">
                                        <p class="tendiadiem">Ba Đình</p>
                                    </a>
                                </div>
                                <div class="col-6 diadiem" style="padding-left: 7px;">
                                    <a href="products/locations/dongda/2">
                                        <img class="anhthap" src="../Assets/Frontend/images/Lotte-Hotel-Hanoi.jpg" alt="">
                                        <p class="tendiadiem">Đống Đa</p>
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-4 diadiem" style="padding-left: 0;">
                            <div>
                                <a href="products/locations/namtuliem/5">
                                    <img class="anhcao" src="../Assets/Frontend/images/namtuliem.jpg" alt="">
                                    <p class="tendiadiem">Nam Từ Liêm</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- row2 -->
                    <div class="row" style="margin-top: 15px;">
                        <div class="col-4 diadiem" style="padding-right: 7px;">
                            <div>
                                <a href="products/locations/thanhxuan/7">
                                    <img class="anhcao" src="../Assets/Frontend/images/thanhxuan.jpg" alt="">
                                    <p class="tendiadiem">Thanh Xuân</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-8" style="padding-left:7px;">
                            <div class="diadiem">
                                <a href="products/locations/tayho/10">
                                    <img class="anhthap" src="../Assets/Frontend/images/hotay.jpg" alt="">
                                    <p class="tendiadiem">Tây Hồ</p>
                                </a>
                            </div>
                            <div class="row" style="margin-top: 15px;">
                                <div class="col-6 diadiem" style="padding-right: 7px;">
                                    <a href="products/locations/caugiay/1">
                                        <img class="anhthap" src="../Assets/Frontend/images/caugiay.jpg" alt="">
                                        <p class="tendiadiem">Cầu Giấy</p>
                                    </a>
                                </div>
                                <div class="col-6 diadiem" style="padding-left: 7px;">
                                    <a href="products/locations/haibatrung/11">
                                        <img class="anhthap" src="../Assets/Frontend/images/haibatrung.jpg" alt="">
                                        <p class="tendiadiem">Hai Ba Trưng</p>
                                    </a>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            <!-- cho thuê vip -->
            <div class="chothuevip">   
                <?php  
                    include "Controllers/ProductsController.php";
                    $obj= new ProductsController();
                    $obj->readHomeHotProducts();
                ?>
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

