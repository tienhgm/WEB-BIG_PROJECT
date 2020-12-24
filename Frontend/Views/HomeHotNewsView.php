<div class="chothuevip-title">
    <h4>TIN TỨC NỔI BẬT</h4>
    <a href="index.php?controller=news&action=read">Xem thêm <i class="fa fa-angle-right" aria-hidden="true"></i></a>
</div>
<div class="tintucmoi-main row">
	<?php foreach ($hotNews as $rows):?>
	    <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id;?>" class="col-lg-6 col-md-12">
	        <div class="tintucmoi-content d-flex">
	            <img src="../Assets/Upload/News/<?php echo $rows->photo; ?>" alt="">
	            <div>
	                <h5 style="margin-bottom: 15px;"><?php echo $rows->name; ?></h5>
	                <div><h5><?php echo $rows->description; ?></h5></div>
	            </div>
	        </div>
	    </a>
	<?php endforeach; ?>
</div>