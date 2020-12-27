<div class="blog-title">
    <a class="home" href="index.php">Trang chủ</a>
    <i class="fa fa-caret-right" aria-hidden="true"></i>
    <a><?php echo $this->modelGetNameProducts($id); ?></a>
   
</div>
<div class="main-content row">
    <div class="col-md-12 col-lg-8">
        <!-- chitietphong -->
        <div class="chitietphong">
            <h5><?php echo $record->name; ?></h5>
            <div class="thongtinchung">
                <table class="table table-bordered">
                    <tbody>
                         <tr>
                            <th scope="row">Chuyên mục</th>
                            <td colspan="3"><a><?php echo $this->modelGetCategory($record->category_id); ?></a></td>
                            
                        </tr>
                        <tr>
                            <th scope="row">Địa chỉ</th>
                            <td colspan="3"><?php echo $this->modelGetLocation($record->location_id); ?></td>
                        </tr>
                       
                        <tr>
                            <th scope="row">Giá cho thuê</th>
                            <td style="color: #f3051b;"><?php echo number_format($record->price); ?> vnđ/tháng</td>
                            <th scope="row">Diện tích</th>
                            <td style="color: #f3051b;"><?php echo number_format($record->area); ?> m2</td>
                        </tr>
                        <tr>
                            <th scope="row">Giá điện nước</th>
                            <td><?php echo $record->gia_dien_nuoc; ?></td>
                            <th scope="row">Chung chủ</th>
                            <td>
                                <?php 
                                    if($record->chung_chu==1){echo "Có";}
                                    else{echo "Không";} 
                                ?>
                                
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Phòng tắm</th>
                            <td>khép kín, có nóng lạnh</td>
                            <th scope="row">Ban công</th>
                            <td>
                                <?php 
                                    if($record->ban_cong==1){echo "Có";}
                                    else{echo "Không";} 
                                ?>    
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Phòng bếp</th>
                            <td><?php echo $record->phong_bep; ?></td>
                            <th scope="row">Điều hòa</th>
                            <td>
                                <?php 
                                    if($record->dieu_hoa==1){echo "Có";}
                                    else{echo "Không";} 
                                ?>    
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Liên hệ</th>
                            <td><?php echo $this->modelGetNameOwner($record->owner_id); ?></td>
                            <th scope="row">Ngày đăng bài</th>
                            <td>
                                <?php
                                    $date =date_create($record->date);
                                    echo date_format($date,"d/m/Y"); 
                                ?> 
                             </td>
                        </tr>
                        <tr>
                            <th scope="row">Điện thoại</th>
                            <td colspan="3" style="color: #4cae4c; font-size: 17px; text-align: center;"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $this->modelGetPhoneOwner($record->owner_id); ?></td>
                            
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- thongtinchitiet -->
            <div class="thongtinchitiet">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Thông tin chi tiết</h6>
                        <p>
                            <?php echo $record->description ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- hinhanh -->
        <div class="hinhanh">
            <h6>Hình ảnh</h6>
            <!--  -->
            <script src="../Assets/Frontend/js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
            <script src="../Assets/Frontend/js/products_slideimg.js"></script>

            <link rel="stylesheet" href="../Assets/Frontend/css/products_slideimg.css">
            
            <div id="jssor_1" class="slideshow" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:650px;overflow:hidden;visibility:hidden;">
            <!-- Loading Screen -->
                <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                    <img style="margin-top:-19px;position:relative;top:50%;width:48px;height:38px;" src="img/spin.svg" />
                </div>
                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:950px;height:550px;overflow:hidden;">
                    <?php foreach ($listImg as $rows): ?>
                        <div>
                            <img data-u="image" class="images" src="../Assets/Upload/Products/<?php echo $rows->image; ?>" />
                            <img data-u="thumb" src="../Assets/Upload/Products/<?php echo $rows->image; ?>" />
                        </div> 
                    <?php endforeach; ?>        
                </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">web animation</a>
                <!-- Thumbnail Navigator -->
                <div data-u="thumbnavigator" class="jssort101" style="position:absolute; left: 0px;bottom:0px;width:900px;height:100px;background-color:rgb(255, 255, 255);" data-autocenter="1" data-scale-bottom="0.75">
                    <div data-u="slides">
                        <div data-u="prototype" class="p" style="width:150px;height:90px;">
                            <div data-u="thumbnailtemplate" class="t"></div>
                            <svg viewbox="0 0 16000 16000" class="cv">
                                <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                                <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                                <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- Arrow Navigator -->
                <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:240px;left:30px;" data-scale="0.75">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                        <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                        <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
                    </svg>
                </div>
                <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:240px;right:30px;" data-scale="0.75">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                        <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                        <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
                    </svg>
                </div>
            </div>
        <script type="text/javascript">jssor_1_slider_init();</script>
        </div>
        <!-- /hinhanh -->
        
        <!-- danhgia -->
        <div class="danhgia">
            <h6>Đánh giá, nhận xét</h6>
            <div class="diemso">
                <span class="diemtb"><?php echo $avgMark; ?>/10</span>
                <span style="color: #26bed6;"><?php echo $totalRating; ?> đánh giá</span>
            </div>
            <div class="themdanhgia">
                <form method="post" action="index.php?controller=products&action=createPostRating">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"><b>Đánh giá của bạn :</b></label>
                        <input type="number" name="star" id="number" max="10" min="0" step="1" placeholder="Điểm">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"><b>Nhận xét của bạn :</b></label>
                        <div class="row" style="margin: 3px 10px;">
                            <textarea class="form-control col-md-10" id="exampleFormControlTextarea1" name="comment" rows="2" style="width: 80%;" placeholder="Viết bình luận"></textarea>
                            <button type="submit" class="btn btn-primary col-md-1 col-sm-2 col-3">Gửi</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="dadanhgia">
            <?php foreach($listRecordRating as $rows):?>
                <div class="d-flex">
                    <div>
                        <i class="fa fa-user-circle fa-3x" style="color: #aaaaaa;font-size: 60px;" aria-hidden="true"></i>
                    </div>
                    <div class="binhluan">
                        <p><b><?php echo $this->modelGetNameRenter($rows->renter_users_id);?> </b>- <?php echo $rows->date;?></p>
                        <span class="diem"><?php echo number_format($rows->star);?>.0</span> <span style="color: #26bed6;"><?php echo $rows->comment;?></span>
                    </div>
                </div>
            <?php endforeach;?>
            </div>
        </div>
    </div>
    <!-- timkiemtin -->
    <div class="timkiemtin col-md-12 col-lg-4">
        <div class="timtheoquan">
            <div class="card-body khuvuc">
                <h5 class="card-title">Cho thuê phòng trọ</h5>
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
        </div>
        <div class="phonglienquan">
            <div class="card">
                <h5 class="card-header">PhÒNG LIÊN QUAN</h5>
                <div class="card-body">
                <?php foreach($this->modelGetProductRelatedByCategoryId($record->category_id) as $rows):?>
                    <div class="lienquan d-flex">
                        <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id;?>"><img src="../Assets/Upload/TitleImg/<?php echo $rows->photo;?>" alt=""></a>
                        <div>
                            <p><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id;?>"><?php echo $rows->name;?></a></p>
                            <b><?php echo number_format($rows->price);?> vnd/tháng</b>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>  
       
</div>