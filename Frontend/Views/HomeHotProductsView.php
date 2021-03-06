
<div class="chothuevip-title">
    <h4>CHO THUÊ VIP</h4>
    <a href="products/categories/phongtro/1">Xem thêm <i class="fa fa-angle-right" aria-hidden="true"></i></a>
</div>
<div class="chothuevip-main row">
    <?php foreach($hotProduct as $rows): ?>
        <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="card">
                <a href="products/detail/<?php echo Unicode::removeUnicode($rows->name); ?>/<?php echo $rows->id; ?>">
                    <img src="../Assets/Upload/TitleImg/<?php echo $rows->photo; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6><?php echo $rows->name; ?></h6>
                        <p class="area">
                            <i class="fa fa-area-chart" aria-hidden="true"></i> <?php echo $rows->area; ?> m2
                            
                        </p>
                        <p class="address">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> Đống Đa, Hà Nội
                        </p>
                        <p class="price">
                            <i class="fa fa-usd" aria-hidden="true"></i> <?php echo $rows->price; ?> vnđ/tháng
                        </p>
                    </div>
                </a>
            </div>
        </div>
    <?php endforeach; ?>
</div>

