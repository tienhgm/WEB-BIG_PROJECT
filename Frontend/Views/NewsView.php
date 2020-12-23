<div class="danhsachtin col-md-12 col-lg-7">
    <div class="tintuc">
        <?php foreach($listRecord as $rows): ?>
            <div class="phong tin d-flex">
                <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id;?>"><img src="../Assets/Upload/News/<?php echo $rows->photo; ?>" alt=""></a>
                <div>
                    <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id;?>"><h6><?php echo $rows->name; ?></h6></a>
                    <div class="tomtat"><?php echo $rows->description; ?></div>
                    
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <nav aria-label="...">
        <ul class="pagination">
            <?php for($i = 1; $i <= $numPage; $i++): ?>
                <li class="page-item"><a style="color: #00afe8;" class="page-link" href="index.php?controller=news&action=read&id=<?php echo $i; ?>&p=<?php echo $i; ?>"><?php echo $i;?></a></li>
            <?php endfor; ?>
          </ul>
    </nav>
</div>
<div class="timkiemtin col-md-12 col-lg-4">
    <div class="card">
        <div class="card-header">
          Tin nổi bật
        </div>
        <div class="card-body">
            <div class="tinmoi d-flex">
                <a href="TrangChiTiet.html"><img src="images/phong.jpg" alt=""></a>
                <div>
                    <a href="TrangChiTiet.html"><h6>Nhà thuê TP.HCM giảm giá 2-3 triệu đồng/tháng</h6></a>
                </div>
            </div>
            <div class="tinmoi d-flex">
                <a href="TrangChiTiet.html"><img src="images/phong.jpg" alt=""></a>
                <div>
                    <a href="TrangChiTiet.html"><h6>Nhà thuê TP.HCM giảm giá 2-3 triệu đồng/tháng</h6></a>
                </div>
            </div>
            <div class="tinmoi d-flex">
                <a href="TrangChiTiet.html"><img src="images/phong.jpg" alt=""></a>
                <div>
                    <a href="TrangChiTiet.html"><h6>Nhà thuê TP.HCM giảm giá 2-3 triệu đồng/tháng</h6></a>
                </div>
            </div>
            <div class="tinmoi d-flex">
                <a href="TrangChiTiet.html"><img src="images/phong.jpg" alt=""></a>
                <div>
                    <a href="TrangChiTiet.html"><h6>Nhà thuê TP.HCM giảm giá 2-3 triệu đồng/tháng</h6></a>
                </div>
            </div>
            <div class="tinmoi d-flex">
                <a href="TrangChiTiet.html"><img src="images/phong.jpg" alt=""></a>
                <div>
                    <a href="TrangChiTiet.html"><h6>Nhà thuê TP.HCM giảm giá 2-3 triệu đồng/tháng</h6></a>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
          Có thể bạn quan tâm
        </div>
        <div class="card-body">
            <ul class="quantam">
                <li><a href="#">{Chia sẻ} Kinh doanh cho thuê phòng trọ có phải đóng thuế gì hay không?</a></li>
                <li><a href="#">Những điều cần lưu ý trong việc quản lý nhà trọ</a></li>
                <li><a href="#">Cẩn thận khi đi tìm thuê phòng trọ, nhà trọ với sinh viên mới</a></li>
                <li><a href="#">Những điều bạn nên biết để bảo đảm quyền lợi khi đi thuê phòng trọ</a></li>
                <li><a href="#">Lưu ý 3 chiêu trò lừa đảo cho thuê phòng trọ, nhà trọ giá rẻ</a></li>
            </ul>
        </div>
    </div>
</div>   