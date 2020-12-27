<div class="col-md-12 col-lg-4">
    <div class="timkiemphong">
        <div class="card">
            <h5 class="card-header">Tìm kiếm</h5>
            <div class="card-body khuvuc">
                <h5 class="card-title">Theo địa điểm</h5>
                <p class="card-text"><a href="products/locations/hoankiem/3">Quận Hoàn Kiếm</a></p>
                <p class="card-text"><a href="products/locations/caugiay/1">Quận Cầu Giấy</a></p>
                <p class="card-text"><a href="products/locations/dongda/2">Quận Đống Đa</a></p>
                <p class="card-text"><a href="products/locations/thanhxuan/7">Quận Thanh Xuân</a></p>
                <p class="card-text"><a href="products/locations/tayho/10">Quận Tây Hồ</a></p>
                <p class="card-text"><a href="products/locations/hoangmai/4">Quận Hoàng Mai</a></p>
                <p class="card-text"><a href="products/locations/namtuliem/5">Quận Nam Từ Liêm</a></p>
                <p class="card-text"><a href="products/locations/bactuliem/6">Quận Bắc Từ Liêm</a></p>
                <p class="card-text"><a href="products/locations/badinh/9">Quận Ba Đình</a></p>
                <p class="card-text"><a href="products/locations/hadong/8">Quận Hà Đông</a></p>
                <p class="card-text"><a href="products/locations/longbien/12">Quận Long Biên</a></p>
                <p class="card-text"><a href="products/locations/haibatrung/11">Quận Hai Bà Trưng</a></p>
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
                        <input type="button" class="btn btn-primary active btn-md btn-block" value="Tìm" onclick="location.href = 'index.php?controller=products&action=searchPrice&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" />
                    </li>
                </ul>           
            </div>
        </div>
    </div>
</div> 