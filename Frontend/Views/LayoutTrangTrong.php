<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://localhost/WEB-BTL/Frontend/">
    <link rel="stylesheet" href="../Assets/Frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/Frontend/icon_font/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Assets/Frontend/css/trangchu.css">
    <link rel="stylesheet" href="../Assets/Frontend/css/trangdanhmuc.css">
    <link rel="stylesheet" href="../Assets/Frontend/css/trangchitiet.css">
    <link rel="stylesheet" href="../Assets/Frontend/css/trangtintuc.css">
    <link rel="stylesheet" href="../Assets/Frontend/css/chitiettintuc.css">
    
    <title>NHATRO VIP</title>
</head>
<body>
    <!-- header -->
    <?php include "Views/NavbarVIew.php";?>
    <!--/header  -->

    <!-- main -->
    <div class="main">
        
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

    <!-- /main -->
    <!-- footer -->
    <?php include "Views/FooterView.php"; ?>
    <!-- /footer -->
    <script src="../Assets/Frontend/js/jquery-3.5.1.min.js"></script>
    <script src="../Assets/Frontend/js/bootstrap.bundle.min.js"></script>

</body>
</html>

