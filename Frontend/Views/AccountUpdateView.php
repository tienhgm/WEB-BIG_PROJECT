<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account View</title>
    <link rel="stylesheet" href="../../Asset/Frontend/css/bootstrap.min.css">
</head>
<body>
    <div class="main-title">
        <a class="home" href="index.php">Trang chủ</a>
        <i class="fa fa-caret-right" aria-hidden="true"></i>
        <a >Tài khoản của tôi</a>
    </div><br>  
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div><h2>Sửa thông tin</h2>
                    <div style="margin-bottom:5px;">
                        <input onclick="history.go(-1);" type="button" value="Back" class="btn btn-danger">
                    </div>
                    <form method="post" action="index.php?controller=account&action=updatePost" style="margin: 25px 0;">
                        <!-- rows -->
                        <div class="row" style="margin-top:5px;">
                            <div class="col-md-2" style="margin-left: 3%">Email</div>
                            <div class="col-md-9">
                                <input type="email" value="<?php echo isset($record->email)?$record->email:""; ?>" name="email" class="form-control" disabled>
                            </div>
                        </div>
                        <!-- end rows -->
                        <!-- rows -->
                        <div class="row" style="margin-top:5px;">
                            <div class="col-md-2" style="margin-left: 3%">Name</div>
                            <div class="col-md-9">
                                <input type="text" value="<?php echo isset($record->name)?$record->name:""; ?>" name="name" class="form-control" required>
                            </div>
                        </div>
                        <!-- end rows -->
                        
                        <!-- rows -->
                        <div class="row" style="margin-top:5px;">
                            <div class="col-md-2" style="margin-left: 3%">Password</div>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="password" <?php if(isset($record->email)): ?> placeholder="Không đổi password thì không nhập thông tin vào ô textbox này" <?php else: ?> required <?php endif; ?>>
                            </div>
                        </div>
                        <!-- end rows -->
                         <!-- rows -->
                        <div class="row" style="margin-top:5px;">
                            <div class="col-md-2" style="margin-left: 3%" style="margin-left: 3%">Phone number</div>
                            <div class="col-md-9">
                                <input type="number" value="<?php echo isset($record->phonenumber)?$record->phonenumber:""; ?>" name="phonenumber" class="form-control" required>
                            </div>
                        </div>
                        <!-- end rows -->
                        <!-- rows -->
                        <div class="row" style="margin-top:20px;">
                            <div class="col-md-2"></div>
                            <div class="col-md-10" style="margin-left: 35px">
                                <input type="submit" value="Process" class="btn btn-primary">
                            </div>
                        </div>
                        <!-- end rows -->
                    </form>
                </div>
            </div>
        </div>
        
    </div>
    <style>
        .tieude{
            font-weight: bold;
            font-size: 20px;
        }   
        .noidung{font-size: 20px;}
    </style>
    <!-- JS -->
    <script src="../../Asset/Frontend/js/jquery-3.5.1.min.js"></script>
   
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>