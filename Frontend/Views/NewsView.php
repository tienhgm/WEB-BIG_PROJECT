<div class="main-title">
    <h4>Cho thuê phòng trọ, Tìm nhà trọ giá rẻ mới nhất 2020</h4>
    <p>Cho thuê phòng trọ, tìm nhà trọ giá rẻ, không chung chủ, an ninh và nhiều tiện nghi mới nhất tại Việt Nam. Đăng tin cho thuê phòng trọ nhanh chóng và hiệu quả cao.</p>
    <a class="home" href="home">Trang chủ</a>
    <i class="fa fa-caret-right" aria-hidden="true"></i>
    <a >Tin Tức</a>
</div><br>
        
<!-- main-content -->
<div class="main-content row">
    <div class="col-md-12 col-lg-8">
        <div class="danhsachtin">
            <div class="tintuc">
                <?php foreach($listRecord as $rows): ?>
                    <div class="phong tin d-flex">
                        <a href="news/detail/<?php echo Unicode::removeUnicode($rows->name); ?>/<?php echo $rows->id; ?>"><img src="../Assets/Upload/News/<?php echo $rows->photo; ?>" alt=""></a>
                        <div>
                            <a href="news/detail/<?php echo Unicode::removeUnicode($rows->name); ?>/<?php echo $rows->id; ?>"><h6><?php echo $rows->name; ?></h6></a>
                            <div class="tomtat"><?php echo $rows->description; ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <nav aria-label="...">
                <ul class="pagination" style="margin-top:10px;">
                    <?php for($i = 1; $i <= $numPage; $i++): ?>
                        <li class="page-item"><a style="color: #00afe8;" class="page-link" href="news/page/<?php echo $i;?>/<?php echo $i; ?>"><?php echo $i;?></a></li>
                    <?php endfor; ?>
                </ul>
            </nav>
        </div>
    </div>

    <div class="col-md-12 col-lg-4">
        <!-- tin noi bat -->
        <div class="timkiemtin">
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
