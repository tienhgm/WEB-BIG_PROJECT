<!-- main -->
<div class="main">
    <div class="blog-title">
        <a class="home" href="index.php">Trang chủ</a>
        <i class="fa fa-caret-right" aria-hidden="true"></i>
        <a class="home" href="index.php?controller=news&action=read">Tin tức</a>
        <i class="fa fa-caret-right" aria-hidden="true"></i>
        <span><?php echo $record->name; ?></span>
    </div>
    <div class="main-content row">
        <div class="col-md-12 col-lg-8">
            <div class="chitiettin">
                <h2><?php echo $record->name; ?></h2>
                <div class="tomtattin">
                    <?php echo $record->description; ?>
                </div>
                <div class="noidungtin">
                    <?php echo $record->detail_content; ?>
                </div>
            </div>
        </div>
		<div class="timkiemtin col-md-12 col-lg-4">
		        <!-- tin noi bat -->
		        <div class="card">
		            <div class="card-header">
		              Tin nổi bật
		            </div>
		            <div class="card-body">
		                <?php  
		                    include "Controllers/HotNewsController.php";
		                    $obj= new HotNewsController();
		                    $obj->readHotNews();
		                ?>
		            </div>
		        </div>
		</div>        
    </div>
</div>