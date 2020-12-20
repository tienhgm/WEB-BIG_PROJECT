<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/Frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/Frontend/icon_font/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Assets/Frontend/css/trangchu.css">
    <link rel="stylesheet" href="../Assets/Frontend/css/trangdanhmuc.css">
    <link rel="stylesheet" href="../Assets/Frontend/css/trangchitiet.css">
    <title>NHATRO VIP</title>
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
        </div><br>
        
        <!-- main-content -->
        <div class="main-content row">
            <div class="danhsachphong col-md-12 col-lg-8">
                <?php 
                //load dong MVC
                    if(file_exists($fileController)){
                        include $fileController;
                        if(class_exists($classController)){
                            $obj= new $classController();
                            $obj->$action();
                        }
                    }
                ?>
            </div>
             <div class="timkiemphong col-md-12 col-lg-3">
                <div class="card">
                        <h5 class="card-header">Tìm kiếm</h5>
                        <div class="card-body khuvuc">
                            <h5 class="card-title">Theo địa điểm</h5>
                            <p class="card-text"><a href="index.php?controller=products&action=locations&id=3">Quận Hoàn Kiếm</a></p>
                            <p class="card-text"><a href="index.php?controller=products&action=locations&id=1">Quận Cầu Giấy</a></p>
                            <p class="card-text"><a href="index.php?controller=products&action=locations&id=2">Quận Đống Đa</a></p>
                            <p class="card-text"><a href="index.php?controller=products&action=locations&id=7">Quận Thanh Xuân</a></p>
                            <p class="card-text"><a href="index.php?controller=products&action=locations&id=10">Quận Tây Hồ</a></p>
                            <p class="card-text"><a href="index.php?controller=products&action=locations&id=4">Quận Hoàng Mai</a></p>
                            <p class="card-text"><a href="index.php?controller=products&action=locations&id=5">Quận Nam Từ Liêm</a></p>
                            <p class="card-text"><a href="index.php?controller=products&action=locations&id=6">Quận Bắc Từ Liêm</a></p>
                            <p class="card-text"><a href="index.php?controller=products&action=locations&id=9">Quận Ba Đình</a></p>
                            <p class="card-text"><a href="index.php?controller=products&action=locations&id=8">Quận Hà Đông</a></p>
                        </div>
                        <div class="card-body mucgia">
                            <h5 class="card-title">Theo mức giá</h5>
                            <div class="row">
                                <div class="col-6">
                                    <p class="card-text"><a href="#">Dưới 1 triệu</a></p>
                                    <p class="card-text"><a href="#">Từ 2 - 3  triệu</a></p>
                                    <p class="card-text"><a href="#">Từ 5 - 7 triệu</a></p>
                                    <p class="card-text"><a href="#">Từ 10 - 15 triệu</a></p>
                                </div>
                                <div class="col-6">
                                    <p class="card-text"><a href="#">Từ 1 - 2 triệu</a></p>
                                    <p class="card-text"><a href="#">Từ 3 - 5 triệu</a></p>
                                    <p class="card-text"><a href="#">Từ 7 - 10 triệu</a></p>
                                    <p class="card-text"><a href="#">Trên 15 triệu</a></p>
                                </div>      
                            </div>                  
                        </div>
                        <div class="card-body dientich">
                            <h5 class="card-title">Theo diện tích</h5>
                            <div class="row">
                                <div class="col-6">
                                    <p class="card-text"><a href="#">Dưới 15 m2</a></p>
                                    <p class="card-text"><a href="#">Từ 15 - 25 m2</a></p>
                                    <p class="card-text"><a href="#">Từ 50 - 70 m2</a></p>
                                    <p class="card-text"><a href="#">Từ 100 - 150 m2</a></p>
                                </div>
                                <div class="col-6">
                                    <p class="card-text"><a href="#">Từ 25 - 35 m2</a></p>
                                    <p class="card-text"><a href="#">Từ 35 - 50 m2</a></p>
                                    <p class="card-text"><a href="#">Từ 70 - 100 m2</a></p>
                                    <p class="card-text"><a href="#">Trên 150 m2</a></p>
                                </div>      
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

