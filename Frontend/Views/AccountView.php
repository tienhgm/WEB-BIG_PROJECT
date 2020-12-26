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
				<div><h2>Tài khoản của tôi</h2>
					<br>
					<div><a class="badge badge-info" href="index.php?controller=account&action=update" style="font-size: 18px;">Sửa thông tin</a></div>
					<div><span class="tieude">Họ tên:</span><span class="noidung"> <?php echo $renter_user->name; ?></span></div>
					<div ><span class="tieude"><i class="fa fa-phone" aria-hidden="true"></i> Điện thoại: </span><span class="noidung"><?php echo $renter_user->phonenumber ?></span></div>
					<div ><span class="tieude"><i class="fa fa-home" aria-hidden="true"></i> Email: </span><span class="noidung"><?php echo $renter_user->email; ?></span></div><br>
					
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