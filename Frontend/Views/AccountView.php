<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account View</title>
    <link rel="stylesheet" href="../Assets/Frontend/css/bootstrap.min.css">
</head>
<body>
	<br>	
    <div class="container">
    	<div class="row">
			<div class="col-md-12">
				<div><h2>Tài khoản của tôi</h2>
					<br>
					<div><span class="tieude">Họ tên:</span><span class="noidung"> <?php echo $renter_user->name; ?></span></div>
					<div ><span class="tieude"><i class="fa fa-phone" aria-hidden="true"></i> Điện thoại: </span><span class="noidung"><?php echo "1"; ?></span></div>
					<div ><span class="tieude"><i class="fa fa-home" aria-hidden="true"></i> Email: </span><span class="noidung"><?php echo $renter_user->email; ?></span></div>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12">
				<div><h3>Lịch sử đặt</h3>
					<br>
						<table class="table table-bordered table-hover">
							<tr style="text-align: center;">
								<th style="width: 150px;">Tên </th>
								<th style="width: 100px;">Ngày</th>
								<th style="width: 120px;">Giá trị</th>
								<th style="width: 100px;">Trạng thái</th>
								<th style="width: 60px;"></th>
							</tr>	
							<!-- <?php foreach($info as $rows): ?> -->
							<tr style="text-align: center;">
								<td><?php echo "1"; ?></td>
								<td>
									<!-- <?php 
			                            $date= Date_create($rows->date);
			                            echo Date_format($date, "d/m/Y");
			                        ?> -->date
								</td>

								<td><?php echo "1"; ?></td>
								<td>
									<?php 
										if("1"==1){echo "Đã vận chuyển";}
										else{ echo "Chưa vận chuyển";}
									 ?> 	
								</td>
								<td></td>
							</tr>
						<!-- <?php endforeach; ?> -->
					</table>
				</div>
				
			</div>
		</div>
    </div>
    <style>
    	.tieude{
    		font-weight: bold;
    		font-size: 18px;
    	}	
    	.noidung{font-size: 18px;}
    </style>
    <!-- JS -->
    <script src="../Assets/Frontend/js/jquery-3.5.1.min.js"></script>
   
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>