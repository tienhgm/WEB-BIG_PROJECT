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
        <div class="card-body dientich">
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
        <div class="card-body mucgia">
            <h5 class="card-title">Theo mức giá</h5>
            <ul class="list-group" style="border:0px;">
                <li class="list-group-item" style="border:0px; font-weight: bold;">Giá từ &nbsp;&nbsp;
                    <input type="number" min="0" value="0" id="fromPrice" class="form-control" />
                </li>
                <li class="list-group-item" style="border:0px;font-weight: bold;">Đến &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="number" min="0" value="0" id="toPrice" class="form-control"/>
                </li>
                <li class="list-group-item" style="border:0px; text-align:center">
                    <input type="button" class="btn btn-secondary btn-md btn-block" value="Tìm" onclick="location.href = 'index.php?controller=products&action=searchPrice&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" />
                </li>
            </ul>           
        </div>
    </div>
</div> 