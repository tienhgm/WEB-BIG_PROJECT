<?php foreach($hotProduct as $rows): ?>
    <div class="col-xs-12 col-md-6 col-lg-4">
        <div class="card">
            <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>">
                <img src="../Assets/Frontend/images/<?php echo $rows->photo; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h6><?php echo $rows->name; ?></h6>
                    <p class="area">
                        <i class="fa fa-area-chart" aria-hidden="true"></i> <?php echo $rows->area; ?> m2
                        <span>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </span>
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