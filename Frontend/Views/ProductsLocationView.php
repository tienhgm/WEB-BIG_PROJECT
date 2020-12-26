<div class="main-title">
    <h4>Cho thuê phòng trọ, Tìm nhà trọ giá rẻ mới nhất 2020</h4>
    <p>Cho thuê phòng trọ, tìm nhà trọ giá rẻ, không chung chủ, an ninh và nhiều tiện nghi mới nhất tại Việt Nam. Đăng tin cho thuê phòng trọ nhanh chóng và hiệu quả cao.</p>
    <a class="home" href="index.php">Trang chủ</a>
    <i class="fa fa-caret-right" aria-hidden="true"></i>
    <a ><?php echo $this->modelGetLocation($location_id); ?></a>
    
</div><br>
<div class="main-content row">     
    <div class="danhsachphong col-md-12 col-lg-8">
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
    		        <p class="dientich">Diện tích: <?php echo $rows->area; ?> m² <span></span> Khu vực: <?php echo $rows->locationname; ?>, Hà Nội</p>
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
                    <p class="card-text"><a href="index.php?controller=products&action=locations&id=12">Quận Long Biên</a></p>
                    <p class="card-text"><a href="index.php?controller=products&action=locations&id=11">Quận Hai Bà Trưng</a></p>
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
                        <p class="card-text"><a href="#">Dưới 20m²</a></p>
                        <p class="card-text"><a href="#">Từ 60 - 100m²</a></p>
                    </div>
                    <div class="col-6">
                        <p class="card-text"><a href="#">Từ 20 - 60m²</a></p>
                        <p class="card-text"><a href="#">Trên 100m²</a></p>
                    </div>
                </div>         
            </div>
          </div>
     </div> 
</div>