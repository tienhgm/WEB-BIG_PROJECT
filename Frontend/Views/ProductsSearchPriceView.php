<div class="main-title">
    <h4>Cho thuê phòng trọ, Tìm nhà trọ giá rẻ mới nhất 2020</h4>
    <p>Cho thuê phòng trọ, tìm nhà trọ giá rẻ, không chung chủ, an ninh và nhiều tiện nghi mới nhất tại Việt Nam. Đăng tin cho thuê phòng trọ nhanh chóng và hiệu quả cao.</p>
    <a class="home" href="home">Trang chủ</a>
    <i class="fa fa-caret-right" aria-hidden="true"></i>
    <a >Tìm theo mức giá</a>
</div><br>
        
<!-- main-content -->
<div class="main-content row">
    <div class="danhsachphong  col-md-12 col-lg-8">
        <br>
        <?php foreach($listRecordPrice as $rows): ?>
            <div class="phong d-flex">
                <img style="height: 143px;" src="../Assets/Upload/TitleImg/<?php echo $rows->photo ?>" alt="">
                <div>
                    <h6><a href="products/detail/<?php echo Unicode::removeUnicode($rows->name);?>/<?php echo $rows->id;?>"><?php echo $rows->name; ?></a></h6>
                    <p class="tomtat"><!-- <?php echo $rows->description; ?> --></p>
                    <p class="gia">Giá: <?php echo $rows->price; ?> vnđ</p>
                    <br>
                    <p class="dientich">Diện tích: <?php echo $rows->area; ?> m² <span></span> Khu vực: <?php echo $this->modelGetLocation($rows->location_id); ?>, Hà Nội</p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <?php include "Views/RightContentLayoutTrangTrong.php"; ?>
</div>
