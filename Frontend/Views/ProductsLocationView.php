<div class="main-title">
    <h4>Cho thuê phòng trọ, Tìm nhà trọ giá rẻ mới nhất 2020</h4>
    <p>Cho thuê phòng trọ, tìm nhà trọ giá rẻ, không chung chủ, an ninh và nhiều tiện nghi mới nhất tại Việt Nam. Đăng tin cho thuê phòng trọ nhanh chóng và hiệu quả cao.</p>
    <a class="home" href="index.php">Trang chủ</a>
    <i class="fa fa-caret-right" aria-hidden="true"></i>
    <a ><?php echo $this->modelGetLocation($location_id); ?></a>
    
</div><br>
<div class="main-content row">     
    <div class="col-md-12 col-lg-8">
    	<div class="danhsachphong">
			<br>
			<div class="container">
				<div class="col-lg-3 pull-right text-right" style="position: absolute;left: -5px;">
					<select class="form-control" onchange="location.href ='index.php?controller=products&action=locations&id=<?php echo $location_id?>&sort='+this.value;">
					<option value="0">Sắp xếp</option>
					<option value="priceAsc">Giá tăng dần</option>
					<option value="priceDesc">Giá giảm dần</option>
					<option value="nameAsc">Sắp xếp A-Z</option>
					<option value="nameDesc">Sắp xếp Z-A</option>
					</select>
				</div>
			</div>
			<br><br>
			<?php foreach($listRecordLocation as $rows): ?>
				<div class="phong d-flex">
					<img style="height: 143px;" src="../Assets/Upload/TitleImg/<?php echo $rows->photo ?>" alt="">
					<div>
						<h6><a href="#"><?php echo $rows->name; ?></a></h6>
						<p class="tomtat"><!-- <?php echo $rows->description; ?> --></p>
						<p class="gia">Giá: <?php echo $rows->price; ?> vnđ</p>
						<br>
						<p class="dientich">Diện tích: <?php echo $rows->area; ?> m² <span></span> Khu vực: <?php echo $this->modelGetLocation($location_id); ?>, Hà Nội</p>
					</div>

				</div>
			<?php endforeach; ?>
				<nav aria-label="...">
					<ul class="pagination">
						<?php for($i = 1; $i <= $numPage; $i++): ?>
							<li class="page-item"><a style="color: #00afe8;" class="page-link" href="index.php?controller=products&action=locations&id=<?php echo $category_id; ?>&p=<?php echo $i; ?>"><?php echo $i;?></a></li>
						<?php endfor; ?>
					</ul>
				</nav>
		</div>
    </div>
    <?php include "Views/RightContentLayoutTrangTrong.php"; ?> 
</div>